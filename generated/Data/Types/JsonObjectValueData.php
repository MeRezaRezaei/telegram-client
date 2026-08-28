<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for jsonObjectValue of JSONObjectValue.
 */
final class JsonObjectValueData extends TlJSONObjectValueAbstractData
{
    public function __construct(
    public string $key,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlJSONValueAbstractData $value,
    ) {
    }
}
