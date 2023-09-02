<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppointmentConfig extends Model
{
    use HasFactory;
    protected $fillable = [
        'time_least_count',
        'soonest_appointment_booking_time',
        'latest_appointment_booking_time',
        'max_booking_allowed',
    ];
}
