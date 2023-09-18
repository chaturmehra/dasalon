<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Onboarding extends Model
{
    use HasFactory;
    
              protected $primaryKey = 'onboard_id';
      protected $fillable = [
        'gperiod_country',
        'gperiod_type1',
        'gperiod_type2',
        'gperiod_type3',
    ];
}
