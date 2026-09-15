<?php

declare(strict_types=1);

namespace MirayS\Onix\Hydration;

final class PropertyMetadata
{
    public function __construct(
        public readonly string $element,
        public readonly string $method,
        public readonly bool $collection,
        public readonly ?string $className,
        public readonly ?string $builtinType,
    ) {
    }
}
