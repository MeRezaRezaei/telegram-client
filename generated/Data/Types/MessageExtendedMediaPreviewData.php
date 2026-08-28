<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for messageExtendedMediaPreview of MessageExtendedMedia.
 */
final class MessageExtendedMediaPreviewData extends TlMessageExtendedMediaAbstractData
{
    public function __construct(
    public int $flags,
    public int $w,
    public int $h,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPhotoSizeAbstractData $thumb,
    public int $videoDuration,
    ) {
    }
}
