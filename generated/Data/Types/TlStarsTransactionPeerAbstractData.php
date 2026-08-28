<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/**
 * Union DTO base for TL type StarsTransactionPeer.
 *
 * @method static static fromWire(array $payload)
 */
abstract class TlStarsTransactionPeerAbstractData extends Data
{
    /** @var array<string, class-string<self>> */
    protected const DISPATCH = [
        'starsTransactionPeer' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\StarsTransactionPeerData::class,
        'starsTransactionPeerAPI' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\StarsTransactionPeerAPIData::class,
        'starsTransactionPeerAds' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\StarsTransactionPeerAdsData::class,
        'starsTransactionPeerAppStore' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\StarsTransactionPeerAppStoreData::class,
        'starsTransactionPeerFragment' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\StarsTransactionPeerFragmentData::class,
        'starsTransactionPeerPlayMarket' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\StarsTransactionPeerPlayMarketData::class,
        'starsTransactionPeerPremiumBot' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\StarsTransactionPeerPremiumBotData::class,
        'starsTransactionPeerUnsupported' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\StarsTransactionPeerUnsupportedData::class,
    ];

    /** Dispatch on the constructor name carried under the '_' key of a decoded wire payload. */
    public static function fromWire(array $payload): static
    {
        $class = static::DISPATCH[$payload['_']]
            ?? throw new \InvalidArgumentException('Unknown constructor ' . $payload['_'] . ' for StarsTransactionPeer');
        /** @var static */
        return $class::from($payload);
    }
}
