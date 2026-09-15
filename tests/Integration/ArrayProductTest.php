<?php

declare(strict_types=1);

namespace MirayS\Onix\Tests\Integration;

use MirayS\Onix\Parser;
use PHPUnit\Framework\TestCase;

final class ArrayProductTest extends TestCase
{
    public function testHydratesProductFromOnixJsonExpression(): void
    {
        $parser = new Parser();

        $product = $parser->parseArrayProduct([
            'RecordReference' => '9784780802047',
            'NotificationType' => '03',
            'ProductIdentifier' => ['ProductIDType' => '15', 'IDValue' => '9784780802047'],
            'DescriptiveDetail' => [
                'ProductForm' => 'BA',
                'TitleDetail' => [
                    'TitleType' => '01',
                    'TitleElement' => [
                        'TitleElementLevel' => '01',
                        'TitleText' => ['collationkey' => 'オニギリ', 'content' => 'おにぎりレシピ101'],
                        'Subtitle' => ['content' => 'EVERYDAY ONIGIRI 101'],
                    ],
                ],
                'Contributor' => [
                    ['SequenceNumber' => '1', 'ContributorRole' => ['A01'], 'PersonName' => ['content' => '山田 玲子']],
                    ['SequenceNumber' => '2', 'ContributorRole' => ['B01'], 'PersonName' => ['content' => '水野 菜生']],
                ],
                'Language' => [['LanguageRole' => '01', 'LanguageCode' => 'jpn']],
                'Extent' => [['ExtentType' => '11', 'ExtentValue' => '126', 'ExtentUnit' => '03']],
                'Subject' => [['MainSubject' => '', 'SubjectSchemeIdentifier' => '93', 'SubjectCode' => 'WBN']],
            ],
        ]);

        self::assertSame('9784780802047', $product->getRecordReference());
        self::assertSame('9784780802047', $product->getIsbn13());
        self::assertSame('BA', $product->getDescriptiveDetail()?->getProductForm()?->getCode());
        self::assertSame('おにぎりレシピ101: EVERYDAY ONIGIRI 101', $product->getFullTitle());
        self::assertSame(['山田 玲子'], $product->getAuthorNames());
        self::assertCount(2, $product->getContributors());
        self::assertSame('126', $product->getDescriptiveDetail()?->getExtent()[0]->getExtentValue());
        self::assertSame('WBN', $product->getDescriptiveDetail()?->getSubject()[0]->getSubjectCode());
        self::assertSame([], $parser->getIssues());
    }

    public function testKeepsAttributesAlongsideContent(): void
    {
        $parser = new Parser();

        $product = $parser->parseArrayProduct([
            'RecordReference' => 'a',
            'CollateralDetail' => [
                'TextContent' => [
                    ['TextType' => '03', 'ContentAudience' => '00', 'Text' => ['textformat' => '05', 'content' => '<p>Hello</p>']],
                ],
            ],
        ]);

        self::assertSame('Hello', $product->getDescriptionText());
        self::assertSame([], $parser->getIssues());
    }

    public function testTreatsEmptyStringAsFlagElement(): void
    {
        $parser = new Parser();

        $product = $parser->parseArrayProduct([
            'RecordReference' => 'a',
            'DescriptiveDetail' => ['ProductForm' => 'BC', 'NoContributor' => ''],
        ]);

        self::assertTrue($product->getDescriptiveDetail()?->hasNoContributor());
    }
}
