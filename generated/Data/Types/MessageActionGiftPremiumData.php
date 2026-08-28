<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for messageActionGiftPremium of MessageAction.
 */
final class MessageActionGiftPremiumData extends TlMessageActionAbstractData
{
    public function __construct(
    public int $flags,
    public string $currency,
    public int $amount,
    public int $days,
    public ?string $cryptoCurrency,
    public ?int $cryptoAmount,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlTextWithEntitiesAbstractData $message,
    ) {
    }
}
