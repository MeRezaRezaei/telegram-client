<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for inputKeyboardButtonRequestPeer of KeyboardButton.
 */
final class InputKeyboardButtonRequestPeerData extends TlKeyboardButtonAbstractData
{
    public function __construct(
    public int $flags,
    public bool $nameRequested,
    public bool $usernameRequested,
    public bool $photoRequested,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlKeyboardButtonStyleAbstractData $style,
    public string $text,
    public int $buttonId,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlRequestPeerTypeAbstractData $peerType,
    public int $maxQuantity,
    ) {
    }
}
