<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for connectedBot of ConnectedBot.
 */
final class ConnectedBotData extends TlConnectedBotAbstractData
{
    public function __construct(
    public int $flags,
    public int $botId,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlBusinessBotRecipientsAbstractData $recipients,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlBusinessBotRightsAbstractData $rights,
    public ?string $device,
    public ?int $date,
    public ?string $location,
    ) {
    }
}
