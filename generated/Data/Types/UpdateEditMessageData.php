<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for updateEditMessage of Update.
 */
final class UpdateEditMessageData extends TlUpdateAbstractData
{
    public function __construct(
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlMessageAbstractData $message,
    public int $pts,
    public int $ptsCount,
    ) {
    }
}
