<?php

// app/Models/Submission.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    use HasFactory;

    protected $fillable = [
        'ip_address',
        'session_id',
        'form_data',
        'response_status',
        'response_message',
        'response_body',
    ];

    protected $casts = [
        'form_data' => 'array',  // Automatically casts JSON to array
    ];
}
