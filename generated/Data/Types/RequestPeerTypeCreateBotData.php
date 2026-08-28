<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for requestPeerTypeCreateBot of RequestPeerType.
 */
final class RequestPeerTypeCreateBotData extends TlRequestPeerTypeAbstractData
{
    public function __construct(
    public int $flags,
    public bool $botManaged,
    public string $suggestedName,
    public string $suggestedUsername,
    ) {
    }
}
