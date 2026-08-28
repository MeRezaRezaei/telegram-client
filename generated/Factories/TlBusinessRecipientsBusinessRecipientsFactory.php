<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlBusinessRecipientsBusinessRecipients (businessRecipients). */
final class TlBusinessRecipientsBusinessRecipientsFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlBusinessRecipientsBusinessRecipients> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlBusinessRecipientsBusinessRecipients::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'existing_chats' => true,
            'new_chats' => true,
            'contacts' => true,
            'non_contacts' => true,
            'exclude_selected' => true,
        ];
    }
}
