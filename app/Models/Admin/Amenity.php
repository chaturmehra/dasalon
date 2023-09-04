<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Amenity extends Model
{
    use HasFactory;
    protected $table = 'amenities';
    protected $primaryKey = 'id';
    protected $fillable = [
        'amenity_name',
        'partner_type',
        'amenity_icon',
        'amenity_type',
        'amenity_category',
        'status',
    ];
}
