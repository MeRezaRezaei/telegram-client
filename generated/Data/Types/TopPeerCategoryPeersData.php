<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for topPeerCategoryPeers of TopPeerCategoryPeers.
 */
final class TopPeerCategoryPeersData extends TlTopPeerCategoryPeersAbstractData
{
    public function __construct(
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlTopPeerCategoryAbstractData $category,
    public int $count,
    public array $peers,
    ) {
    }
}
