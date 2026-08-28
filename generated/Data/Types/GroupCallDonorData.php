<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for groupCallDonor of GroupCallDonor.
 */
final class GroupCallDonorData extends TlGroupCallDonorAbstractData
{
    public function __construct(
    public int $flags,
    public bool $top,
    public bool $my,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPeerAbstractData $peerId,
    public int $stars,
    ) {
    }
}
