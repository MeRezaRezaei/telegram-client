<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for messages.dhConfigNotModified of messages.DhConfig.
 *
 * bytes params carried as base64 strings: random
 */
final class TlMessagesDhConfigNotModifiedData extends TlMessagesDhConfigAbstractData
{
    public function __construct(
    public string $random,
    ) {
    }
}
