<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/**
 * Union DTO base for TL type InputMedia.
 *
 * @method static static hydrate(array $payload)
 */
abstract class TlInputMediaAbstractData extends Data
{
    /** @var array<string, class-string<self>> */
    protected const DISPATCH = [
        'inputMediaContact' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputMediaContactData::class,
        'inputMediaDice' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputMediaDiceData::class,
        'inputMediaDocument' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputMediaDocumentData::class,
        'inputMediaDocumentExternal' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputMediaDocumentExternalData::class,
        'inputMediaEmpty' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputMediaEmptyData::class,
        'inputMediaGame' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputMediaGameData::class,
        'inputMediaGeoLive' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputMediaGeoLiveData::class,
        'inputMediaGeoPoint' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputMediaGeoPointData::class,
        'inputMediaInvoice' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputMediaInvoiceData::class,
        'inputMediaPaidMedia' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputMediaPaidMediaData::class,
        'inputMediaPhoto' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputMediaPhotoData::class,
        'inputMediaPhotoExternal' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputMediaPhotoExternalData::class,
        'inputMediaPoll' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputMediaPollData::class,
        'inputMediaStakeDice' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputMediaStakeDiceData::class,
        'inputMediaStory' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputMediaStoryData::class,
        'inputMediaTodo' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputMediaTodoData::class,
        'inputMediaUploadedDocument' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputMediaUploadedDocumentData::class,
        'inputMediaUploadedPhoto' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputMediaUploadedPhotoData::class,
        'inputMediaVenue' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputMediaVenueData::class,
        'inputMediaWebPage' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputMediaWebPageData::class,
    ];

    /** @var array<string, array{0:string,1:int}> camelCase param name => [flag word, bit] for flags.N?true params */
    public const TL_FLAG_BITS = [];

    /** Dispatch on the constructor name carried under the '_' key of a decoded wire payload. */
    public static function hydrate(array $payload): static
    {
        $class = static::DISPATCH[$payload['_']]
            ?? throw new \InvalidArgumentException('Unknown constructor ' . $payload['_'] . ' for InputMedia');
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
