<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for updateChannelUserTyping of Update.
 */
final class UpdateChannelUserTypingData extends TlUpdateAbstractData
{
    public function __construct(
    public int $flags,
    public int $channelId,
    public ?int $topMsgId,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPeerAbstractData $fromId,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlSendMessageActionAbstractData $action,
    ) {
    }
}
