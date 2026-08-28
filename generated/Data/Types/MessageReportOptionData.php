<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for messageReportOption of MessageReportOption.
 *
 * bytes params carried as base64 strings: option
 */
final class MessageReportOptionData extends TlMessageReportOptionAbstractData
{
    public function __construct(
    public string $text,
    public string $option,
    ) {
    }
}
