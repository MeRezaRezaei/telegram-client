<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for documentAttributeAudio of DocumentAttribute.
 *
 * bytes params carried as base64 strings: waveform
 */
final class DocumentAttributeAudioData extends TlDocumentAttributeAbstractData
{
    public function __construct(
    public int $flags,
    public bool $voice,
    public int $duration,
    public string $title,
    public string $performer,
    public string $waveform,
    ) {
    }
}
