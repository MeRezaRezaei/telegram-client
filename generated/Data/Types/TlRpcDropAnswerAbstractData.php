<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/**
 * Union DTO base for TL type RpcDropAnswer.
 *
 * @method static static fromWire(array $payload)
 */
abstract class TlRpcDropAnswerAbstractData extends Data
{
    /** @var array<string, class-string<self>> */
    protected const DISPATCH = [
        'rpc_answer_dropped' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\RpcAnswerDroppedData::class,
        'rpc_answer_dropped_running' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\RpcAnswerDroppedRunningData::class,
        'rpc_answer_unknown' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\RpcAnswerUnknownData::class,
    ];

    /** Dispatch on the constructor name carried under the '_' key of a decoded wire payload. */
    public static function fromWire(array $payload): static
    {
        $class = static::DISPATCH[$payload['_']]
            ?? throw new \InvalidArgumentException('Unknown constructor ' . $payload['_'] . ' for RpcDropAnswer');
        /** @var static */
        return $class::from($payload);
    }
}
