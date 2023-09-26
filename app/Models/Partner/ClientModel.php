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

    public static function getCurrentMonthCount()
    {   $currentMonth = date('m');
        $currentYear  = date('Y');
        return self::whereRaw('MONTH(created_at) = ? AND YEAR(created_at) = ?', [$currentMonth, $currentYear])->count();
    }
    public static function getCurrentPreviousMonthCount()
    {   $currentMonth = date('m');
        $currentYear  = date('Y');
        $previousmonth= $currentMonth-1;
        return self::whereRaw('MONTH(created_at) = ? AND YEAR(created_at) = ?', [$previousmonth, $currentYear])->count();
    }
}
