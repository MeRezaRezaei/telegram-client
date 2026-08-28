<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for users.userFull of users.UserFull.
 */
final class TlUsersUserFullData extends TlUsersUserFullAbstractData
{
    public function __construct(
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlUserFullAbstractData $fullUser,
    public array $chats,
    public array $users,
    ) {
    }
}
