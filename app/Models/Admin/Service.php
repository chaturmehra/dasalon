<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = [
        'categoryid',
        'subcategoryid',
        'servicename',
        'is_active',
    ];
    protected $primaryKey = 'serviceid';
}
