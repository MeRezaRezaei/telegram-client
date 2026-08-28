<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for messageActionChatAddUser of MessageAction.
 */
final class MessageActionChatAddUserData extends TlMessageActionAbstractData
{
    public function __construct(
    public array $users,
    ) {
    }
}
