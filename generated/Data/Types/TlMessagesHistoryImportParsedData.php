<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for messages.historyImportParsed of messages.HistoryImportParsed.
 */
final class TlMessagesHistoryImportParsedData extends TlMessagesHistoryImportParsedAbstractData
{
    public function __construct(
    public int $flags,
    public bool $pm,
    public bool $group,
    public string $title,
    ) {
    }
}
