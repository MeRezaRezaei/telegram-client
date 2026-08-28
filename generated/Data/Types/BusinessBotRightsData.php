<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for businessBotRights of BusinessBotRights.
 */
final class BusinessBotRightsData extends TlBusinessBotRightsAbstractData
{
    public function __construct(
    public int $flags,
    public bool $reply,
    public bool $readMessages,
    public bool $deleteSentMessages,
    public bool $deleteReceivedMessages,
    public bool $editName,
    public bool $editBio,
    public bool $editProfilePhoto,
    public bool $editUsername,
    public bool $viewGifts,
    public bool $sellGifts,
    public bool $changeGiftSettings,
    public bool $transferAndUpgradeGifts,
    public bool $transferStars,
    public bool $manageStories,
    ) {
    }
}
