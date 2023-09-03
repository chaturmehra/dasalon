<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartnerDetails extends Model
{
    use HasFactory;
    protected $table = 'partner_details';
    protected $fillable = [
        'country','partner_type','partner_name','status',
    ];
}
