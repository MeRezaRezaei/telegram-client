<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for account.savedMusicIds of account.SavedMusicIds.
 */
final class TlAccountSavedMusicIdsData extends TlAccountSavedMusicIdsAbstractData
{
    public function __construct(
    public array $ids,
    ) {
    }
}
