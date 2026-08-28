<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for peerColorCollectible of PeerColor.
 */
final class PeerColorCollectibleData extends TlPeerColorAbstractData
{
    public function __construct(
    public int $flags,
    public int $collectibleId,
    public int $giftEmojiId,
    public int $backgroundEmojiId,
    public int $accentColor,
    public array $colors,
    public ?int $darkAccentColor,
    public ?array $darkColors,
    ) {
    }
}
