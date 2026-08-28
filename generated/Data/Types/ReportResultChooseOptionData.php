<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for reportResultChooseOption of ReportResult.
 */
final class ReportResultChooseOptionData extends TlReportResultAbstractData
{
    public function __construct(
    public string $title,
    public array $options,
    ) {
    }
}
