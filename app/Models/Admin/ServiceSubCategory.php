<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceSubCategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'categoryid',
        'servicesubcategory',
    ];
    protected $primaryKey = 'servicesubcategoryid';
}
