<?php

declare(strict_types=1);

namespace MirayS\Onix\Hydration;

use MirayS\Onix\Exception\OnixException;

final class IssueCollector
{
    private array $issues = [];

    private ?string $recordReference = null;

    public function __construct(
        private readonly bool $strict = false,
        private readonly int $limit = 1000,
    ) {
    }

    public function setRecordReference(?string $recordReference): void
    {
        $this->recordReference = $recordReference;
    }

    public function add(string $type, string $path, string $message): void
    {
        $issue = new Issue($type, $path, $message, $this->recordReference);

        if ($this->strict) {
            throw new OnixException((string) $issue);
        }

        if (count($this->issues) < $this->limit) {
            $this->issues[] = $issue;
        }
    }

    public function all(): array
    {
        return $this->issues;
    }

    public function count(): int
    {
        return count($this->issues);
    }

    public function clear(): void
    {
        $this->issues = [];
    }
}
