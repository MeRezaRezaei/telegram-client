<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlUpdateUpdateServiceNotificationEntities;

/** Constructor model for updateServiceNotification of Update (crc32 ebe46819). */
final class TlUpdateUpdateServiceNotification extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_update_update_service_notification';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'flags' => 'int',
        'popup' => 'bool',
        'invert_media' => 'bool',
        'inbox_date' => 'int',
        'tl_type' => 'string',
        'message' => 'string',
        'media' => 'string',
    ];

    public function entities(): HasMany
    {
        return $this->tlChild(TlUpdateUpdateServiceNotificationEntities::class);
    }
}
