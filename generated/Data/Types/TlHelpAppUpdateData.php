<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for help.appUpdate of help.AppUpdate.
 */
final class TlHelpAppUpdateData extends TlHelpAppUpdateAbstractData
{
    public function __construct(
    public int $flags,
    public bool $canNotSkip,
    public int $id,
    public string $version,
    public string $text,
    public array $entities,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlDocumentAbstractData $document,
    public string $url,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlDocumentAbstractData $sticker,
    ) {
    }
}
