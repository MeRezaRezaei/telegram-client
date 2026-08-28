<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for chatInvite of ChatInvite.
 */
final class ChatInviteData extends TlChatInviteAbstractData
{
    public function __construct(
    public int $flags,
    public bool $channel,
    public bool $broadcast,
    public bool $public,
    public bool $megagroup,
    public bool $requestNeeded,
    public bool $verified,
    public bool $scam,
    public bool $fake,
    public bool $canRefulfillSubscription,
    public string $title,
    public string $about,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPhotoAbstractData $photo,
    public int $participantsCount,
    public ?array $participants,
    public int $color,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlStarsSubscriptionPricingAbstractData $subscriptionPricing,
    public int $subscriptionFormId,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlBotVerificationAbstractData $botVerification,
    ) {
    }
}
