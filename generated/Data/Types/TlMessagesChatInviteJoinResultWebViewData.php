<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for messages.chatInviteJoinResultWebView of messages.ChatInviteJoinResult.
 */
final class TlMessagesChatInviteJoinResultWebViewData extends TlMessagesChatInviteJoinResultAbstractData
{
    public function __construct(
    public int $botId,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlWebViewResultAbstractData $webview,
    public array $users,
    ) {
    }
}
