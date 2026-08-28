<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for inputKeyboardButtonUrlAuth of KeyboardButton.
 */
final class InputKeyboardButtonUrlAuthData extends TlKeyboardButtonAbstractData
{
    public function __construct(
    public int $flags,
    public bool $requestWriteAccess,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlKeyboardButtonStyleAbstractData $style,
    public string $text,
    public string $fwdText,
    public string $url,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlInputUserAbstractData $bot,
    ) {
    }
}
