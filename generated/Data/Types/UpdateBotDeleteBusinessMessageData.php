<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for updateBotDeleteBusinessMessage of Update.
 */
final class UpdateBotDeleteBusinessMessageData extends TlUpdateAbstractData
{
    public function __construct(
    public string $connectionId,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPeerAbstractData $peer,
    public array $messages,
    public int $qts,
    ) {
    }
}
