<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for payments.starGiftAuctionState of payments.StarGiftAuctionState.
 */
final class TlPaymentsStarGiftAuctionStateData extends TlPaymentsStarGiftAuctionStateAbstractData
{
    public function __construct(
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlStarGiftAbstractData $gift,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlStarGiftAuctionStateAbstractData $state,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlStarGiftAuctionUserStateAbstractData $userState,
    public int $timeout,
    public array $users,
    public array $chats,
    ) {
    }
}
