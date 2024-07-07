<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MellpiproNutritionService extends Model
{
    use HasFactory;

    protected $table = 'mplgubrgynutritionservice';
    protected $guarded = ['id'];
    protected $fillable = [
        'barangay_id',
        'municipal_id',
        'province_id',
        'region_id',

       'rating5aa',
       'rating5ab',
       'rating5ac',
       'rating5b',
       'rating5ca',
       'rating5cb',
       'rating5cc',
       'rating5cd',
       'rating5da',
       'rating5db',
       'rating5ea',
       'rating5eb',
       'rating5ec',
       'rating5ed',
       'rating5ee',
       'rating5ef',
       'rating5fa',
       'rating5fb',
       'rating5fc',
       'rating5ga',
       'rating5ha',
       'rating5hb',
       'rating5ia',
       'rating5ib',
       'rating5ic',
       'rating5id',
       'rating5ie',
       'rating5if',
       'rating5ig',
       'rating5ih',

       'remarks5aa',
       'remarks5ab',
       'remarks5ac',
       'remarks5b',
       'remarks5ca',
       'remarks5cb',
       'remarks5cc',
       'remarks5cd',
       'remarks5da',
       'remarks5db',
       'remarks5ea',
       'remarks5eb',
       'remarks5ec',
       'remarks5ed',
       'remarks5ee',
       'remarks5ef',
       'remarks5fa',
       'remarks5fb',
       'remarks5fc',
       'remarks5ga',
       'remarks5ha',
       'remarks5hb',
       'remarks5ia',
       'remarks5ib',
       'remarks5ic',
       'remarks5id',
       'remarks5ie',
       'remarks5if',
       'remarks5ig',
       'remarks5ih',

        'dateCreated',
        'dateUpdates',
        'dateMonitoring', 
        'periodCovereda',
        'periodCoveredb',
        'status',
        'user_id'
    ];

}
