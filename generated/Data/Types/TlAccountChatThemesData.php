<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for account.chatThemes of account.ChatThemes.
 */
final class TlAccountChatThemesData extends TlAccountChatThemesAbstractData
{
    public function __construct(
    public int $flags,
    public int $hash,
    public array $themes,
    public array $chats,
    public array $users,
    public string $nextOffset,
    ) {
    }
}
