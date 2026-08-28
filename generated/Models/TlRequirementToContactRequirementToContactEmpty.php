<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for requirementToContactEmpty of RequirementToContact (crc32 050a9839). */
final class TlRequirementToContactRequirementToContactEmpty extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_requirement_to_contact_requirement_to_contact_empty';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
    ];
}
