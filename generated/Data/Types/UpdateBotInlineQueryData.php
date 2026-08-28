<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for updateBotInlineQuery of Update.
 */
final class UpdateBotInlineQueryData extends TlUpdateAbstractData
{
    public function __construct(
    public int $flags,
    public int $queryId,
    public int $userId,
    public string $query,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlGeoPointAbstractData $geo,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlInlineQueryPeerTypeAbstractData $peerType,
    public string $offset,
    ) {
    }
}
