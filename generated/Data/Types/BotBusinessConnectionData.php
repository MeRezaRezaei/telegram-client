<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for botBusinessConnection of BotBusinessConnection.
 */
final class BotBusinessConnectionData extends TlBotBusinessConnectionAbstractData
{
    public function __construct(
    public int $flags,
    public bool $disabled,
    public string $connectionId,
    public int $userId,
    public int $dcId,
    public int $date,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlBusinessBotRightsAbstractData $rights,
    ) {
    }
}
