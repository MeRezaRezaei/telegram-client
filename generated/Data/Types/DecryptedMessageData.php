<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for decryptedMessage of DecryptedMessage.
 */
final class DecryptedMessageData extends TlDecryptedMessageAbstractData
{
    public function __construct(
    public int $flags,
    public bool $noWebpage,
    public bool $silent,
    public int $randomId,
    public int $ttl,
    public string $message,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlDecryptedMessageMediaAbstractData $media,
    public ?array $entities,
    public string $viaBotName,
    public int $replyToRandomId,
    public int $groupedId,
    ) {
    }
}
