<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlPeerNotifySettingsPeerNotifySettings (peerNotifySettings). */
final class TlPeerNotifySettingsPeerNotifySettingsFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPeerNotifySettingsPeerNotifySettings> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPeerNotifySettingsPeerNotifySettings::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'show_previews' => (string) new \Symfony\Component\Uid\UuidV7(),
            'silent' => (string) new \Symfony\Component\Uid\UuidV7(),
            'mute_until' => 4,
            'ios_sound' => (string) new \Symfony\Component\Uid\UuidV7(),
            'android_sound' => (string) new \Symfony\Component\Uid\UuidV7(),
            'other_sound' => (string) new \Symfony\Component\Uid\UuidV7(),
            'stories_muted' => (string) new \Symfony\Component\Uid\UuidV7(),
            'stories_hide_sender' => (string) new \Symfony\Component\Uid\UuidV7(),
            'stories_ios_sound' => (string) new \Symfony\Component\Uid\UuidV7(),
            'stories_android_sound' => (string) new \Symfony\Component\Uid\UuidV7(),
            'stories_other_sound' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
