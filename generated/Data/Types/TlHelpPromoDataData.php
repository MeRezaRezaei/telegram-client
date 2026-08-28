<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for help.promoData of help.PromoData.
 */
final class TlHelpPromoDataData extends TlHelpPromoDataAbstractData
{
    public function __construct(
    public int $flags,
    public bool $proxy,
    public int $expires,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPeerAbstractData $peer,
    public string $psaType,
    public string $psaMessage,
    public array $pendingSuggestions,
    public array $dismissedSuggestions,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPendingSuggestionAbstractData $customPendingSuggestion,
    public array $chats,
    public array $users,
    ) {
    }
}
