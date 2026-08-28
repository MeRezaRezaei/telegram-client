<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for messages.emojiGameOutcome of messages.EmojiGameOutcome.
 *
 * bytes params carried as base64 strings: seed
 */
final class TlMessagesEmojiGameOutcomeData extends TlMessagesEmojiGameOutcomeAbstractData
{
    public function __construct(
    public string $seed,
    public int $stakeTonAmount,
    public int $tonAmount,
    ) {
    }
}
