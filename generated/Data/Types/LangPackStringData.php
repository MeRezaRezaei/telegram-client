<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for langPackString of LangPackString.
 */
final class LangPackStringData extends TlLangPackStringAbstractData
{
    public function __construct(
    public string $key,
    public string $value,
    ) {
    }
}
