<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for messageFwdHeader of MessageFwdHeader.
 */
final class MessageFwdHeaderData extends TlMessageFwdHeaderAbstractData
{
    public function __construct(
    public int $flags,
    public bool $imported,
    public bool $savedOut,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPeerAbstractData $fromId,
    public string $fromName,
    public int $date,
    public int $channelPost,
    public string $postAuthor,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPeerAbstractData $savedFromPeer,
    public int $savedFromMsgId,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPeerAbstractData $savedFromId,
    public string $savedFromName,
    public int $savedDate,
    public string $psaType,
    ) {
    }
}
