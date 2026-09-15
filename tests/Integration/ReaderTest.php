<?php

declare(strict_types=1);

namespace MirayS\Onix\Tests\Integration;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use MirayS\Onix\Exception\OnixException;
use MirayS\Onix\Hydration\Issue;
use MirayS\Onix\Reader\OnixReader;

final class ReaderTest extends TestCase
{
    private const FIXTURES = __DIR__ . '/../fixtures/';

    public static function officialSamples(): array
    {
        return [
            'ONIX 3.1 reference tags' => ['onix-3.1-reference.xml', '3.1'],
            'ONIX 3.1 short tags' => ['onix-3.1-short.xml', '3.1'],
            'ONIX 3.0 reference tags' => ['onix-3.0-reference.xml', '3.0'],
        ];
    }

    #[DataProvider('officialSamples')]
    public function testParsesOfficialSamplesWithoutIssues(string $fixture, string $release): void
    {
        $reader = new OnixReader();
        $products = iterator_to_array($reader->read(self::FIXTURES . $fixture), false);

        self::assertSame($release, $reader->getRelease());
        self::assertSame([], $reader->getIssues());
        self::assertCount(1, $products);

        $product = $products[0];

        self::assertSame('9780007232833', $product->getIsbn13());
        self::assertSame('Roseanna', $product->getTitle());
        self::assertSame(['Maj Sjöwall', 'Per Wahlöö'], $product->getAuthorNames());
        self::assertSame(245, $product->getDescriptiveDetail()?->getPageCount());
        self::assertStringContainsString('Martin Beck', (string) $product->getDescriptionText());
    }

    public function testReadsHeader(): void
    {
        $reader = new OnixReader();
        iterator_to_array($reader->read(self::FIXTURES . 'onix-3.1-reference.xml'), false);

        self::assertNotNull($reader->getHeader());
        self::assertNotNull($reader->getHeader()?->getSender()?->getSenderName());
    }

    public function testReadsBlockUpdateMessages(): void
    {
        $reader = new OnixReader();
        $products = iterator_to_array($reader->read(self::FIXTURES . 'onix-3.1-blockupdate.xml'), false);

        self::assertNotEmpty($products);
    }

    public function testKeepsMemoryConstantOnLargeMessages(): void
    {
        $file = tempnam(sys_get_temp_dir(), 'onix') . '.xml';
        $this->writeLargeMessage($file, 5000);

        $reader = new OnixReader();
        $before = memory_get_usage();
        $count = 0;

        foreach ($reader->read($file) as $product) {
            $count++;
        }

        $growth = memory_get_usage() - $before;
        unlink($file);

        self::assertSame(5000, $count);
        self::assertLessThan(2 * 1024 * 1024, $growth);
    }

    public function testDoesNotFailOnUnknownCodeListValue(): void
    {
        $reader = new OnixReader();
        $products = iterator_to_array($reader->readString($this->product('<NotificationType>99</NotificationType>')), false);

        self::assertCount(1, $products);
        self::assertSame('99', $products[0]->getNotificationType()?->getCode());
        self::assertFalse($products[0]->getNotificationType()?->isKnown());
        self::assertSame(Issue::UNKNOWN_CODE, $reader->getIssues()[0]->type);
    }

    public function testThrowsOnUnknownCodeListValueInStrictMode(): void
    {
        $reader = new OnixReader(strict: true);

        $this->expectException(OnixException::class);

        iterator_to_array($reader->readString($this->product('<NotificationType>99</NotificationType>')), false);
    }

    public function testReadsNamespacedDocuments(): void
    {
        $xml = '<onix:ONIXMessage release="3.1" xmlns:onix="http://ns.editeur.org/onix/3.1/reference">'
            . '<onix:Product><onix:RecordReference>a</onix:RecordReference>'
            . '<onix:ProductIdentifier><onix:ProductIDType>15</onix:ProductIDType>'
            . '<onix:IDValue>9780000000001</onix:IDValue></onix:ProductIdentifier>'
            . '</onix:Product></onix:ONIXMessage>';

        $reader = new OnixReader();
        $products = iterator_to_array($reader->readString($xml), false);

        self::assertCount(1, $products);
        self::assertSame('9780000000001', $products[0]->getIsbn13());
    }

    public function testReadsDefaultNamespacedDocuments(): void
    {
        $xml = '<ONIXMessage release="3.1" xmlns="http://ns.editeur.org/onix/3.1/reference">'
            . '<Product><RecordReference>a</RecordReference></Product></ONIXMessage>';

        $reader = new OnixReader();

        self::assertCount(1, iterator_to_array($reader->readString($xml), false));
    }

