<?php

namespace App\Models\Partner;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartnerVouchers extends Model
{
    use HasFactory;
    protected $table 		= 'partner_vouchers';
    protected $primaryKey 	= 'pv_id';
    protected $fillable = [
        'partner_id',
        'voucher_name',
        'service_ids',
        'venues',
        'gender',
        'duration',
        'number_session',
        'validity',
		'total_service_value',
		'voucher_price',
		'description',
		'status',
    ];
}
