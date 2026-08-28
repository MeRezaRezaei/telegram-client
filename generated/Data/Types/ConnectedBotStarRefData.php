<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for connectedBotStarRef of ConnectedBotStarRef.
 */
final class ConnectedBotStarRefData extends TlConnectedBotStarRefAbstractData
{
    public function __construct(
    public int $flags,
    public bool $revoked,
    public string $url,
    public int $date,
    public int $botId,
    public int $commissionPermille,
    public int $durationMonths,
    public int $participants,
    public int $revenue,
    ) {
    }
}
