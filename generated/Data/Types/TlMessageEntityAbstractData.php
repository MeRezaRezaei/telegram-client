<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/**
 * Union DTO base for TL type MessageEntity.
 *
 * @method static static fromWire(array $payload)
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

    /** Dispatch on the constructor name carried under the '_' key of a decoded wire payload. */
    public static function fromWire(array $payload): static
    {
        $class = static::DISPATCH[$payload['_']]
            ?? throw new \InvalidArgumentException('Unknown constructor ' . $payload['_'] . ' for MessageEntity');
        /** @var static */
        return $class::from($payload);
    }
}
