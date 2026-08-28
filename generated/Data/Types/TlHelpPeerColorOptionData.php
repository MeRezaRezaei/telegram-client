<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for help.peerColorOption of help.PeerColorOption.
 */
final class TlHelpPeerColorOptionData extends TlHelpPeerColorOptionAbstractData
{
    public function __construct(
    public int $flags,
    public bool $hidden,
    public int $colorId,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlHelpPeerColorSetAbstractData $colors,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlHelpPeerColorSetAbstractData $darkColors,
    public int $channelMinLevel,
    public int $groupMinLevel,
    ) {
    }
}
