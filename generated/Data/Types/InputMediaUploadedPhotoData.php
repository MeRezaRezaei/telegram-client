<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for inputMediaUploadedPhoto of InputMedia.
 */
final class InputMediaUploadedPhotoData extends TlInputMediaAbstractData
{
    public function __construct(
    public int $flags,
    public bool $spoiler,
    public bool $livePhoto,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlInputFileAbstractData $file,
    public ?array $stickers,
    public int $ttlSeconds,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlInputDocumentAbstractData $video,
    ) {
    }
}
