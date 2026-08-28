<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/**
 * Union DTO base for TL type MessageEntity.
 *
 * @method static static hydrate(array $payload)
 */
abstract class TlMessageEntityAbstractData extends Data
{
    /** @var array<string, class-string<self>> */
    protected const DISPATCH = [
        'inputMessageEntityMentionName' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputMessageEntityMentionNameData::class,
        'messageEntityBankCard' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageEntityBankCardData::class,
        'messageEntityBlockquote' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageEntityBlockquoteData::class,
        'messageEntityBold' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageEntityBoldData::class,
        'messageEntityBotCommand' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageEntityBotCommandData::class,
        'messageEntityCashtag' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageEntityCashtagData::class,
        'messageEntityCode' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageEntityCodeData::class,
        'messageEntityCustomEmoji' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageEntityCustomEmojiData::class,
        'messageEntityDiffDelete' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageEntityDiffDeleteData::class,
        'messageEntityDiffInsert' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageEntityDiffInsertData::class,
        'messageEntityDiffReplace' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageEntityDiffReplaceData::class,
        'messageEntityEmail' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageEntityEmailData::class,
        'messageEntityFormattedDate' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageEntityFormattedDateData::class,
        'messageEntityHashtag' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageEntityHashtagData::class,
        'messageEntityItalic' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageEntityItalicData::class,
        'messageEntityMention' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageEntityMentionData::class,
        'messageEntityMentionName' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageEntityMentionNameData::class,
        'messageEntityPhone' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageEntityPhoneData::class,
        'messageEntityPre' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageEntityPreData::class,
        'messageEntitySpoiler' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageEntitySpoilerData::class,
        'messageEntityStrike' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageEntityStrikeData::class,
        'messageEntityTextUrl' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageEntityTextUrlData::class,
        'messageEntityUnderline' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageEntityUnderlineData::class,
        'messageEntityUnknown' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageEntityUnknownData::class,
        'messageEntityUrl' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageEntityUrlData::class,
    ];

    /** @var array<string, array{0:string,1:int}> camelCase param name => [flag word, bit] for flags.N?true params */
    public const TL_FLAG_BITS = [];

    /** Dispatch on the constructor name carried under the '_' key of a decoded wire payload. */
    public static function hydrate(array $payload): static
    {
        $class = static::DISPATCH[$payload['_']]
            ?? throw new \InvalidArgumentException('Unknown constructor ' . $payload['_'] . ' for MessageEntity');
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
