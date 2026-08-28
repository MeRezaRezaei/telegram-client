<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for shippingOption of ShippingOption.
 */
final class ShippingOptionData extends TlShippingOptionAbstractData
{
    public function __construct(
    public string $id,
    public string $title,
    public array $prices,
    ) {
    }
}
