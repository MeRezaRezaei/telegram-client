<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for pageCaption of PageCaption.
 */
final class PageCaptionData extends TlPageCaptionAbstractData
{
    public function __construct(
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlRichTextAbstractData $text,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlRichTextAbstractData $credit,
    ) {
    }
}
