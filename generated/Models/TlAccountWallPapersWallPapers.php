<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlAccountWallPapersWallPapersWallpapers;

/** Constructor model for account.wallPapers of account.WallPapers (crc32 cdc3858c). */
final class TlAccountWallPapersWallPapers extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_account_wall_papers_wall_papers';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'hash' => 'int',
    ];

    public function wallpapers(): HasMany
    {
        return $this->tlChild(TlAccountWallPapersWallPapersWallpapers::class);
    }
}
