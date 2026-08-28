<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for peerUser of Peer.
 */
final class PeerUserData extends TlPeerAbstractData
{
    public function __construct(
    public int $userId,
    ) {
    }
}
