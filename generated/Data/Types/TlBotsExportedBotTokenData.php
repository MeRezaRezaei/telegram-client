<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for bots.exportedBotToken of bots.ExportedBotToken.
 */
final class TlBotsExportedBotTokenData extends TlBotsExportedBotTokenAbstractData
{
    public function __construct(
    public string $token,
    ) {
    }
}
