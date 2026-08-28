<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for pageBlockCollage of PageBlock.
 */
final class PageBlockCollageData extends TlPageBlockAbstractData
{
    public function __construct(
    public array $items,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPageCaptionAbstractData $caption,
    ) {
    }
}
