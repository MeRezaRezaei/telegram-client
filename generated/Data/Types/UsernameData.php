<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for username of Username.
 */
final class UsernameData extends TlUsernameAbstractData
{
    public function __construct(
    public int $flags,
    public bool $editable,
    public bool $active,
    public string $username,
    ) {
    }
}