    public function testKeepsEmptyTextElements(): void
    {
        $reader = new OnixReader();
        $xml = $this->product(
            '<CollateralDetail><TextContent><TextType>03</TextType>'
            . '<ContentAudience>00</ContentAudience><Text></Text></TextContent></CollateralDetail>'
        );

        $products = iterator_to_array($reader->readString($xml), false);
        $text = $products[0]->getCollateralDetail()?->getTextContent()[0]->getText()[0] ?? null;

        self::assertNotNull($text);
        self::assertTrue($text->isEmpty());
    }

    public function testReportsRepeatedNonRepeatableElement(): void
    {
        $reader = new OnixReader();
        $xml = $this->product('<RecordReference>first</RecordReference><RecordReference>second</RecordReference>');

        $products = iterator_to_array($reader->readString($xml), false);

        self::assertSame('first', $products[0]->getRecordReference());
        self::assertSame(Issue::DUPLICATE_ELEMENT, $reader->getIssues()[0]->type);
    }

    public function testReportsUnknownElements(): void
    {
        $reader = new OnixReader();
        $xml = $this->product('<SomethingInvented>x</SomethingInvented>');

        iterator_to_array($reader->readString($xml), false);

        self::assertSame(Issue::UNKNOWN_ELEMENT, $reader->getIssues()[0]->type);
        self::assertSame('Product/SomethingInvented', $reader->getIssues()[0]->path);
    }

    public function testAttachesRecordReferenceToIssues(): void
    {
        $reader = new OnixReader();
        $xml = $this->product('<RecordReference>ref-1</RecordReference><SomethingInvented>x</SomethingInvented>');

        iterator_to_array($reader->readString($xml), false);

        self::assertSame('ref-1', $reader->getIssues()[0]->recordReference);
    }

    public function testExposesIssuesPerProduct(): void
    {
        $reader = new OnixReader();
        $xml = '<ONIXMessage release="3.1">'
            . '<Product><RecordReference>a</RecordReference><Invented>x</Invented></Product>'
            . '<Product><RecordReference>b</RecordReference></Product>'
            . '</ONIXMessage>';

        $issues = [];

        foreach ($reader->readString($xml) as $product) {
            $issues[$product->getRecordReference()] = count($reader->getProductIssues());
        }

        self::assertSame(['a' => 1, 'b' => 0], $issues);
    }

    public function testAppliesLegacyDateFormatElementToSiblingDate(): void
    {
        $reader = new OnixReader();
        $xml = $this->product('<PublishingDetail><PublishingDate>'
            . '<PublishingDateRole>01</PublishingDateRole>'
            . '<DateFormat>05</DateFormat>'
            . '<Date>2008</Date>'
            . '</PublishingDate></PublishingDetail>');

        $products = iterator_to_array($reader->readString($xml), false);
        $date = $products[0]->getPublishingDetail()?->getPublishingDate()[0]->getDate();

        self::assertSame('05', $date?->getFormatCode()->getCode());
        self::assertSame('year', $date?->getPrecision());
        self::assertSame([], $reader->getIssues());
    }

    public function testDateFormatAttributeWinsOverLegacyElement(): void
    {
        $reader = new OnixReader();
        $xml = $this->product('<PublishingDetail><PublishingDate>'
            . '<PublishingDateRole>01</PublishingDateRole>'
            . '<DateFormat>05</DateFormat>'
            . '<Date dateformat="00">20080515</Date>'
            . '</PublishingDate></PublishingDetail>');

        $products = iterator_to_array($reader->readString($xml), false);
        $date = $products[0]->getPublishingDetail()?->getPublishingDate()[0]->getDate();

        self::assertSame('00', $date?->getFormatCode()->getCode());
        self::assertSame('2008-05-15', $date?->format());
    }

    public function testCapturesRawProductXmlWhenEnabled(): void
    {
        $reader = new OnixReader(captureRawXml: true);
        $xml = '<ONIXMessage release="3.1">'
            . '<Product><RecordReference>a</RecordReference></Product>'
            . '<Product><RecordReference>b</RecordReference></Product>'
            . '</ONIXMessage>';

        $raw = [];

        foreach ($reader->readString($xml) as $product) {
            $raw[$product->getRecordReference()] = $reader->getProductRawXml();
        }

        self::assertSame([
            'a' => '<Product><RecordReference>a</RecordReference></Product>',
            'b' => '<Product><RecordReference>b</RecordReference></Product>',
        ], $raw);
    }

    public function testDoesNotCaptureRawProductXmlByDefault(): void
    {
        $reader = new OnixReader();

        foreach ($reader->readString($this->product('')) as $product) {
            self::assertNotNull($product);
            self::assertNull($reader->getProductRawXml());
        }
    }

    public function testReadsFlagElements(): void
    {
        $reader = new OnixReader();
        $xml = $this->product('<DescriptiveDetail><ProductComposition>00</ProductComposition>'
            . '<ProductForm>BB</ProductForm><NoContributor/></DescriptiveDetail>');

        $products = iterator_to_array($reader->readString($xml), false);

        self::assertTrue($products[0]->getDescriptiveDetail()?->hasNoContributor());
    }

