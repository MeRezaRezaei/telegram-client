<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for storyFwdHeader of StoryFwdHeader.
 */
final class StoryFwdHeaderData extends TlStoryFwdHeaderAbstractData
{
    public function __construct(
    public int $flags,
    public bool $modified,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPeerAbstractData $from,
    public string $fromName,
    public int $storyId,
    ) {
    }
}
