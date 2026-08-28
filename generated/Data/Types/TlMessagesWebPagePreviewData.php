<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for messages.webPagePreview of messages.WebPagePreview.
 */
final class TlMessagesWebPagePreviewData extends TlMessagesWebPagePreviewAbstractData
{
    public function __construct(
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlMessageMediaAbstractData $media,
    public array $chats,
    public array $users,
    ) {
    }
}
