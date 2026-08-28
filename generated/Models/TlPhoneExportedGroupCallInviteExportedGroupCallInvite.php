<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for phone.exportedGroupCallInvite of phone.ExportedGroupCallInvite (crc32 204bd158). */
final class TlPhoneExportedGroupCallInviteExportedGroupCallInvite extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_phone_exported_group_call_invite_exported__9f796a593d9b';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'link' => 'string',
    ];
}
