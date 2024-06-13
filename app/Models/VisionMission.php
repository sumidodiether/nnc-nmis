<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisionMission extends Model
{
    use HasFactory;

    protected $fillable = ['rating1a', 
                           'rating1b',
                           'rating1c', 
                           'remarks1a', 
                           'remarks1b',
                           'remarks1c',

                           'region_id',
                           'province_id',
                           'municipal_id',
                           'barangay_id',
                           'lguprofile_id'
                        ];

    protected $guarded = ['id'];

    protected $table = 'visionmissions';
}
