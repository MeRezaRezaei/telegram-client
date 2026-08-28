<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for updateBotPrecheckoutQuery of Update.
 *
 * bytes params carried as base64 strings: payload
 */
final class UpdateBotPrecheckoutQueryData extends TlUpdateAbstractData
{
    public function __construct(
    public int $flags,
    public int $queryId,
    public int $userId,
    public string $payload,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPaymentRequestedInfoAbstractData $info,
    public string $shippingOptionId,
    public string $currency,
    public int $totalAmount,
    ) {
    }
}
