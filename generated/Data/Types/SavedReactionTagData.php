<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for savedReactionTag of SavedReactionTag.
 */
final class SavedReactionTagData extends TlSavedReactionTagAbstractData
{
    public function __construct(
    public int $flags,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlReactionAbstractData $reaction,
    public ?string $title,
    public int $count,
    ) {
    }
}
