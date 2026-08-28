<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for dialogFilterChatlist of DialogFilter.
 */
final class DialogFilterChatlistData extends TlDialogFilterAbstractData
{
    public function __construct(
    public int $flags,
    public bool $hasMyInvites,
    public bool $titleNoanimate,
    public int $id,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlTextWithEntitiesAbstractData $title,
    public string $emoticon,
    public int $color,
    public array $pinnedPeers,
    public array $includePeers,
    ) {
    }
}
