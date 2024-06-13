<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LncManagementFunctionModel extends Model
{
    use HasFactory;

    protected $fillable = ['rating4a', 
                           'rating4b',
                           'rating4c',
                           'rating4d',
                           'rating4e',
                           'rating4f',
                           'rating4g',

                           'remarks4a',
                           'remarks4b',
                           'remarks4c',
                           'remarks4d',
                           'remarks4e',
                           'remarks4f',
                           'remarks4g',

                           'region_id',
                           'province_id',
                           'municipal_id',
                           'barangay_id',
                           'lguprofile_id',
                        ];

    protected $guarded = ['id'];

    protected $table = 'lnc_management_function';
}
