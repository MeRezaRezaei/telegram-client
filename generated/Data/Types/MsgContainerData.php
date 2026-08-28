<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for msg_container of MessageContainer.
 */
final class MsgContainerData extends TlMessageContainerAbstractData
{
    public function __construct(
    public array $messages,
    ) {
    }
}
