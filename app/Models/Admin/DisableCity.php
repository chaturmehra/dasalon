<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DisableCity extends Model
{
    use HasFactory;
    protected $table = 'disable_city';
    protected $fillable = [
        'country','state','city','status',
    ];
}
