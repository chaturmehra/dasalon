<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartnerTypeProperty extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'property',
        'remark',
        'option',
    ];
}
