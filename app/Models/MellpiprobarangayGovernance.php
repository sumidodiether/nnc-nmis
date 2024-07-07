<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MellpiprobarangayGovernance extends Model
{
    use HasFactory;
    protected $fillable = [
        'barangay_id',
        'municipal_id',
        'province_id',
        'region_id',

        'rating3a',
        'rating3b',
        'rating3c',
        'remarks3a',
        'remarks3b',
        'remarks3c', 

        'dateCreated',
        'dateUpdates',
        'dateMonitoring', 
        'periodCovereda',
        'periodCoveredb',
        'status',
        'user_id'
 ];

protected $guarded = ['id'];

protected $table = 'mplgubrgygovernance';
}
