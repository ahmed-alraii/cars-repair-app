<?php

namespace App\Enums;

enum BuyCarStatus: string
{
    case OutSide = 'OutSide';
    case Shipping = 'Shipping';
    case Arrived = 'Arrived';
    case Stored = 'Stored';
}
