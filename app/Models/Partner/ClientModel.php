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
        'birth_day',
        'birth_month',
        'birth_year',
        'gender',
        'dob',
        'address',
        'notes',

    ];
}
