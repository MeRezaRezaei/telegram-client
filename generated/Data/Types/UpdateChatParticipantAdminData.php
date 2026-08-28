<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for updateChatParticipantAdmin of Update.
 */
final class UpdateChatParticipantAdminData extends TlUpdateAbstractData
{
    public function __construct(
    public int $chatId,
    public int $userId,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlBoolAbstractData $isAdmin,
    public int $version,
    ) {
    }
}
