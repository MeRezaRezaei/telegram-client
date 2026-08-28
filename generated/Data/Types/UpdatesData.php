<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for updates of Updates.
 */
final class UpdatesData extends TlUpdatesAbstractData
{
    public function __construct(
    public array $updates,
    public array $users,
    public array $chats,
    public int $date,
    public int $seq,
    ) {
    }
}
