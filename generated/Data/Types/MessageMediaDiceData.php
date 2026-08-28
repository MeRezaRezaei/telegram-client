<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for messageMediaDice of MessageMedia.
 */
final class MessageMediaDiceData extends TlMessageMediaAbstractData
{
    public function __construct(
    public int $flags,
    public int $value,
    public string $emoticon,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlMessagesEmojiGameOutcomeAbstractData $gameOutcome,
    ) {
    }
}
