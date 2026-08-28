<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for jsonNumber of JSONValue.
 */
final class JsonNumberData extends TlJSONValueAbstractData
{
    public function __construct(
    public float $value,
    ) {
    }
}
