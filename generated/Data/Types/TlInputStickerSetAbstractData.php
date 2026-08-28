<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/**
 * Union DTO base for TL type InputStickerSet.
 *
 * @method static static fromWire(array $payload)
 */
abstract class TlInputStickerSetAbstractData extends Data
{
    /** @var array<string, class-string<self>> */
    protected const DISPATCH = [
        'inputStickerSetAnimatedEmoji' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputStickerSetAnimatedEmojiData::class,
        'inputStickerSetAnimatedEmojiAnimations' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputStickerSetAnimatedEmojiAnimationsData::class,
        'inputStickerSetDice' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputStickerSetDiceData::class,
        'inputStickerSetEmojiChannelDefaultStatuses' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputStickerSetEmojiChannelDefaultStatusesData::class,
        'inputStickerSetEmojiDefaultStatuses' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputStickerSetEmojiDefaultStatusesData::class,
        'inputStickerSetEmojiDefaultTopicIcons' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputStickerSetEmojiDefaultTopicIconsData::class,
        'inputStickerSetEmojiGenericAnimations' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputStickerSetEmojiGenericAnimationsData::class,
        'inputStickerSetEmpty' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputStickerSetEmptyData::class,
        'inputStickerSetID' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputStickerSetIDData::class,
        'inputStickerSetPremiumGifts' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputStickerSetPremiumGiftsData::class,
        'inputStickerSetShortName' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputStickerSetShortNameData::class,
        'inputStickerSetTonGifts' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputStickerSetTonGiftsData::class,
    ];

    /** Dispatch on the constructor name carried under the '_' key of a decoded wire payload. */
    public static function fromWire(array $payload): static
    {
        $class = static::DISPATCH[$payload['_']]
            ?? throw new \InvalidArgumentException('Unknown constructor ' . $payload['_'] . ' for InputStickerSet');
        /** @var static */
        return $class::from($payload);
    }
}
