<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/**
 * Union DTO base for TL type KeyboardButton.
 *
 * @method static static fromWire(array $payload)
 */
abstract class TlKeyboardButtonAbstractData extends Data
{
    /** @var array<string, class-string<self>> */
    protected const DISPATCH = [
        'inputKeyboardButtonRequestPeer' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputKeyboardButtonRequestPeerData::class,
        'inputKeyboardButtonUrlAuth' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputKeyboardButtonUrlAuthData::class,
        'inputKeyboardButtonUserProfile' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputKeyboardButtonUserProfileData::class,
        'keyboardButton' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\KeyboardButtonData::class,
        'keyboardButtonBuy' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\KeyboardButtonBuyData::class,
        'keyboardButtonCallback' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\KeyboardButtonCallbackData::class,
        'keyboardButtonCopy' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\KeyboardButtonCopyData::class,
        'keyboardButtonGame' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\KeyboardButtonGameData::class,
        'keyboardButtonRequestGeoLocation' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\KeyboardButtonRequestGeoLocationData::class,
        'keyboardButtonRequestPeer' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\KeyboardButtonRequestPeerData::class,
        'keyboardButtonRequestPhone' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\KeyboardButtonRequestPhoneData::class,
        'keyboardButtonRequestPoll' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\KeyboardButtonRequestPollData::class,
        'keyboardButtonSimpleWebView' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\KeyboardButtonSimpleWebViewData::class,
        'keyboardButtonSwitchInline' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\KeyboardButtonSwitchInlineData::class,
        'keyboardButtonUrl' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\KeyboardButtonUrlData::class,
        'keyboardButtonUrlAuth' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\KeyboardButtonUrlAuthData::class,
        'keyboardButtonUserProfile' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\KeyboardButtonUserProfileData::class,
        'keyboardButtonWebView' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\KeyboardButtonWebViewData::class,
    ];

    /** Dispatch on the constructor name carried under the '_' key of a decoded wire payload. */
    public static function fromWire(array $payload): static
    {
        $class = static::DISPATCH[$payload['_']]
            ?? throw new \InvalidArgumentException('Unknown constructor ' . $payload['_'] . ' for KeyboardButton');
        /** @var static */
        return $class::from($payload);
    }
}
