<?php

namespace App\Models\Partner;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StaffCommission extends Model
{
    use HasFactory;
    protected $table 		= 'staff_commission';
    protected $primaryKey 	= 'sc_id';
    protected $fillable = [
    	'staff_id',
        'service',
        'book_look',
        'package',
        'voucher',
        'membership',
        'product',
    ];
}
