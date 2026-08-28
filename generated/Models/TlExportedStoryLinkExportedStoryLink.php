<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for exportedStoryLink of ExportedStoryLink (crc32 3fc9053b). */
final class TlExportedStoryLinkExportedStoryLink extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_exported_story_link_exported_story_link';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'link' => 'string',
    ];
}
