<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for updateServiceNotification of Update.
 */
final class UpdateServiceNotificationData extends TlUpdateAbstractData
{
    public function __construct(
    public int $flags,
    public bool $popup,
    public bool $invertMedia,
    public int $inboxDate,
    public string $type,
    public string $message,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlMessageMediaAbstractData $media,
    public array $entities,
    ) {
    }
}
