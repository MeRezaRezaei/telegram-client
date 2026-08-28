<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for userProfilePhoto of UserProfilePhoto.
 *
 * bytes params carried as base64 strings: stripped_thumb
 */
final class UserProfilePhotoData extends TlUserProfilePhotoAbstractData
{
    public function __construct(
    public int $flags,
    public bool $hasVideo,
    public bool $personal,
    public int $photoId,
    public string $strippedThumb,
    public int $dcId,
    ) {
    }
}
