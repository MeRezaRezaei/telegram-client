<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for keyboardButtonStyle of KeyboardButtonStyle.
 */
final class KeyboardButtonStyleData extends TlKeyboardButtonStyleAbstractData
{
    public function __construct(
    public int $flags,
    public bool $bgPrimary,
    public bool $bgDanger,
    public bool $bgSuccess,
    public int $icon,
    ) {
    }
}
