<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for pollAnswer of PollAnswer.
 *
 * bytes params carried as base64 strings: option
 */
final class PollAnswerData extends TlPollAnswerAbstractData
{
    public function __construct(
    public int $flags,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlTextWithEntitiesAbstractData $text,
    public string $option,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlMessageMediaAbstractData $media,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPeerAbstractData $addedBy,
    public ?int $date,
    ) {
    }
}
