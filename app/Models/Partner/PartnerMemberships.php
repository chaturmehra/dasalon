<?php

namespace App\Models\Partner;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartnerMemberships extends Model
{
    use HasFactory;
    protected $table 		= 'partner_memberships';
    protected $primaryKey 	= 'pm_id';
    protected $fillable = [
        'partner_id',
        'membership_name',
        'venues',
        'validity',
        'membership_color',
		'total_value',
		'membership_price',
		'description',
		'status',
    ];
}
