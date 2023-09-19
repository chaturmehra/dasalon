<?php

namespace App\Models\Partner;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartnerService extends Model
{
    use HasFactory;
    protected $table 		= 'partner_services';
    protected $primaryKey 	= 'ps_id';
    protected $fillable = [
        'partner_id',
        'service_type',
        'category_id',
        'sub_category_id',
        'service_id',
        'venues',
        'gender',
        'duration',
		'distance',
		'walk_in_price',
		'online_price',
		'off_peak_price',
		'description',
		'staff_pricing',
		'status',
    ];
}
