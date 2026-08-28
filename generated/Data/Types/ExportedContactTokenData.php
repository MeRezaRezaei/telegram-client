<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for exportedContactToken of ExportedContactToken.
 */
final class ExportedContactTokenData extends TlExportedContactTokenAbstractData
{
    public function __construct(
    public string $url,
    public int $expires,
    ) {
    }
}