    public function testReadsGzippedMessages(): void
    {
        $file = tempnam(sys_get_temp_dir(), 'onix') . '.xml.gz';
        file_put_contents($file, gzencode($this->product('<RecordReference>gz</RecordReference>')));

        $reader = new OnixReader();
        $products = iterator_to_array($reader->read($file), false);
        unlink($file);

        self::assertSame('gz', $products[0]->getRecordReference());
    }

    public function testReadsFromStreamResource(): void
    {
        $stream = fopen('php://memory', 'r+');
        fwrite($stream, $this->product('<RecordReference>stream</RecordReference>'));
        rewind($stream);

        $reader = new OnixReader();
        $products = iterator_to_array($reader->readStream($stream), false);
        fclose($stream);

        self::assertSame('stream', $products[0]->getRecordReference());
    }

    public function testRejectsMissingFiles(): void
    {
        $reader = new OnixReader();

        $this->expectException(OnixException::class);

        iterator_to_array($reader->read('/nonexistent/onix.xml'), false);
    }

    public function testKeepsMarkupInsideTextElements(): void
    {
        $reader = new OnixReader();
        $xml = $this->product(
            '<CollateralDetail><TextContent><TextType>03</TextType><ContentAudience>00</ContentAudience>'
            . '<Text textformat="05"><p>Hello <b>world</b></p></Text></TextContent></CollateralDetail>'
        );

        $products = iterator_to_array($reader->readString($xml), false);
        $text = $products[0]->getCollateralDetail()?->getTextContent()[0]->getText()[0];

        self::assertStringContainsString('<b>world</b>', (string) $text);
        self::assertSame('Hello world', $text->toPlain());
    }

    public function testDecodesEscapedMarkupInsideTextElements(): void
    {
        $reader = new OnixReader();
        $xml = $this->product(
            '<CollateralDetail><TextContent><TextType>03</TextType><ContentAudience>00</ContentAudience>'
            . '<Text textformat="02">&lt;p&gt;Escaped&lt;/p&gt;</Text></TextContent></CollateralDetail>'
        );

        $products = iterator_to_array($reader->readString($xml), false);
        $text = $products[0]->getCollateralDetail()?->getTextContent()[0]->getText()[0];

        self::assertSame('<p>Escaped</p>', (string) $text);
        self::assertSame('Escaped', $text->toPlain());
    }

    public function testReportsElementsOutsideDeclaredRelease(): void
    {
        $reader = new OnixReader(validateRelease: true);
        $xml = '<ONIXMessage release="3.0"><Product><RecordReference>a</RecordReference>'
            . '<PublishingDetail><Publisher><PublishingRole>01</PublishingRole>'
            . '<PublisherNameInverted>Doe, John</PublisherNameInverted></Publisher></PublishingDetail>'
            . '</Product></ONIXMessage>';

        iterator_to_array($reader->readString($xml), false);

        $types = array_map(static fn ($issue): string => $issue->type, $reader->getIssues());

        self::assertContains(Issue::RELEASE_MISMATCH, $types);
    }

    public function testDoesNotReportReleaseMismatchByDefault(): void
    {
        $reader = new OnixReader();
        $xml = '<ONIXMessage release="3.0"><Product><RecordReference>a</RecordReference>'
            . '<PublishingDetail><Publisher><PublishingRole>01</PublishingRole>'
            . '<PublisherNameInverted>Doe, John</PublisherNameInverted></Publisher></PublishingDetail>'
            . '</Product></ONIXMessage>';

        iterator_to_array($reader->readString($xml), false);

        self::assertSame([], $reader->getIssues());
    }

    private function product(string $body): string
    {
        return '<ONIXMessage release="3.1"><Product>' . $body . '</Product></ONIXMessage>';
    }

    private function writeLargeMessage(string $file, int $products): void
    {
        $handle = fopen($file, 'w');
        fwrite($handle, '<ONIXMessage release="3.1">');

        for ($i = 0; $i < $products; $i++) {
            fwrite($handle, sprintf(
                '<Product><RecordReference>r%d</RecordReference><NotificationType>03</NotificationType>'
                . '<ProductIdentifier><ProductIDType>15</ProductIDType><IDValue>978%010d</IDValue></ProductIdentifier>'
                . '<DescriptiveDetail><ProductComposition>00</ProductComposition><ProductForm>BB</ProductForm>'
                . '<TitleDetail><TitleType>01</TitleType><TitleElement><TitleElementLevel>01</TitleElementLevel>'
                . '<TitleText>Book %d</TitleText></TitleElement></TitleDetail></DescriptiveDetail></Product>',
                $i,
                $i,
                $i,
            ));
        }

        fwrite($handle, '</ONIXMessage>');
        fclose($handle);
    }
}
