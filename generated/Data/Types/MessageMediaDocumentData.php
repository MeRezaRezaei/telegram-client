<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for messageMediaDocument of MessageMedia.
 */
final class MessageMediaDocumentData extends TlMessageMediaAbstractData
{
    public function __construct(
    public int $flags,
    public bool $nopremium,
    public bool $spoiler,
    public bool $video,
    public bool $round,
    public bool $voice,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlDocumentAbstractData $document,
    public ?array $altDocuments,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPhotoAbstractData $videoCover,
    public int $videoTimestamp,
    public int $ttlSeconds,
    ) {
    }
}
