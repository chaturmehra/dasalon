<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class RecommendedPackage extends Model
{
    use HasFactory;
    protected $fillable = [
        'packagename',
        'gender',
        'categoryid',
        'subcategoryid',
        'serviceid',
        'partnerid',
        'businesstypeid',
        'uniqueid',
        'discount',
        'is_active',
    ];
    protected $primaryKey = 'rp_id';


}
