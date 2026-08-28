<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for smsjobs.status of smsjobs.Status.
 */
final class TlSmsjobsStatusData extends TlSmsjobsStatusAbstractData
{
    public function __construct(
    public int $flags,
    public bool $allowInternational,
    public int $recentSent,
    public int $recentSince,
    public int $recentRemains,
    public int $totalSent,
    public int $totalSince,
    public string $lastGiftSlug,
    public string $termsUrl,
    ) {
    }
}
