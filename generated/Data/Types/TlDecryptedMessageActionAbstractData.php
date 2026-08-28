<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/**
 * Union DTO base for TL type DecryptedMessageAction.
 *
 * @method static static fromWire(array $payload)
 */
abstract class TlDecryptedMessageActionAbstractData extends Data
{
    /** @var array<string, class-string<self>> */
    protected const DISPATCH = [
        'decryptedMessageActionAbortKey' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\DecryptedMessageActionAbortKeyData::class,
        'decryptedMessageActionAcceptKey' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\DecryptedMessageActionAcceptKeyData::class,
        'decryptedMessageActionCommitKey' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\DecryptedMessageActionCommitKeyData::class,
        'decryptedMessageActionDeleteMessages' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\DecryptedMessageActionDeleteMessagesData::class,
        'decryptedMessageActionFlushHistory' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\DecryptedMessageActionFlushHistoryData::class,
        'decryptedMessageActionNoop' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\DecryptedMessageActionNoopData::class,
        'decryptedMessageActionNotifyLayer' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\DecryptedMessageActionNotifyLayerData::class,
        'decryptedMessageActionReadMessages' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\DecryptedMessageActionReadMessagesData::class,
        'decryptedMessageActionRequestKey' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\DecryptedMessageActionRequestKeyData::class,
        'decryptedMessageActionResend' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\DecryptedMessageActionResendData::class,
        'decryptedMessageActionScreenshotMessages' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\DecryptedMessageActionScreenshotMessagesData::class,
        'decryptedMessageActionSetMessageTTL' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\DecryptedMessageActionSetMessageTTLData::class,
        'decryptedMessageActionTyping' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\DecryptedMessageActionTypingData::class,
    ];

    /** Dispatch on the constructor name carried under the '_' key of a decoded wire payload. */
    public static function fromWire(array $payload): static
    {
        $class = static::DISPATCH[$payload['_']]
            ?? throw new \InvalidArgumentException('Unknown constructor ' . $payload['_'] . ' for DecryptedMessageAction');
        /** @var static */
        return $class::from($payload);
    }
}
