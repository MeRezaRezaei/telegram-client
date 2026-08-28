<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for inputMediaDocument of InputMedia.
 */
final class InputMediaDocumentData extends TlInputMediaAbstractData
{
    public function __construct(
    public int $flags,
    public bool $spoiler,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlInputDocumentAbstractData $id,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlInputPhotoAbstractData $videoCover,
    public int $videoTimestamp,
    public int $ttlSeconds,
    public string $query,
    ) {
    }
}
