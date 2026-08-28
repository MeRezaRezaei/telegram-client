<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for bots.botInfo of bots.BotInfo.
 */
final class TlBotsBotInfoData extends TlBotsBotInfoAbstractData
{
    public function __construct(
    public string $name,
    public string $about,
    public string $description,
    ) {
    }
}
