<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/**
 * Union DTO base for TL type Set_client_DH_params_answer.
 *
 * @method static static fromWire(array $payload)
 */
abstract class TlSetClientDHParamsAnswerAbstractData extends Data
{
    /** @var array<string, class-string<self>> */
    protected const DISPATCH = [
        'dh_gen_fail' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\DhGenFailData::class,
        'dh_gen_ok' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\DhGenOkData::class,
        'dh_gen_retry' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\DhGenRetryData::class,
    ];

    /** Dispatch on the constructor name carried under the '_' key of a decoded wire payload. */
    public static function fromWire(array $payload): static
    {
        $class = static::DISPATCH[$payload['_']]
            ?? throw new \InvalidArgumentException('Unknown constructor ' . $payload['_'] . ' for Set_client_DH_params_answer');
        /** @var static */
        return $class::from($payload);
    }
}
