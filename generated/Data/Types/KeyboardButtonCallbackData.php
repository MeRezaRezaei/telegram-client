<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for keyboardButtonCallback of KeyboardButton.
 *
 * bytes params carried as base64 strings: data
 */
final class KeyboardButtonCallbackData extends TlKeyboardButtonAbstractData
{
    public function __construct(
    public int $flags,
    public bool $requiresPassword,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlKeyboardButtonStyleAbstractData $style,
    public string $text,
    public string $data,
    ) {
    }
}
