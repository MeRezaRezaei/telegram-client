<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for updateNewBotConnection of Update.
 */
final class UpdateNewBotConnectionData extends TlUpdateAbstractData
{
    public function __construct(
    public int $flags,
    public bool $confirmed,
    public int $botId,
    public int $date,
    public string $device,
    public string $location,
    ) {
    }
}
