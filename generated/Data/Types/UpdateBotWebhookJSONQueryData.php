<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for updateBotWebhookJSONQuery of Update.
 */
final class UpdateBotWebhookJSONQueryData extends TlUpdateAbstractData
{
    public function __construct(
    public int $queryId,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlDataJSONAbstractData $data,
    public int $timeout,
    ) {
    }
}
