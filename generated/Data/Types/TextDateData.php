<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for textDate of RichText.
 */
final class TextDateData extends TlRichTextAbstractData
{
    public function __construct(
    public int $flags,
    public bool $relative,
    public bool $shortTime,
    public bool $longTime,
    public bool $shortDate,
    public bool $longDate,
    public bool $dayOfWeek,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlRichTextAbstractData $text,
    public int $date,
    ) {
    }
}
