<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for sendMessageEmojiInteraction of SendMessageAction.
 */
final class SendMessageEmojiInteractionData extends TlSendMessageActionAbstractData
{
    public function __construct(
    public string $emoticon,
    public int $msgId,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlDataJSONAbstractData $interaction,
    ) {
    }
}
