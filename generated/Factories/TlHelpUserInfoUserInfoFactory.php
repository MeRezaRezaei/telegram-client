<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlHelpUserInfoUserInfo (help.userInfo). */
final class TlHelpUserInfoUserInfoFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlHelpUserInfoUserInfo> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlHelpUserInfoUserInfo::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'message' => 'message-1',
            'author' => 'author-2',
            'date' => 3,
        ];
    }
}
