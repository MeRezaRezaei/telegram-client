<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for mediaAreaSuggestedReaction of MediaArea.
 */
final class MediaAreaSuggestedReactionData extends TlMediaAreaAbstractData
{
    public function __construct(
    public int $flags,
    public bool $dark,
    public bool $flipped,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlMediaAreaCoordinatesAbstractData $coordinates,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlReactionAbstractData $reaction,
    ) {
    }
}
