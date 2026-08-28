<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlGroupCallParticipantGroupCallParticipant (groupCallParticipant). */
final class TlGroupCallParticipantGroupCallParticipantFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlGroupCallParticipantGroupCallParticipant> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlGroupCallParticipantGroupCallParticipant::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'muted' => true,
            'left' => true,
            'can_self_unmute' => true,
            'just_joined' => true,
            'versioned' => true,
            'min' => true,
            'muted_by_you' => true,
            'volume_by_admin' => true,
            'self' => true,
            'video_joined' => true,
            'peer' => (string) new \Symfony\Component\Uid\UuidV7(),
            'date' => 13,
            'active_date' => 14,
            'source' => 15,
            'volume' => 16,
            'about' => 'about-17',
            'raise_hand_rating' => 1018,
            'video' => (string) new \Symfony\Component\Uid\UuidV7(),
            'presentation' => (string) new \Symfony\Component\Uid\UuidV7(),
            'paid_stars_total' => 1021,
        ];
    }
}
