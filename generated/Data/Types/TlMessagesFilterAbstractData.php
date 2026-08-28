<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/**
 * Union DTO base for TL type MessagesFilter.
 *
 * @method static static hydrate(array $payload)
 */
abstract class TlMessagesFilterAbstractData extends Data
{
    /** @var array<string, class-string<self>> */
    protected const DISPATCH = [
        'inputMessagesFilterChatPhotos' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputMessagesFilterChatPhotosData::class,
        'inputMessagesFilterContacts' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputMessagesFilterContactsData::class,
        'inputMessagesFilterDocument' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputMessagesFilterDocumentData::class,
        'inputMessagesFilterEmpty' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputMessagesFilterEmptyData::class,
        'inputMessagesFilterGeo' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputMessagesFilterGeoData::class,
        'inputMessagesFilterGif' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputMessagesFilterGifData::class,
        'inputMessagesFilterMusic' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputMessagesFilterMusicData::class,
        'inputMessagesFilterMyMentions' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputMessagesFilterMyMentionsData::class,
        'inputMessagesFilterPhoneCalls' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputMessagesFilterPhoneCallsData::class,
        'inputMessagesFilterPhotoVideo' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputMessagesFilterPhotoVideoData::class,
        'inputMessagesFilterPhotos' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputMessagesFilterPhotosData::class,
        'inputMessagesFilterPinned' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputMessagesFilterPinnedData::class,
        'inputMessagesFilterPoll' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputMessagesFilterPollData::class,
        'inputMessagesFilterRoundVideo' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputMessagesFilterRoundVideoData::class,
        'inputMessagesFilterRoundVoice' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputMessagesFilterRoundVoiceData::class,
        'inputMessagesFilterUrl' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputMessagesFilterUrlData::class,
        'inputMessagesFilterVideo' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputMessagesFilterVideoData::class,
        'inputMessagesFilterVoice' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputMessagesFilterVoiceData::class,
    ];

    /** @var array<string, array{0:string,1:int}> camelCase param name => [flag word, bit] for flags.N?true params */
    public const TL_FLAG_BITS = [];

    /** Dispatch on the constructor name carried under the '_' key of a decoded wire payload. */
    public static function hydrate(array $payload): static
    {
        $class = static::DISPATCH[$payload['_']]
            ?? throw new \InvalidArgumentException('Unknown constructor ' . $payload['_'] . ' for MessagesFilter');
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
