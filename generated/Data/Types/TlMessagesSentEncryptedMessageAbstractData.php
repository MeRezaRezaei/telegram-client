<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/**
 * Union DTO base for TL type messages.SentEncryptedMessage.
 *
 * @method static static fromWire(array $payload)
 */
abstract class TlMessagesSentEncryptedMessageAbstractData extends Data
{
    /** @var array<string, class-string<self>> */
    protected const DISPATCH = [
        'messages.sentEncryptedFile' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlMessagesSentEncryptedFileData::class,
        'messages.sentEncryptedMessage' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlMessagesSentEncryptedMessageData::class,
    ];

    /** Dispatch on the constructor name carried under the '_' key of a decoded wire payload. */
    public static function fromWire(array $payload): static
    {
        $class = static::DISPATCH[$payload['_']]
            ?? throw new \InvalidArgumentException('Unknown constructor ' . $payload['_'] . ' for messages.SentEncryptedMessage');
        /** @var static */
        return $class::from($payload);
    }
}
