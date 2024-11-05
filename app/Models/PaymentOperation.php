<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentOperation extends Model
{
    use HasFactory;

    protected $fillable = [
        'invoice_id',
        'ip_address',
        'first_name',
        'last_name',
        'email',
        'phone',
        'amount',
        'course_id',
        'status',
        'response',
    ];
}
