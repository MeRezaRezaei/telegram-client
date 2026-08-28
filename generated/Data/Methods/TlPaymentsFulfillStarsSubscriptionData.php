<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Methods;

use Spatie\LaravelData\Data;

/** Request DTO for RPC method payments.fulfillStarsSubscription (crc32 cc5bebb3), returns Bool. */
final class TlPaymentsFulfillStarsSubscriptionData extends Data
{
    public const METHOD = 'payments.fulfillStarsSubscription';

    public static function method(): string
    {
        return self::METHOD;
    }

    public function __construct(
    public mixed $peer,
    public string $subscriptionId,
    ) {
    }
}
