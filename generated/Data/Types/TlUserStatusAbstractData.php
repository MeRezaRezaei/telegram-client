<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/**
 * Union DTO base for TL type UserStatus.
 *
 * @method static static fromWire(array $payload)
 */
abstract class TlUserStatusAbstractData extends Data
{
    /** @var array<string, class-string<self>> */
    protected const DISPATCH = [
        'userStatusEmpty' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\UserStatusEmptyData::class,
        'userStatusLastMonth' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\UserStatusLastMonthData::class,
        'userStatusLastWeek' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\UserStatusLastWeekData::class,
        'userStatusOffline' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\UserStatusOfflineData::class,
        'userStatusOnline' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\UserStatusOnlineData::class,
        'userStatusRecently' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\UserStatusRecentlyData::class,
    ];

    /** Dispatch on the constructor name carried under the '_' key of a decoded wire payload. */
    public static function fromWire(array $payload): static
    {
        $class = static::DISPATCH[$payload['_']]
            ?? throw new \InvalidArgumentException('Unknown constructor ' . $payload['_'] . ' for UserStatus');
        /** @var static */
        return $class::from($payload);
    }
}
