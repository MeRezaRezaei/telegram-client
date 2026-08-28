<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for pendingSuggestion of PendingSuggestion.
 */
final class PendingSuggestionData extends TlPendingSuggestionAbstractData
{
    public function __construct(
    public string $suggestion,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlTextWithEntitiesAbstractData $title,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlTextWithEntitiesAbstractData $description,
    public string $url,
    ) {
    }
}
