<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for peerColor of PeerColor.
 */
final class PeerColorData extends TlPeerColorAbstractData
{
    public function __construct(
    public int $flags,
    public ?int $color,
    public ?int $backgroundEmojiId,
    ) {
    }
}
