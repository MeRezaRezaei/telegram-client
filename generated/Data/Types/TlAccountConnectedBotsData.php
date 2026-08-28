<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for account.connectedBots of account.ConnectedBots.
 */
final class TlAccountConnectedBotsData extends TlAccountConnectedBotsAbstractData
{
    public function __construct(
    public array $connectedBots,
    public array $users,
    ) {
    }
}
