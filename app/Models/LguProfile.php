<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LguProfile extends Model
{
    use HasFactory;

    protected $fillable = ['incomeclass', 
                           'dateMonitoring',
                           'periodCovered', 
                           'population', 
                           'nutritionalStatus',
                           'landuseClassification',
                           'totallandRemarks',
                           'sourceRemarks',
                           'received',
                           'dateReceived',
                           'noPax',
                           'remarks'
                        ];

    protected $guarded = ['id'];

    protected $table = 'lguprofile';
    
}
