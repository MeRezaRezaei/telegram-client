<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for botInfo of BotInfo.
 */
final class BotInfoData extends TlBotInfoAbstractData
{
    public function __construct(
    public int $flags,
    public bool $hasPreviewMedias,
    public int $userId,
    public string $description,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPhotoAbstractData $descriptionPhoto,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlDocumentAbstractData $descriptionDocument,
    public ?array $commands,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlBotMenuButtonAbstractData $menuButton,
    public string $privacyPolicyUrl,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlBotAppSettingsAbstractData $appSettings,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlBotVerifierSettingsAbstractData $verifierSettings,
    ) {
    }
}
