<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{

    use HasFactory;

    protected $fillable = [
        'type',
        'invoice_id',
        'transaction_id',
        'ip_address',
        'first_name',
        'last_name',
        'email',
        'phone',
        'amount',
        'discount',
        'course_id',
        'status',
        'response',
        'failure_reason'
    ];
}

