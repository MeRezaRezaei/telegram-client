<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/**
 * Union DTO base for TL type SendMessageAction.
 *
 * @method static static hydrate(array $payload)
 */
abstract class TlSendMessageActionAbstractData extends Data
{
    /** @var array<string, class-string<self>> */
    protected const DISPATCH = [
        'inputSendMessageRichMessageDraftAction' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputSendMessageRichMessageDraftActionData::class,
        'sendMessageCancelAction' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\SendMessageCancelActionData::class,
        'sendMessageChooseContactAction' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\SendMessageChooseContactActionData::class,
        'sendMessageChooseStickerAction' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\SendMessageChooseStickerActionData::class,
        'sendMessageEmojiInteraction' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\SendMessageEmojiInteractionData::class,
        'sendMessageEmojiInteractionSeen' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\SendMessageEmojiInteractionSeenData::class,
        'sendMessageGamePlayAction' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\SendMessageGamePlayActionData::class,
        'sendMessageGeoLocationAction' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\SendMessageGeoLocationActionData::class,
        'sendMessageHistoryImportAction' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\SendMessageHistoryImportActionData::class,
        'sendMessageRecordAudioAction' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\SendMessageRecordAudioActionData::class,
        'sendMessageRecordRoundAction' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\SendMessageRecordRoundActionData::class,
        'sendMessageRecordVideoAction' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\SendMessageRecordVideoActionData::class,
        'sendMessageRichMessageDraftAction' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\SendMessageRichMessageDraftActionData::class,
        'sendMessageTextDraftAction' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\SendMessageTextDraftActionData::class,
        'sendMessageTypingAction' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\SendMessageTypingActionData::class,
        'sendMessageUploadAudioAction' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\SendMessageUploadAudioActionData::class,
        'sendMessageUploadDocumentAction' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\SendMessageUploadDocumentActionData::class,
        'sendMessageUploadPhotoAction' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\SendMessageUploadPhotoActionData::class,
        'sendMessageUploadRoundAction' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\SendMessageUploadRoundActionData::class,
        'sendMessageUploadVideoAction' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\SendMessageUploadVideoActionData::class,
        'speakingInGroupCallAction' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\SpeakingInGroupCallActionData::class,
    ];

    /** @var array<string, array{0:string,1:int}> camelCase param name => [flag word, bit] for flags.N?true params */
    public const TL_FLAG_BITS = [];

    /** Dispatch on the constructor name carried under the '_' key of a decoded wire payload. */
    public static function hydrate(array $payload): static
    {
        $class = static::DISPATCH[$payload['_']]
            ?? throw new \InvalidArgumentException('Unknown constructor ' . $payload['_'] . ' for SendMessageAction');
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
