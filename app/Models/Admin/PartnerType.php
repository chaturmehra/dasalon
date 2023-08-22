<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartnerType extends Model
{
    use HasFactory;
    protected $table = 'partner_type';
    protected $primaryKey = 'id';
    protected $fillable = [
        'partner_name','status',
    ];
}
