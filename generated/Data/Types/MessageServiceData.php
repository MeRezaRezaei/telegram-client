<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for messageService of Message.
 */
final class MessageServiceData extends TlMessageAbstractData
{
    public function __construct(
    public int $flags,
    public bool $out,
    public bool $mentioned,
    public bool $mediaUnread,
    public bool $reactionsArePossible,
    public bool $silent,
    public bool $post,
    public bool $legacy,
    public int $id,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPeerAbstractData $fromId,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPeerAbstractData $peerId,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPeerAbstractData $savedPeerId,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlMessageReplyHeaderAbstractData $replyTo,
    public int $date,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlMessageActionAbstractData $action,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlMessageReactionsAbstractData $reactions,
    public int $ttlPeriod,
    ) {
    }
}
