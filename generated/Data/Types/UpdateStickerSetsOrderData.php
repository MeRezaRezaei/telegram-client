<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for updateStickerSetsOrder of Update.
 */
final class UpdateStickerSetsOrderData extends TlUpdateAbstractData
{
    public function __construct(
    public int $flags,
    public bool $masks,
    public bool $emojis,
    public array $order,
    ) {
    }
}
