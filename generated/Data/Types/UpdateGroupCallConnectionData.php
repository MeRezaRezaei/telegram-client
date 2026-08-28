<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for updateGroupCallConnection of Update.
 */
final class UpdateGroupCallConnectionData extends TlUpdateAbstractData
{
    public function __construct(
    public int $flags,
    public bool $presentation,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlDataJSONAbstractData $params,
    ) {
    }
}
