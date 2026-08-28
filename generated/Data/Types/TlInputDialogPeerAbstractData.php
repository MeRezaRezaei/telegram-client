<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/**
 * Union DTO base for TL type InputDialogPeer.
 *
 * @method static static fromWire(array $payload)
 */
abstract class TlInputDialogPeerAbstractData extends Data
{
    /** @var array<string, class-string<self>> */
    protected const DISPATCH = [
        'inputDialogPeer' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputDialogPeerData::class,
        'inputDialogPeerFolder' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputDialogPeerFolderData::class,
    ];

    /** Dispatch on the constructor name carried under the '_' key of a decoded wire payload. */
    public static function fromWire(array $payload): static
    {
        $class = static::DISPATCH[$payload['_']]
            ?? throw new \InvalidArgumentException('Unknown constructor ' . $payload['_'] . ' for InputDialogPeer');
        /** @var static */
        return $class::from($payload);
    }
}
