<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for inputStorePaymentPremiumGiveaway of InputStorePaymentPurpose.
 */
final class InputStorePaymentPremiumGiveawayData extends TlInputStorePaymentPurposeAbstractData
{
    public function __construct(
    public int $flags,
    public bool $onlyNewSubscribers,
    public bool $winnersAreVisible,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlInputPeerAbstractData $boostPeer,
    public ?array $additionalPeers,
    public ?array $countriesIso2,
    public string $prizeDescription,
    public int $randomId,
    public int $untilDate,
    public string $currency,
    public int $amount,
    ) {
    }
}
