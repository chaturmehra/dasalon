<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubscriptionPlan extends Model
{
    use HasFactory;
    

    protected $fillable = [
        'planname',
        'cost',
        'country',
        'frequency',
        'is_active',
    ];
}
