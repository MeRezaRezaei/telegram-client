<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/**
 * Union DTO base for TL type JSONValue.
 *
 * @method static static fromWire(array $payload)
 */
abstract class TlJSONValueAbstractData extends Data
{
    /** @var array<string, class-string<self>> */
    protected const DISPATCH = [
        'jsonArray' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\JsonArrayData::class,
        'jsonBool' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\JsonBoolData::class,
        'jsonNull' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\JsonNullData::class,
        'jsonNumber' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\JsonNumberData::class,
        'jsonObject' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\JsonObjectData::class,
        'jsonString' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\JsonStringData::class,
    ];

    /** Dispatch on the constructor name carried under the '_' key of a decoded wire payload. */
    public static function fromWire(array $payload): static
    {
        $class = static::DISPATCH[$payload['_']]
            ?? throw new \InvalidArgumentException('Unknown constructor ' . $payload['_'] . ' for JSONValue');
        /** @var static */
        return $class::from($payload);
    }
}
