<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for suggestedPost of SuggestedPost.
 */
final class SuggestedPostData extends TlSuggestedPostAbstractData
{
    public function __construct(
    public int $flags,
    public bool $accepted,
    public bool $rejected,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlStarsAmountAbstractData $price,
    public int $scheduleDate,
    ) {
    }
}
