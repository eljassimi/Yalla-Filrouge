<?php

namespace App\Enums;

enum TicketType: string
{
    case VIP = 'VIP';
    case NORMAL = 'normal';
    case EAST_STAND = 'East_Stand';
    case SOUTH_STAND = 'South_Stand';
    case FAMILY_STAND = 'Family_Stand';
    case COLIN_BELL_STAND = 'COLIN BELL STAND';
}
