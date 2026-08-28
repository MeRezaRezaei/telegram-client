<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for reactionCount of ReactionCount.
 */
final class ReactionCountData extends TlReactionCountAbstractData
{
    public function __construct(
    public int $flags,
    public ?int $chosenOrder,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlReactionAbstractData $reaction,
    public int $count,
    ) {
    }
}
