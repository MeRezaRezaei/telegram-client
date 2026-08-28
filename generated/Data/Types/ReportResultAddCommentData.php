<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for reportResultAddComment of ReportResult.
 *
 * bytes params carried as base64 strings: option
 */
final class ReportResultAddCommentData extends TlReportResultAbstractData
{
    public function __construct(
    public int $flags,
    public bool $optional,
    public string $option,
    ) {
    }
}
