<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for account.contentSettings of account.ContentSettings.
 */
final class TlAccountContentSettingsData extends TlAccountContentSettingsAbstractData
{
    public function __construct(
    public int $flags,
    public bool $sensitiveEnabled,
    public bool $sensitiveCanChange,
    ) {
    }
}
