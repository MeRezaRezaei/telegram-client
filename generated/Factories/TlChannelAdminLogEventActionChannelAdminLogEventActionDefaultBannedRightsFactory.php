<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlChannelAdminLogEventActionChannelAdminLogEventActionDefaultBannedRights (channelAdminLogEventActionDefaultBannedRights). */
final class TlChannelAdminLogEventActionChannelAdminLogEventActionDefaultBannedRightsFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlChannelAdminLogEventActionChannelAdminLogEventActionDefaultBannedRights> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlChannelAdminLogEventActionChannelAdminLogEventActionDefaultBannedRights::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'prev_banned_rights' => (string) new \Symfony\Component\Uid\UuidV7(),
            'new_banned_rights' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
