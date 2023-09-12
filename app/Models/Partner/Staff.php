<?php

namespace App\Models\Partner;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;
    protected $table = 'staff_id';
    protected $fillable = [
        'partner_id',
        'gender',
        'facebook',
        'instagram',
        'online_status',
        'staff_role',
		'profile_description',
		'joining_date',
		'venues',
		'staff_working_days',
		'staff_advance_setting',
		'schedule_type',
		'start_date',
		'end_date',
		'monday_hours',
		'tuesday_hours',
		'wednesday_hours',
		'thursday_hours',
		'friday_hours',
		'saturday_hours',
		'sunday_hours',
    ];
}
