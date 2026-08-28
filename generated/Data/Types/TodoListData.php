<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for todoList of TodoList.
 */
final class TodoListData extends TlTodoListAbstractData
{
    public function __construct(
    public int $flags,
    public bool $othersCanAppend,
    public bool $othersCanComplete,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlTextWithEntitiesAbstractData $title,
    public array $list,
    ) {
    }
}
