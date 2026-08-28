<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for chatInviteExported of ExportedChatInvite.
 */
final class ChatInviteExportedData extends TlExportedChatInviteAbstractData
{
    public function __construct(
    public int $flags,
    public bool $revoked,
    public bool $permanent,
    public bool $requestNeeded,
    public string $link,
    public int $adminId,
    public int $date,
    public int $startDate,
    public int $expireDate,
    public int $usageLimit,
    public int $usage,
    public int $requested,
    public int $subscriptionExpired,
    public string $title,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlStarsSubscriptionPricingAbstractData $subscriptionPricing,
    ) {
    }
}
