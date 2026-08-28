<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/**
 * Union DTO base for TL type P_Q_inner_data.
 *
 * @method static static fromWire(array $payload)
 */
abstract class TlPQInnerDataAbstractData extends Data
{
    /** @var array<string, class-string<self>> */
    protected const DISPATCH = [
        'p_q_inner_data_dc' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\PQInnerDataDcData::class,
        'p_q_inner_data_temp_dc' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\PQInnerDataTempDcData::class,
    ];

    /** Dispatch on the constructor name carried under the '_' key of a decoded wire payload. */
    public static function fromWire(array $payload): static
    {
        $class = static::DISPATCH[$payload['_']]
            ?? throw new \InvalidArgumentException('Unknown constructor ' . $payload['_'] . ' for P_Q_inner_data');
        /** @var static */
        return $class::from($payload);
    }
}
