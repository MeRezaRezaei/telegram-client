<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlChatInviteImporterChatInviteImporter (chatInviteImporter). */
final class TlChatInviteImporterChatInviteImporterFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlChatInviteImporterChatInviteImporter> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlChatInviteImporterChatInviteImporter::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'requested' => true,
            'via_chatlist' => true,
            'user_id' => 1004,
            'date' => 5,
            'about' => 'about-6',
            'approved_by' => 1007,
        ];
    }
}
