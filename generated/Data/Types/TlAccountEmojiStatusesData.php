<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for account.emojiStatuses of account.EmojiStatuses.
 */
final class TlAccountEmojiStatusesData extends TlAccountEmojiStatusesAbstractData
{
    public function __construct(
    public int $hash,
    public array $statuses,
    ) {
    }
}
