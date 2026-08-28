<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for contacts.blockedSlice of contacts.Blocked.
 */
final class TlContactsBlockedSliceData extends TlContactsBlockedAbstractData
{
    public function __construct(
    public int $count,
    public array $blocked,
    public array $chats,
    public array $users,
    ) {
    }
}
