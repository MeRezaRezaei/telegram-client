<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for users.usersSlice of users.Users.
 */
final class TlUsersUsersSliceData extends TlUsersUsersAbstractData
{
    public function __construct(
    public int $count,
    public array $users,
    ) {
    }
}
