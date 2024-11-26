<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExcludedIP extends Model
{
    use HasFactory;
    protected $table = 'excluded_ips';
    protected $fillable = ['ip_address', 'reason'];
}
