<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebHook extends Model
{
    use HasFactory;

    protected $table = 'webhook_transactions';

    protected $fillable = [
        'invoice_id',
        'transaction_id',
        'ip_address',
        'first_name',
        'last_name',
        'email',
        'phone',
        'amount',
        'course_id',
        'status',
        'response',
        'failure_reason'
    ];
}
