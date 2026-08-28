<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for stories.allStories of stories.AllStories.
 */
final class TlStoriesAllStoriesData extends TlStoriesAllStoriesAbstractData
{
    public function __construct(
    public int $flags,
    public bool $hasMore,
    public int $count,
    public string $state,
    public array $peerStories,
    public array $chats,
    public array $users,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlStoriesStealthModeAbstractData $stealthMode,
    ) {
    }
}
