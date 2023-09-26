<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class PartnerMapping extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'partner_service_mapping';
    protected $fillable = [
        'service_id',
        'subcategory_id',
        'business_id',
        'status',
    ];


}