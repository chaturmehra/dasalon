<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessType extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'businesstype',
        'is_active',
    ];

    protected $primaryKey = 'bt_id';
}
