<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for botVerification of BotVerification.
 */
final class BotVerificationData extends TlBotVerificationAbstractData
{
    public function __construct(
    public int $botId,
    public int $icon,
    public string $description,
    ) {
    }
}
