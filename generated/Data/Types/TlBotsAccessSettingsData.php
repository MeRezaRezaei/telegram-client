<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for bots.accessSettings of bots.AccessSettings.
 */
final class TlBotsAccessSettingsData extends TlBotsAccessSettingsAbstractData
{
    public function __construct(
    public int $flags,
    public bool $restricted,
    public ?array $addUsers,
    ) {
    }
}
