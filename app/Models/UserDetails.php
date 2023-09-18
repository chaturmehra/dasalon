<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetails extends Model
{
    use HasFactory;
    protected $table = 'user_details';
    protected $primaryKey = 'ud_id';
    protected $fillable = [
        'user_id',
        'country',
        'business_name',
        'website',
        'provider',
        'service_provided',
        'business_logo',
        'facebook',
        'instagram',
    ];
}
