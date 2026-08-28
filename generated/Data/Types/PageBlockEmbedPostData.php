<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for pageBlockEmbedPost of PageBlock.
 */
final class PageBlockEmbedPostData extends TlPageBlockAbstractData
{
    public function __construct(
    public string $url,
    public int $webpageId,
    public int $authorPhotoId,
    public string $author,
    public int $date,
    public array $blocks,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPageCaptionAbstractData $caption,
    ) {
    }
}
