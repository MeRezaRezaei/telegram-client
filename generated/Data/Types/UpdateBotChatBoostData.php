<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for updateBotChatBoost of Update.
 */
final class UpdateBotChatBoostData extends TlUpdateAbstractData
{
    public function __construct(
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPeerAbstractData $peer,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlBoostAbstractData $boost,
    public int $qts,
    ) {
    }
}
