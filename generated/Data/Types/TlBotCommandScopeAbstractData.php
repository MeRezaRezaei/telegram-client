<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/**
 * Union DTO base for TL type BotCommandScope.
 *
 * @method static static fromWire(array $payload)
 */
abstract class TlBotCommandScopeAbstractData extends Data
{
    /** @var array<string, class-string<self>> */
    protected const DISPATCH = [
        'botCommandScopeChatAdmins' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\BotCommandScopeChatAdminsData::class,
        'botCommandScopeChats' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\BotCommandScopeChatsData::class,
        'botCommandScopeDefault' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\BotCommandScopeDefaultData::class,
        'botCommandScopePeer' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\BotCommandScopePeerData::class,
        'botCommandScopePeerAdmins' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\BotCommandScopePeerAdminsData::class,
        'botCommandScopePeerUser' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\BotCommandScopePeerUserData::class,
        'botCommandScopeUsers' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\BotCommandScopeUsersData::class,
    ];

    /** Dispatch on the constructor name carried under the '_' key of a decoded wire payload. */
    public static function fromWire(array $payload): static
    {
        $class = static::DISPATCH[$payload['_']]
            ?? throw new \InvalidArgumentException('Unknown constructor ' . $payload['_'] . ' for BotCommandScope');
        /** @var static */
        return $class::from($payload);
    }
}
