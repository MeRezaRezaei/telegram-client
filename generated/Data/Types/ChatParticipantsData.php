<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for chatParticipants of ChatParticipants.
 */
final class ChatParticipantsData extends TlChatParticipantsAbstractData
{
    public function __construct(
    public int $chatId,
    public array $participants,
    public int $version,
    ) {
    }
}
