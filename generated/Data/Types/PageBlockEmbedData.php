<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for pageBlockEmbed of PageBlock.
 */
final class PageBlockEmbedData extends TlPageBlockAbstractData
{
    public function __construct(
    public int $flags,
    public bool $fullWidth,
    public bool $allowScrolling,
    public string $url,
    public string $html,
    public int $posterPhotoId,
    public int $w,
    public int $h,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPageCaptionAbstractData $caption,
    ) {
    }
}
