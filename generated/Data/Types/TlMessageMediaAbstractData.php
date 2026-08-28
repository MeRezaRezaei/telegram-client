<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/**
 * Union DTO base for TL type MessageMedia.
 *
 * @method static static hydrate(array $payload)
 */
abstract class TlMessageMediaAbstractData extends Data
{
    /** @var array<string, class-string<self>> */
    protected const DISPATCH = [
        'messageMediaContact' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageMediaContactData::class,
        'messageMediaDice' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageMediaDiceData::class,
        'messageMediaDocument' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageMediaDocumentData::class,
        'messageMediaEmpty' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageMediaEmptyData::class,
        'messageMediaGame' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageMediaGameData::class,
        'messageMediaGeo' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageMediaGeoData::class,
        'messageMediaGeoLive' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageMediaGeoLiveData::class,
        'messageMediaGiveaway' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageMediaGiveawayData::class,
        'messageMediaGiveawayResults' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageMediaGiveawayResultsData::class,
        'messageMediaInvoice' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageMediaInvoiceData::class,
        'messageMediaPaidMedia' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageMediaPaidMediaData::class,
        'messageMediaPhoto' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageMediaPhotoData::class,
        'messageMediaPoll' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageMediaPollData::class,
        'messageMediaStory' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageMediaStoryData::class,
        'messageMediaToDo' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageMediaToDoData::class,
        'messageMediaUnsupported' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageMediaUnsupportedData::class,
        'messageMediaVenue' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageMediaVenueData::class,
        'messageMediaVideoStream' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageMediaVideoStreamData::class,
        'messageMediaWebPage' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageMediaWebPageData::class,
    ];

    /** @var array<string, array{0:string,1:int}> camelCase param name => [flag word, bit] for flags.N?true params */
    public const TL_FLAG_BITS = [];

    /** Dispatch on the constructor name carried under the '_' key of a decoded wire payload. */
    public static function hydrate(array $payload): static
    {
        $class = static::DISPATCH[$payload['_']]
            ?? throw new \InvalidArgumentException('Unknown constructor ' . $payload['_'] . ' for MessageMedia');
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
