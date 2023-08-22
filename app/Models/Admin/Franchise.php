<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Franchise extends Model
{
    use HasFactory;
    protected $table = 'franchise';
    protected $fillable = [
        'franchise_country','franchise_name','status',
    ];
}
