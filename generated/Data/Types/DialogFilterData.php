<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for dialogFilter of DialogFilter.
 */
final class DialogFilterData extends TlDialogFilterAbstractData
{
    public function __construct(
    public int $flags,
    public bool $contacts,
    public bool $nonContacts,
    public bool $groups,
    public bool $broadcasts,
    public bool $bots,
    public bool $excludeMuted,
    public bool $excludeRead,
    public bool $excludeArchived,
    public bool $titleNoanimate,
    public int $id,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlTextWithEntitiesAbstractData $title,
    public string $emoticon,
    public int $color,
    public array $pinnedPeers,
    public array $includePeers,
    public array $excludePeers,
    ) {
    }
}
