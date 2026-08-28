<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/**
 * Union DTO base for TL type payments.PaymentForm.
 *
 * @method static static fromWire(array $payload)
 */
abstract class TlPaymentsPaymentFormAbstractData extends Data
{
    /** @var array<string, class-string<self>> */
    protected const DISPATCH = [
        'payments.paymentForm' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPaymentsPaymentFormData::class,
        'payments.paymentFormStarGift' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPaymentsPaymentFormStarGiftData::class,
        'payments.paymentFormStars' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPaymentsPaymentFormStarsData::class,
    ];

    /** Dispatch on the constructor name carried under the '_' key of a decoded wire payload. */
    public static function fromWire(array $payload): static
    {
        $class = static::DISPATCH[$payload['_']]
            ?? throw new \InvalidArgumentException('Unknown constructor ' . $payload['_'] . ' for payments.PaymentForm');
        /** @var static */
        return $class::from($payload);
    }
}
