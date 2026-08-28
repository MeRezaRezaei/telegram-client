<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlBusinessWorkHoursBusinessWorkHoursWeekly_open;

/** Constructor model for businessWorkHours of BusinessWorkHours (crc32 8c92b098). */
final class TlBusinessWorkHoursBusinessWorkHours extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_business_work_hours_business_work_hours';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'flags' => 'int',
        'open_now' => 'bool',
        'timezone_id' => 'string',
    ];

    public function weeklyOpen(): HasMany
    {
        return $this->tlChild(TlBusinessWorkHoursBusinessWorkHoursWeekly_open::class);
    }
}
