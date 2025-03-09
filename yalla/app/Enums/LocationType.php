<?php

namespace App\Enums;

enum LocationType: string
{
    case Event = 'Event';
    case Accommodation = 'Accommodation';

    case User = 'User';
}
