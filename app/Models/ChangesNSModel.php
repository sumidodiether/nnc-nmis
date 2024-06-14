<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChangesNSModel extends Model
{
    use HasFactory;

    protected $fillable = [
                'lgu_profile_id',
                'underweight_child_rating', 
                'underweight_child_remarks',
                'stundent_child_rating',
                'stundent_child_remarks',
                'wasted_child_rating',
                'wasted_child_remarks',
                'obese_child_rating',
                'obese_child_remarks',
                'wasted_school_rating',
                'wasted_school_remarks',
                'obese_school_rating',
                'obese_school_remarks',
                'risk_pregnant_rating',
                'risk_pregnant_remarks',
                'timbang_plus_rating',
                'timbang_plus_remarks'
            ];

protected $guarded = ['id'];

protected $table = 'changes_ns';
}
