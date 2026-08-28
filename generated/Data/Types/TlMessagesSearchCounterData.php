<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for messages.searchCounter of messages.SearchCounter.
 */
final class TlMessagesSearchCounterData extends TlMessagesSearchCounterAbstractData
{
    public function __construct(
    public int $flags,
    public bool $inexact,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlMessagesFilterAbstractData $filter,
    public int $count,
    ) {
    }
}
