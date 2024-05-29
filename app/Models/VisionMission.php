<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisionMission extends Model
{
    use HasFactory;

    protected $fillable = ['1aRating', 
                           '1bRating',
                           '1cRating', 
                           '1aRemarks', 
                           '1bRemarks',
                           '1cRemarks',
                           'province_id',
                           'municipal_id',
                           'barangay_id',
                           'lguprofile_id',
                           'region_id',
                           'province_id',
                           'municipal_id',
                           'barangay_id',
                           'lguprofile_id'
                        ];

    protected $guarded = ['id'];

    protected $table = 'visionmissions;';
}
