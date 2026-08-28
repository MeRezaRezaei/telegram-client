<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for chat of Chat.
 */
final class ChatData extends TlChatAbstractData
{
    public function __construct(
    public int $flags,
    public bool $creator,
    public bool $left,
    public bool $deactivated,
    public bool $callActive,
    public bool $callNotEmpty,
    public bool $noforwards,
    public int $id,
    public string $title,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlChatPhotoAbstractData $photo,
    public int $participantsCount,
    public int $date,
    public int $version,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlInputChannelAbstractData $migratedTo,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlChatAdminRightsAbstractData $adminRights,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlChatBannedRightsAbstractData $defaultBannedRights,
    ) {
    }
}
