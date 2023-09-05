<?php

namespace App\Models\Partner;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VenueMeta extends Model
{
    use HasFactory;
    protected $table = 'venue_meta';
    protected $primaryKey = 'vm_id';
    protected $fillable = [
        'venue_id',
        'meta_key',
        'meta_value',
    ];
}
