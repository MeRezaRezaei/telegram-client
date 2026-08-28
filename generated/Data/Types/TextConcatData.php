<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for textConcat of RichText.
 */
final class TextConcatData extends TlRichTextAbstractData
{
    public function __construct(
    public array $texts,
    ) {
    }
}
