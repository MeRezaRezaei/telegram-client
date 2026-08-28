<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for keyboardButtonRow of KeyboardButtonRow.
 */
final class KeyboardButtonRowData extends TlKeyboardButtonRowAbstractData
{
    public function __construct(
    public array $buttons,
    ) {
    }
}
