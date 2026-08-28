<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for updateUserName of Update.
 */
final class UpdateUserNameData extends TlUpdateAbstractData
{
    public function __construct(
    public int $userId,
    public string $firstName,
    public string $lastName,
    public array $usernames,
    ) {
    }
}
