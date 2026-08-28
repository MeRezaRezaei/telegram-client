<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for reportResultAddComment of ReportResult (crc32 6f09ac31). */
final class TlReportResultReportResultAddComment extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_report_result_report_result_add_comment';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'flags' => 'int',
        'optional' => 'bool',
        'option' => 'string',
    ];
}
