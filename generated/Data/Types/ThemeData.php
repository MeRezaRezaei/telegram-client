<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for theme of Theme.
 */
final class ThemeData extends TlThemeAbstractData
{
    public function __construct(
    public int $flags,
    public bool $creator,
    public bool $default,
    public bool $forChat,
    public int $id,
    public int $accessHash,
    public string $slug,
    public string $title,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlDocumentAbstractData $document,
    public ?array $settings,
    public string $emoticon,
    public int $installsCount,
    ) {
    }
}
