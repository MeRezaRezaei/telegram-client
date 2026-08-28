<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for messages.chatAdminsWithInvites of messages.ChatAdminsWithInvites.
 */
final class TlMessagesChatAdminsWithInvitesData extends TlMessagesChatAdminsWithInvitesAbstractData
{
    public function __construct(
    public array $admins,
    public array $users,
    ) {
    }
}
