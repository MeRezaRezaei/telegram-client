<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlSendMessageActionSendMessageTextDraftAction (sendMessageTextDraftAction). */
final class TlSendMessageActionSendMessageTextDraftActionFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlSendMessageActionSendMessageTextDraftAction> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlSendMessageActionSendMessageTextDraftAction::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'random_id' => 1001,
            'text' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
