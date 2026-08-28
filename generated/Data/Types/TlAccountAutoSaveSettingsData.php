<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for account.autoSaveSettings of account.AutoSaveSettings.
 */
final class TlAccountAutoSaveSettingsData extends TlAccountAutoSaveSettingsAbstractData
{
    public function __construct(
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlAutoSaveSettingsAbstractData $usersSettings,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlAutoSaveSettingsAbstractData $chatsSettings,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlAutoSaveSettingsAbstractData $broadcastsSettings,
    public array $exceptions,
    public array $chats,
    public array $users,
    ) {
    }
}
