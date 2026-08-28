<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for messageActionGiftCode of MessageAction.
 */
final class MessageActionGiftCodeData extends TlMessageActionAbstractData
{
    public function __construct(
    public int $flags,
    public bool $viaGiveaway,
    public bool $unclaimed,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPeerAbstractData $boostPeer,
    public int $days,
    public string $slug,
    public string $currency,
    public int $amount,
    public string $cryptoCurrency,
    public int $cryptoAmount,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlTextWithEntitiesAbstractData $message,
    ) {
    }
}
