<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlSponsoredMessageSponsoredMessage (sponsoredMessage). */
final class TlSponsoredMessageSponsoredMessageFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlSponsoredMessageSponsoredMessage> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlSponsoredMessageSponsoredMessage::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'recommended' => true,
            'can_report' => true,
            'random_id' => 'Ynl0ZXMtNA==',
            'url' => 'url-5',
            'title' => 'title-6',
            'message' => 'message-7',
            'photo' => (string) new \Symfony\Component\Uid\UuidV7(),
            'media' => (string) new \Symfony\Component\Uid\UuidV7(),
            'color' => (string) new \Symfony\Component\Uid\UuidV7(),
            'button_text' => 'button_text-11',
            'sponsor_info' => 'sponsor_info-12',
            'additional_info' => 'additional_info-13',
            'min_display_duration' => 14,
            'max_display_duration' => 15,
        ];
    }
}
