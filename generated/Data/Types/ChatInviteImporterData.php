<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for chatInviteImporter of ChatInviteImporter.
 */
final class ChatInviteImporterData extends TlChatInviteImporterAbstractData
{
    public function __construct(
    public int $flags,
    public bool $requested,
    public bool $viaChatlist,
    public int $userId,
    public int $date,
    public string $about,
    public int $approvedBy,
    ) {
    }
}
