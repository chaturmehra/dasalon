<?php

namespace App\Models\Partner;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StaffAttendance extends Model
{
    use HasFactory;
    protected $table 		= 'staff_attendance';
    protected $primaryKey 	= 'sa_id';
    protected $fillable = [
    	'staff_id',
        'date',
        'check_in',
        'check_out',
    ];
}
