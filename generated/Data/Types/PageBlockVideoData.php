<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for pageBlockVideo of PageBlock.
 */
final class PageBlockVideoData extends TlPageBlockAbstractData
{
    public function __construct(
    public int $flags,
    public bool $autoplay,
    public bool $loop,
    public bool $spoiler,
    public int $videoId,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPageCaptionAbstractData $caption,
    ) {
    }
}
