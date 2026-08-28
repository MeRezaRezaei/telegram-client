<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for updates.differenceSlice of updates.Difference.
 */
final class TlUpdatesDifferenceSliceData extends TlUpdatesDifferenceAbstractData
{
    public function __construct(
    public array $newMessages,
    public array $newEncryptedMessages,
    public array $otherUpdates,
    public array $chats,
    public array $users,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlUpdatesStateAbstractData $intermediateState,
    ) {
    }
}
