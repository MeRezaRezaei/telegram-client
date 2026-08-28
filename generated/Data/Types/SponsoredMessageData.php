<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for sponsoredMessage of SponsoredMessage.
 *
 * bytes params carried as base64 strings: random_id
 */
final class SponsoredMessageData extends TlSponsoredMessageAbstractData
{
    public function __construct(
    public int $flags,
    public bool $recommended,
    public bool $canReport,
    public string $randomId,
    public string $url,
    public string $title,
    public string $message,
    public ?array $entities,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPhotoAbstractData $photo,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlMessageMediaAbstractData $media,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPeerColorAbstractData $color,
    public string $buttonText,
    public string $sponsorInfo,
    public string $additionalInfo,
    public int $minDisplayDuration,
    public int $maxDisplayDuration,
    ) {
    }
}
