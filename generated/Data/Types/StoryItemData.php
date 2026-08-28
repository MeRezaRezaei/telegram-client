<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for storyItem of StoryItem.
 */
final class StoryItemData extends TlStoryItemAbstractData
{
    public function __construct(
    public int $flags,
    public bool $pinned,
    public bool $public,
    public bool $closeFriends,
    public bool $min,
    public bool $noforwards,
    public bool $edited,
    public bool $contacts,
    public bool $selectedContacts,
    public bool $out,
    public int $id,
    public int $date,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPeerAbstractData $fromId,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlStoryFwdHeaderAbstractData $fwdFrom,
    public int $expireDate,
    public string $caption,
    public ?array $entities,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlMessageMediaAbstractData $media,
    public ?array $mediaAreas,
    public ?array $privacy,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlStoryViewsAbstractData $views,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlReactionAbstractData $sentReaction,
    public ?array $albums,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlDocumentAbstractData $music,
    ) {
    }
}
