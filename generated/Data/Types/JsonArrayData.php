<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for jsonArray of JSONValue.
 */
final class JsonArrayData extends TlJSONValueAbstractData
{
    public function __construct(
    public array $value,
    ) {
    }
}
