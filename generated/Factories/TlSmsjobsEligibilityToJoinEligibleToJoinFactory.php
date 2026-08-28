<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlSmsjobsEligibilityToJoinEligibleToJoin (smsjobs.eligibleToJoin). */
final class TlSmsjobsEligibilityToJoinEligibleToJoinFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlSmsjobsEligibilityToJoinEligibleToJoin> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlSmsjobsEligibilityToJoinEligibleToJoin::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'terms_url' => 'terms_url-1',
            'monthly_sent_sms' => 2,
        ];
    }
}
