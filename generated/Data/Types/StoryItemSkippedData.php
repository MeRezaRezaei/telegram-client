<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for storyItemSkipped of StoryItem.
 */
final class StoryItemSkippedData extends TlStoryItemAbstractData
{
    public function __construct(
    public int $flags,
    public bool $closeFriends,
    public bool $live,
    public int $id,
    public int $date,
    public int $expireDate,
    ) {
    }
}
