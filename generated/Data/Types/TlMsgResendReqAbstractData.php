<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/**
 * Union DTO base for TL type MsgResendReq.
 *
 * @method static static fromWire(array $payload)
 */
abstract class TlMsgResendReqAbstractData extends Data
{
    /** @var array<string, class-string<self>> */
    protected const DISPATCH = [
        'msg_resend_ans_req' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MsgResendAnsReqData::class,
        'msg_resend_req' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MsgResendReqData::class,
    ];

    /** Dispatch on the constructor name carried under the '_' key of a decoded wire payload. */
    public static function fromWire(array $payload): static
    {
        $class = static::DISPATCH[$payload['_']]
            ?? throw new \InvalidArgumentException('Unknown constructor ' . $payload['_'] . ' for MsgResendReq');
        /** @var static */
        return $class::from($payload);
    }
}
