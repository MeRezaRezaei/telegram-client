<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for messages.messageViews of messages.MessageViews.
 */
final class TlMessagesMessageViewsData extends TlMessagesMessageViewsAbstractData
{
    public function __construct(
    public array $views,
    public array $chats,
    public array $users,
    ) {
    }
}
