<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for inputMediaUploadedDocument of InputMedia.
 */
final class InputMediaUploadedDocumentData extends TlInputMediaAbstractData
{
    public function __construct(
    public int $flags,
    public bool $nosoundVideo,
    public bool $forceFile,
    public bool $spoiler,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlInputFileAbstractData $file,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlInputFileAbstractData $thumb,
    public string $mimeType,
    public array $attributes,
    public ?array $stickers,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlInputPhotoAbstractData $videoCover,
    public int $videoTimestamp,
    public int $ttlSeconds,
    ) {
    }
}
