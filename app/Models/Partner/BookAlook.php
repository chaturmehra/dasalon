<?php

namespace App\Models\Partner;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookAlook extends Model
{
    use HasFactory;
    protected $table 		= 'partner_book_a_look';
    protected $primaryKey 	= 'pbal_id';
    protected $fillable = [
        'partner_id',
        'category_id',
        'sub_category_id',
        'service_id',
        'venues',
        'gender',
        'duration',
		'look_image',
		'walk_in_price',
		'online_price',
		'off_peak_price',
		'description',
		'staff_pricing',
		'status',
    ];
}
