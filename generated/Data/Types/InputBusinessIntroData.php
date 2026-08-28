<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for inputBusinessIntro of InputBusinessIntro.
 */
final class InputBusinessIntroData extends TlInputBusinessIntroAbstractData
{
    public function __construct(
    public int $flags,
    public string $title,
    public string $description,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlInputDocumentAbstractData $sticker,
    ) {
    }
}
