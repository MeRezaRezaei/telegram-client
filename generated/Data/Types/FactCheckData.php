<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for factCheck of FactCheck.
 */
final class FactCheckData extends TlFactCheckAbstractData
{
    public function __construct(
    public int $flags,
    public bool $needCheck,
    public string $country,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlTextWithEntitiesAbstractData $text,
    public int $hash,
    ) {
    }
}
