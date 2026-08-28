<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for reactionsNotifySettings of ReactionsNotifySettings.
 */
final class ReactionsNotifySettingsData extends TlReactionsNotifySettingsAbstractData
{
    public function __construct(
    public int $flags,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlReactionNotificationsFromAbstractData $messagesNotifyFrom,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlReactionNotificationsFromAbstractData $storiesNotifyFrom,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlReactionNotificationsFromAbstractData $pollVotesNotifyFrom,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlNotificationSoundAbstractData $sound,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlBoolAbstractData $showPreviews,
    ) {
    }
}
