<?php

namespace App\Models\Partner;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientModel extends Model
{
    use HasFactory;
    protected $table = 'clients';
    protected $primaryKey = 'id';
    protected $fillable = [
        'client_id',
        'image',
        'gender',
        'dob',
        'address',
        'notes',

    ];
}
