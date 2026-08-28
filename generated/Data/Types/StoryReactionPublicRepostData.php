<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for storyReactionPublicRepost of StoryReaction.
 */
final class StoryReactionPublicRepostData extends TlStoryReactionAbstractData
{
    public function __construct(
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPeerAbstractData $peerId,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlStoryItemAbstractData $story,
    ) {
    }
}
