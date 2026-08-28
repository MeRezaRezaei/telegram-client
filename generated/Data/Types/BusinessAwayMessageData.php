<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for businessAwayMessage of BusinessAwayMessage.
 */
final class BusinessAwayMessageData extends TlBusinessAwayMessageAbstractData
{
    public function __construct(
    public int $flags,
    public bool $offlineOnly,
    public int $shortcutId,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlBusinessAwayMessageScheduleAbstractData $schedule,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlBusinessRecipientsAbstractData $recipients,
    ) {
    }
}
