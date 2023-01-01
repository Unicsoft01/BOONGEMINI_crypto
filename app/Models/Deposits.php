<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deposits extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'plan_id',
        'user_id',
        'trans_id',
        'amount', 
        'evidence',
        'status', 
    ];
}
