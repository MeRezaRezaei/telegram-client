<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlChannelAdminLogEventActionChannelAdminLogEventActionToggleInvites (channelAdminLogEventActionToggleInvites). */
final class TlChannelAdminLogEventActionChannelAdminLogEventActionToggleInvitesFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlChannelAdminLogEventActionChannelAdminLogEventActionToggleInvites> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlChannelAdminLogEventActionChannelAdminLogEventActionToggleInvites::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'new_value' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
