<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/**
 * Union DTO base for TL type InputStickerSet.
 *
 * @method static static hydrate(array $payload)
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

    /** @var array<string, array{0:string,1:int}> camelCase param name => [flag word, bit] for flags.N?true params */
    public const TL_FLAG_BITS = [];

    /** Dispatch on the constructor name carried under the '_' key of a decoded wire payload. */
    public static function hydrate(array $payload): static
    {
        $class = static::DISPATCH[$payload['_']]
            ?? throw new \InvalidArgumentException('Unknown constructor ' . $payload['_'] . ' for InputStickerSet');
        foreach ((new \ReflectionMethod($class, '__construct'))->getParameters() as $param) {
            $name = $param->getName();
            if (array_key_exists($name, $payload)) {
                continue;
            }
            $bits = $class::TL_FLAG_BITS[$name] ?? null;
            if ($bits !== null) {
                $word = (int) ($payload[$bits[0]] ?? 0);
                $payload[$name] = (bool) ($word >> $bits[1] & 1);
                continue;
            }
            $wireKey = self::tlWireKey($name);
            $payload[$name] = array_key_exists($wireKey, $payload) ? $payload[$wireKey] : null;
        }
        /** @var static */
        return $class::from($payload);
    }

    /** camelCase constructor param name to snake_case wire key (regex-free). */
    private static function tlWireKey(string $name): string
    {
        $out = '';
        foreach (str_split($name) as $i => $ch) {
            $out .= $i > 0 && $ch >= 'A' && $ch <= 'Z' ? '_' . strtolower($ch) : $ch;
        }
        return $out;
    }
}
