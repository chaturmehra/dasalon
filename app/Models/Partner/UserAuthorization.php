<?php

namespace App\Models\Partner;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAuthorization extends Model
{
    use HasFactory;

    protected $table = 'user_authorization';
    protected $primaryKey = 'id';
    protected $fillable = [
        'page',
        'subpage',
        'role_id',
        'property_value',
    ];
}
