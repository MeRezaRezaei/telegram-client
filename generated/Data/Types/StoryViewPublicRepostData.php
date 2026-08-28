<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for storyViewPublicRepost of StoryView.
 */
final class StoryViewPublicRepostData extends TlStoryViewAbstractData
{
    public function __construct(
    public int $flags,
    public bool $blocked,
    public bool $blockedMyStoriesFrom,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPeerAbstractData $peerId,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlStoryItemAbstractData $story,
    ) {
    }
}
