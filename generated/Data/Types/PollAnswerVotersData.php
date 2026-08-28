<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for pollAnswerVoters of PollAnswerVoters.
 *
 * bytes params carried as base64 strings: option
 */
final class PollAnswerVotersData extends TlPollAnswerVotersAbstractData
{
    public function __construct(
    public int $flags,
    public bool $chosen,
    public bool $correct,
    public string $option,
    public int $voters,
    public ?array $recentVoters,
    ) {
    }
}
