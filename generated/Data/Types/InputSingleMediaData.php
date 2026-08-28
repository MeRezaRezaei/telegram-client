<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for inputSingleMedia of InputSingleMedia.
 */
final class InputSingleMediaData extends TlInputSingleMediaAbstractData
{
    public function __construct(
    public int $flags,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlInputMediaAbstractData $media,
    public int $randomId,
    public string $message,
    public ?array $entities,
    ) {
    }
}
