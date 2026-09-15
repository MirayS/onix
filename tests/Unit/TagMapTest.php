<?php

declare(strict_types=1);

namespace MirayS\Onix\Tests\Unit;

use PHPUnit\Framework\TestCase;
use MirayS\Onix\Schema\ElementSchema;
use MirayS\Onix\Tag\TagMap;

final class TagMapTest extends TestCase
{
    public function testMapsShortTagsToReferenceNames(): void
    {
        self::assertSame('RecordReference', TagMap::toReference('a001'));
        self::assertSame('ProductIDType', TagMap::toReference('b221'));
        self::assertSame('Product', TagMap::toReference('product'));
    }

    public function testKeepsReferenceNames(): void
    {
        self::assertSame('RecordReference', TagMap::toReference('RecordReference'));
        self::assertSame('Unknown', TagMap::toReference('Unknown'));
    }

    public function testMapsReferenceNamesToShortTags(): void
    {
        self::assertSame('a001', TagMap::toShort('RecordReference'));
    }

    public function testCoversWholeSchema(): void
    {
        self::assertGreaterThan(500, count(TagMap::all()));
    }

    public function testKnowsReleaseOfElements(): void
    {
        self::assertSame(['3.0', '3.1'], ElementSchema::releases('RecordReference'));
        self::assertSame(['3.1'], ElementSchema::releases('PublisherNameInverted'));
        self::assertSame(['3.0'], ElementSchema::releases('Conference'));
        self::assertTrue(ElementSchema::isInRelease('MainSubject', '3.1'));
    }

    public function testKnowsCodeListOfElements(): void
    {
        self::assertSame('5', ElementSchema::codeList('ProductIDType'));
        self::assertNull(ElementSchema::codeList('IDValue'));
    }
}
