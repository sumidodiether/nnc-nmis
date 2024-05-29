<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LguDemographicsModel extends Model
{
    use HasFactory;

    protected $fillable = ['totalPopulation', 
                           'noHouseholds',
                           'noSitios', 
                           'householdssafeWater', 
                           'householdssanitaryToilet',
                           'daycareCenter',
                           'publicelemsecondarySchools',
                           'brgyhealthStations',
                           'retailsoutletsStores',
                           'marketstransportterminal',
                           'monthersBreastfeeding',
                           'terrain',
                           'hazards',
                           'lguprofile_id'
                        ];

    protected $guarded = ['id'];

    protected $table = 'lgudemographics';

}
