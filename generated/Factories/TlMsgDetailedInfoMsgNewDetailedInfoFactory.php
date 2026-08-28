<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlMsgDetailedInfoMsgNewDetailedInfo (msg_new_detailed_info). */
final class TlMsgDetailedInfoMsgNewDetailedInfoFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMsgDetailedInfoMsgNewDetailedInfo> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMsgDetailedInfoMsgNewDetailedInfo::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'answer_msg_id' => 1001,
            'bytes' => 2,
            'status' => 3,
        ];
    }
}
