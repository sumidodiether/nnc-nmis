<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NationalPoliciesModel extends Model
{
    use HasFactory;

    protected $fillable = ['rating2a', 
                           'rating2b',
                           'rating2c',
                           'rating2d',
                           'rating2e',
                           'rating2f',
                           'rating2g',
                           'rating2h',
                           'rating2i',
                           'rating2j',
                           'rating2k',
                           'rating2l',
                           'rating2m',

                           'remarks2a',
                           'remarks2b',
                           'remarks2c',
                           'remarks2d',
                           'remarks2e',
                           'remarks2f',
                           'remarks2g',
                           'remarks2h',
                           'remarks2i',
                           'remarks2j',
                           'remarks2k',
                           'remarks2l',
                           'remarks2m',

                           'region_id',
                           'province_id',
                           'municipal_id',
                           'barangay_id',
                           'lguprofile_id',
                        ];

    protected $guarded = ['id'];

    protected $table = 'nationalpolicies';
}
