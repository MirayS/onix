<?php

declare(strict_types=1);

namespace MirayS\Onix\Hydration;

final class Issue
{
    public const UNKNOWN_ELEMENT = 'unknown_element';
    public const UNKNOWN_CODE = 'unknown_code';
    public const DUPLICATE_ELEMENT = 'duplicate_element';
    public const INVALID_VALUE = 'invalid_value';
    public const RELEASE_MISMATCH = 'release_mismatch';
    public const XML_ERROR = 'xml_error';

    public function __construct(
        public readonly string $type,
        public readonly string $path,
        public readonly string $message,
        public readonly ?string $recordReference = null,
    ) {
    }

    public function __toString(): string
    {
        return sprintf('[%s] %s: %s', $this->type, $this->path, $this->message);
    }
}
