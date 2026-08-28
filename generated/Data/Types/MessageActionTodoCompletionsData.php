<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for messageActionTodoCompletions of MessageAction.
 */
final class MessageActionTodoCompletionsData extends TlMessageActionAbstractData
{
    public function __construct(
    public array $completed,
    public array $incompleted,
    ) {
    }
}
