<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for channelAdminLogEventsFilter of ChannelAdminLogEventsFilter.
 */
final class ChannelAdminLogEventsFilterData extends TlChannelAdminLogEventsFilterAbstractData
{
    public function __construct(
    public int $flags,
    public bool $join,
    public bool $leave,
    public bool $invite,
    public bool $ban,
    public bool $unban,
    public bool $kick,
    public bool $unkick,
    public bool $promote,
    public bool $demote,
    public bool $info,
    public bool $settings,
    public bool $pinned,
    public bool $edit,
    public bool $delete,
    public bool $groupCall,
    public bool $invites,
    public bool $send,
    public bool $forums,
    public bool $subExtend,
    public bool $editRank,
    ) {
    }
}
