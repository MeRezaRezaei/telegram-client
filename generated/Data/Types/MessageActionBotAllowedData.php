<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for messageActionBotAllowed of MessageAction.
 */
final class MessageActionBotAllowedData extends TlMessageActionAbstractData
{
    public function __construct(
    public int $flags,
    public bool $attachMenu,
    public bool $fromRequest,
    public string $domain,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlBotAppAbstractData $app,
    ) {
    }
}
