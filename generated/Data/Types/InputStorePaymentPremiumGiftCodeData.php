<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for inputStorePaymentPremiumGiftCode of InputStorePaymentPurpose.
 */
final class InputStorePaymentPremiumGiftCodeData extends TlInputStorePaymentPurposeAbstractData
{
    public function __construct(
    public int $flags,
    public array $users,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlInputPeerAbstractData $boostPeer,
    public string $currency,
    public int $amount,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlTextWithEntitiesAbstractData $message,
    ) {
    }
}
