<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for messageActionSuggestedPostApproval of MessageAction.
 */
final class MessageActionSuggestedPostApprovalData extends TlMessageActionAbstractData
{
    public function __construct(
    public int $flags,
    public bool $rejected,
    public bool $balanceTooLow,
    public string $rejectComment,
    public int $scheduleDate,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlStarsAmountAbstractData $price,
    ) {
    }
}
