<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for page of Page.
 */
final class PageData extends TlPageAbstractData
{
    public function __construct(
    public int $flags,
    public bool $part,
    public bool $rtl,
    public bool $v2,
    public string $url,
    public array $blocks,
    public array $photos,
    public array $documents,
    public int $views,
    ) {
    }
}
