<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlUsersUsersUsersSliceUsers;

/** Constructor model for users.usersSlice of users.Users (crc32 315a4974). */
final class TlUsersUsersUsersSlice extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_users_users_users_slice';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'count' => 'int',
    ];

    public function users(): HasMany
    {
        return $this->tlChild(TlUsersUsersUsersSliceUsers::class);
    }
}
