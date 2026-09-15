<?php

declare(strict_types=1);

namespace MirayS\Onix;

final class Text
{
    public const TYPE_HTML = '02';
    public const TYPE_XML = '03';
    public const TYPE_XHTML = '05';
    public const TYPE_DEFAULT = '06';
    public const TYPE_ASCII = '07';

    private const MARKUP_TYPES = [self::TYPE_HTML, self::TYPE_XML, self::TYPE_XHTML];

    public function __construct(
        private readonly string $content,
        private readonly string $textFormat = self::TYPE_DEFAULT,
        private readonly ?string $language = null,
    ) {
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function getTextFormat(): string
    {
        return $this->textFormat;
    }

    public function getLanguage(): ?string
    {
        return $this->language;
    }

    public function isMarkup(): bool
    {
        return in_array($this->textFormat, self::MARKUP_TYPES, true);
    }

    public function isEmpty(): bool
    {
        return trim($this->toPlain()) === '';
    }

    public function toPlain(): string
    {
        if (!$this->isMarkup()) {
            return $this->content;
        }

        $content = preg_replace('#<br\s*/?>#i', "\n", $this->content) ?? $this->content;
        $content = preg_replace('#</(p|div|li|tr|h[1-6])\s*>#i', "\n\n", $content) ?? $content;
        $content = strip_tags($content);
        $content = html_entity_decode($content, ENT_QUOTES | ENT_HTML5, 'UTF-8');
        $content = preg_replace('/[ \t]+/', ' ', $content) ?? $content;
        $content = preg_replace('/\n{3,}/', "\n\n", $content) ?? $content;

        return trim($content);
    }

    public function toHtml(): string
    {
        if ($this->isMarkup()) {
            return $this->content;
        }

        $content = htmlspecialchars($this->content, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
        $content = trim($content);

        if ($content === '') {
            return '';
        }

        return '<p>' . preg_replace(
            ['/\R{2,}/', '/\R/'],
            ['</p><p>', '<br>'],
            $content
        ) . '</p>';
    }

    public function __toString(): string
    {
        return $this->content;
    }
}
