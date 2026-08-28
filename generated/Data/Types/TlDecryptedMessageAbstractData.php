<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/**
 * Union DTO base for TL type DecryptedMessage.
 *
 * @method static static fromWire(array $payload)
 */
abstract class TlDecryptedMessageAbstractData extends Data
{
    /** @var array<string, class-string<self>> */
    protected const DISPATCH = [
        'decryptedMessage' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\DecryptedMessageData::class,
        'decryptedMessageService' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\DecryptedMessageServiceData::class,
    ];

    /** Dispatch on the constructor name carried under the '_' key of a decoded wire payload. */
    public static function fromWire(array $payload): static
    {
        $class = static::DISPATCH[$payload['_']]
            ?? throw new \InvalidArgumentException('Unknown constructor ' . $payload['_'] . ' for DecryptedMessage');
        /** @var static */
        return $class::from($payload);
    }
}
