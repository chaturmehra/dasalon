<?php

namespace App\Models\Partner;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartnerProducts extends Model
{
    use HasFactory;
    protected $table 		= 'partner_products';
    protected $primaryKey 	= 'id';
    protected $fillable = [
        'partner_id',
        'brand_name',
        'product_category',
        'product_type',
        'product_name',
		'description',
		'measure',
		'measure_value',
		'supply_price',
		'selling_price',
		'markup_price',
		'sku',
		'supplier',
        'product_image',
		'stock_management',
        'status',
    ];
}
