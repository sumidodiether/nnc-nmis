<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Governances extends Model
{
    use HasFactory;

    protected $fillable = ['rating3a', 
                           'rating3b',
                           'rating3c',
                           'remarks3a',
                           'remarks3b',
                           'remarks3c',

                           'region_id',
                           'province_id',
                           'municipal_id',
                           'barangay_id',
                           'lguprofile_id',
                        ];

    protected $guarded = ['id'];

    protected $table = 'governances';
}
