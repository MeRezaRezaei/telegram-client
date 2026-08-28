<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for contacts.found of contacts.Found.
 */
final class TlContactsFoundData extends TlContactsFoundAbstractData
{
    public function __construct(
    public array $myResults,
    public array $results,
    public array $chats,
    public array $users,
    ) {
    }
}
