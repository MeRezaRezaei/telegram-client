<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/**
 * Union DTO base for TL type EncryptedChat.
 *
 * @method static static fromWire(array $payload)
 */
abstract class TlEncryptedChatAbstractData extends Data
{
    /** @var array<string, class-string<self>> */
    protected const DISPATCH = [
        'encryptedChat' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\EncryptedChatData::class,
        'encryptedChatDiscarded' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\EncryptedChatDiscardedData::class,
        'encryptedChatEmpty' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\EncryptedChatEmptyData::class,
        'encryptedChatRequested' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\EncryptedChatRequestedData::class,
        'encryptedChatWaiting' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\EncryptedChatWaitingData::class,
    ];

    /** Dispatch on the constructor name carried under the '_' key of a decoded wire payload. */
    public static function fromWire(array $payload): static
    {
        $class = static::DISPATCH[$payload['_']]
            ?? throw new \InvalidArgumentException('Unknown constructor ' . $payload['_'] . ' for EncryptedChat');
        /** @var static */
        return $class::from($payload);
    }
}
