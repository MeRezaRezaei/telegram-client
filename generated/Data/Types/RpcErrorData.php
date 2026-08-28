<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for rpc_error of RpcError.
 */
final class RpcErrorData extends TlRpcErrorAbstractData
{
    public function __construct(
    public int $errorCode,
    public string $errorMessage,
    ) {
    }
}
