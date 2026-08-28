<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for wallPaper of WallPaper.
 */
final class WallPaperData extends TlWallPaperAbstractData
{
    public function __construct(
    public int $id,
    public int $flags,
    public bool $creator,
    public bool $default,
    public bool $pattern,
    public bool $dark,
    public int $accessHash,
    public string $slug,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlDocumentAbstractData $document,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlWallPaperSettingsAbstractData $settings,
    ) {
    }
}
