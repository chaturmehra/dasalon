<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CountryConfig extends Model
{
    use HasFactory;
    protected $table = 'country_config';
    protected $fillable = [
        'country_id','country_code','currency_code','currency_sign','short_name','language','no_length','pin','status',
    ];
}
