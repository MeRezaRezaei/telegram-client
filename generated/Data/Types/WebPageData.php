<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for webPage of WebPage.
 */
final class WebPageData extends TlWebPageAbstractData
{
    public function __construct(
    public int $flags,
    public bool $hasLargeMedia,
    public bool $videoCoverPhoto,
    public int $id,
    public string $url,
    public string $displayUrl,
    public int $hash,
    public string $type,
    public string $siteName,
    public string $title,
    public string $description,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPhotoAbstractData $photo,
    public string $embedUrl,
    public string $embedType,
    public int $embedWidth,
    public int $embedHeight,
    public int $duration,
    public string $author,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlDocumentAbstractData $document,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPageAbstractData $cachedPage,
    public ?array $attributes,
    ) {
    }
}
