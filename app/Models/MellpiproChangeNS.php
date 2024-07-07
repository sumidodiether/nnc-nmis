<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MellpiproChangeNS extends Model
{
    use HasFactory;

    protected $table = 'mplgubrgychangeNS';
    protected $guarded = ['id'];
    protected $fillable = [
        'barangay_id',
        'municipal_id',
        'province_id',
        'region_id',

        'rating6a',
        'rating6b',
        'rating6c',
        'rating6d',
        'rating6e',
        'rating6f',
        'rating6g',
        'rating6h',

        'remarks6a',
        'remarks6b',
        'remarks6c',
        'remarks6d',
        'remarks6e',
        'remarks6f', 
        'remarks6g', 
        'remarks6h', 

        'dateCreated',
        'dateUpdates',
        'dateMonitoring', 
        'periodCovereda',
        'periodCoveredb',
        'status',
        'user_id'
    ];

}
