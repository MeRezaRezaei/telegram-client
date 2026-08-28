<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for businessRecipients of BusinessRecipients.
 */
final class BusinessRecipientsData extends TlBusinessRecipientsAbstractData
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
