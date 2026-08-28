<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/**
 * Union DTO base for TL type help.PeerColors.
 *
 * @method static static fromWire(array $payload)
 */
abstract class TlHelpPeerColorsAbstractData extends Data
{
    /** @var array<string, class-string<self>> */
    protected const DISPATCH = [
        'help.peerColors' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlHelpPeerColorsData::class,
        'help.peerColorsNotModified' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlHelpPeerColorsNotModifiedData::class,
    ];

    /** Dispatch on the constructor name carried under the '_' key of a decoded wire payload. */
    public static function fromWire(array $payload): static
    {
        $class = static::DISPATCH[$payload['_']]
            ?? throw new \InvalidArgumentException('Unknown constructor ' . $payload['_'] . ' for help.PeerColors');
        /** @var static */
        return $class::from($payload);
    }
}
