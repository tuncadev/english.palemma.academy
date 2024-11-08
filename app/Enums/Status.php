<?php
// app/Enums/Status.php

namespace App\Enums;

enum Status: string
{
    case PENDING = 'pending';
    case SUCCESS = 'success';
    case FAILED = 'failure';
    case COMPLETE = 'complete';

    // Optional: Add methods to enums
    public function isFinal(): bool
    {
        return $this === self::SUCCESS || $this === self::COMPLETE || $this === self::FAILED ;
    }
}
