<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for updateBotStopped of Update.
 */
final class UpdateBotStoppedData extends TlUpdateAbstractData
{
    public function __construct(
    public int $userId,
    public int $date,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlBoolAbstractData $stopped,
    public int $qts,
    ) {
    }
}
