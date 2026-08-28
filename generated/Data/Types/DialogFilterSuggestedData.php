<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for dialogFilterSuggested of DialogFilterSuggested.
 */
final class DialogFilterSuggestedData extends TlDialogFilterSuggestedAbstractData
{
    public function __construct(
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlDialogFilterAbstractData $filter,
    public string $description,
    ) {
    }
}
