<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for pageBlockPhoto of PageBlock.
 */
final class PageBlockPhotoData extends TlPageBlockAbstractData
{
    public function __construct(
    public int $flags,
    public bool $spoiler,
    public int $photoId,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPageCaptionAbstractData $caption,
    public string $url,
    public int $webpageId,
    ) {
    }
}
