<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for smsjobs.eligibleToJoin of smsjobs.EligibilityToJoin.
 */
final class TlSmsjobsEligibleToJoinData extends TlSmsjobsEligibilityToJoinAbstractData
{
    public function __construct(
    public string $termsUrl,
    public int $monthlySentSms,
    ) {
    }
}
