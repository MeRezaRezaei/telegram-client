<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlMessageActionMessageActionSuggestedPostApproval (messageActionSuggestedPostApproval). */
final class TlMessageActionMessageActionSuggestedPostApprovalFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessageActionMessageActionSuggestedPostApproval> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessageActionMessageActionSuggestedPostApproval::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'rejected' => true,
            'balance_too_low' => true,
            'reject_comment' => 'reject_comment-4',
            'schedule_date' => 5,
            'price' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
