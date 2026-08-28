<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for starsTopupOption of StarsTopupOption.
 */
final class StarsTopupOptionData extends TlStarsTopupOptionAbstractData
{
    public function __construct(
    public int $flags,
    public bool $extended,
    public int $stars,
    public string $storeProduct,
    public string $currency,
    public int $amount,
    ) {
    }
}
