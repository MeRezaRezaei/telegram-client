<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for inputBusinessRecipients of InputBusinessRecipients.
 */
final class InputBusinessRecipientsData extends TlInputBusinessRecipientsAbstractData
{
    public function __construct(
    public int $flags,
    public bool $existingChats,
    public bool $newChats,
    public bool $contacts,
    public bool $nonContacts,
    public bool $excludeSelected,
    public ?array $users,
    ) {
    }
}
