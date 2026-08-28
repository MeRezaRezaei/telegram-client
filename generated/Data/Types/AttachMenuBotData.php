<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for attachMenuBot of AttachMenuBot.
 */
final class AttachMenuBotData extends TlAttachMenuBotAbstractData
{
    public function __construct(
    public int $flags,
    public bool $inactive,
    public bool $hasSettings,
    public bool $requestWriteAccess,
    public bool $showInAttachMenu,
    public bool $showInSideMenu,
    public bool $sideMenuDisclaimerNeeded,
    public int $botId,
    public string $shortName,
    public ?array $peerTypes,
    public array $icons,
    ) {
    }
}
