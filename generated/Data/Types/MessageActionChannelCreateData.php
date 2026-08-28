<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for messageActionChannelCreate of MessageAction.
 */
final class MessageActionChannelCreateData extends TlMessageActionAbstractData
{
    public function __construct(
    public string $title,
    ) {
    }
}
