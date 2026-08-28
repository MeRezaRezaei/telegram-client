<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for folder of Folder.
 */
final class FolderData extends TlFolderAbstractData
{
    public function __construct(
    public int $flags,
    public bool $autofillNewBroadcasts,
    public bool $autofillPublicGroups,
    public bool $autofillNewCorrespondents,
    public int $id,
    public string $title,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlChatPhotoAbstractData $photo,
    ) {
    }
}
