<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for chatThemeUniqueGift of ChatTheme.
 */
final class ChatThemeUniqueGiftData extends TlChatThemeAbstractData
{
    public function __construct(
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlStarGiftAbstractData $gift,
    public array $themeSettings,
    ) {
    }
}
