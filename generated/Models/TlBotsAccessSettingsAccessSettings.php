<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlBotsAccessSettingsAccessSettingsAdd_users;

/** Constructor model for bots.accessSettings of bots.AccessSettings (crc32 dd1fbf93). */
final class TlBotsAccessSettingsAccessSettings extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_bots_access_settings_access_settings';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'flags' => 'int',
        'restricted' => 'bool',
    ];

    public function addUsers(): HasMany
    {
        return $this->tlChild(TlBotsAccessSettingsAccessSettingsAdd_users::class);
    }
}
