<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for account.savedRingtones of account.SavedRingtones.
 */
final class TlAccountSavedRingtonesData extends TlAccountSavedRingtonesAbstractData
{
    public function __construct(
    public int $hash,
    public array $ringtones,
    ) {
    }
}
