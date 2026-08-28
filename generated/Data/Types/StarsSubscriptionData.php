<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for starsSubscription of StarsSubscription.
 */
final class StarsSubscriptionData extends TlStarsSubscriptionAbstractData
{
    public function __construct(
    public int $flags,
    public bool $canceled,
    public bool $canRefulfill,
    public bool $missingBalance,
    public bool $botCanceled,
    public string $id,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPeerAbstractData $peer,
    public int $untilDate,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlStarsSubscriptionPricingAbstractData $pricing,
    public string $chatInviteHash,
    public string $title,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlWebDocumentAbstractData $photo,
    public string $invoiceSlug,
    ) {
    }
}
