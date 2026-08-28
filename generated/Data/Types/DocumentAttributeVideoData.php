<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for documentAttributeVideo of DocumentAttribute.
 */
final class DocumentAttributeVideoData extends TlDocumentAttributeAbstractData
{
    public function __construct(
    public int $flags,
    public bool $roundMessage,
    public bool $supportsStreaming,
    public bool $nosound,
    public float $duration,
    public int $w,
    public int $h,
    public int $preloadPrefixSize,
    public float $videoStartTs,
    public string $videoCodec,
    ) {
    }
}
