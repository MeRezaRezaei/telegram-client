<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for messages.dialogFilters of messages.DialogFilters.
 */
final class TlMessagesDialogFiltersData extends TlMessagesDialogFiltersAbstractData
{
    public function __construct(
    public int $flags,
    public bool $tagsEnabled,
    public array $filters,
    ) {
    }
}
