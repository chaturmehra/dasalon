<?php

namespace App\Models\Partner;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{
    use HasFactory;
    protected $table = 'venues';
    protected $fillable = [
        'partner_id',
        'name',
        'address',
        'phone',
        'email',
		'billing_details',
    ];
}
