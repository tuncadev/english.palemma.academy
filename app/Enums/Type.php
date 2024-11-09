<?php
// app/Enums/Status.php

namespace App\Enums;

enum Type: string
{
    case CREDIT_CARD = 'card';
    case DIRECT_PAYMENT = 'direct';

}
