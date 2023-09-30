<?php

namespace App\Models\Partner;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartnerPackages extends Model
{
    use HasFactory;
    protected $table 		= 'partner_packages';
    protected $primaryKey 	= 'pp_id';
    protected $fillable = [
        'partner_id',
        'package_name',
        'service_ids',
        'venues',
        'gender',
        'duration',
        'total_price',
        'total_duration',
		'walk_in_price',
		'online_price',
		'off_peak_price',
		'description',
		'staff_pricing',
		'status',
    ];
}
