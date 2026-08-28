<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/**
 * Union DTO base for TL type RichText.
 *
 * @method static static hydrate(array $payload)
 */
abstract class TlRichTextAbstractData extends Data
{
    /** @var array<string, class-string<self>> */
    protected const DISPATCH = [
        'textAnchor' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TextAnchorData::class,
        'textAutoEmail' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TextAutoEmailData::class,
        'textAutoPhone' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TextAutoPhoneData::class,
        'textAutoUrl' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TextAutoUrlData::class,
        'textBankCard' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TextBankCardData::class,
        'textBold' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TextBoldData::class,
        'textBotCommand' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TextBotCommandData::class,
        'textCashtag' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TextCashtagData::class,
        'textConcat' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TextConcatData::class,
        'textCustomEmoji' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TextCustomEmojiData::class,
        'textDate' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TextDateData::class,
        'textEmail' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TextEmailData::class,
        'textEmpty' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TextEmptyData::class,
        'textFixed' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TextFixedData::class,
        'textHashtag' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TextHashtagData::class,
        'textImage' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TextImageData::class,
        'textItalic' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TextItalicData::class,
        'textMarked' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TextMarkedData::class,
        'textMath' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TextMathData::class,
        'textMention' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TextMentionData::class,
        'textMentionName' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TextMentionNameData::class,
        'textPhone' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TextPhoneData::class,
        'textPlain' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TextPlainData::class,
        'textSpoiler' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TextSpoilerData::class,
        'textStrike' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TextStrikeData::class,
        'textSubscript' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TextSubscriptData::class,
        'textSuperscript' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TextSuperscriptData::class,
        'textUnderline' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TextUnderlineData::class,
        'textUrl' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TextUrlData::class,
    ];

    /** @var array<string, array{0:string,1:int}> camelCase param name => [flag word, bit] for flags.N?true params */
    public const TL_FLAG_BITS = [];

    /** Dispatch on the constructor name carried under the '_' key of a decoded wire payload. */
    public static function hydrate(array $payload): static
    {
        $class = static::DISPATCH[$payload['_']]
            ?? throw new \InvalidArgumentException('Unknown constructor ' . $payload['_'] . ' for RichText');
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
