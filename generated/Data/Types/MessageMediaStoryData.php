<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for messageMediaStory of MessageMedia.
 */
final class MessageMediaStoryData extends TlMessageMediaAbstractData
{
    public function __construct(
    public int $flags,
    public bool $viaMention,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPeerAbstractData $peer,
    public int $id,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlStoryItemAbstractData $story,
    ) {
    }
}
