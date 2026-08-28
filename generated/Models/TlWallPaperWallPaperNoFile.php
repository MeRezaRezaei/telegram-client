<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for wallPaperNoFile of WallPaper (crc32 e0804116). */
final class TlWallPaperWallPaperNoFile extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_wall_paper_wall_paper_no_file';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'tl_id' => 'int',
        'flags' => 'int',
        'tl_default' => 'bool',
        'dark' => 'bool',
        'settings' => 'string',
    ];
}
