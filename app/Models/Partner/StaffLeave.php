<?php

namespace App\Models\Partner;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StaffLeave extends Model
{
    use HasFactory;
    protected $table 		= 'staff_leave';
    protected $primaryKey 	= 'sl_id';
    protected $fillable = [
    	'staff_id',
        'start',
        'end',
        'leave_remarks',
        'leave_status',
    ];
}
