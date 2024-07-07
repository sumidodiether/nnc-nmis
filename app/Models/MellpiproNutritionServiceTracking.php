<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MellpiproNutritionServiceTracking extends Model
{
    use HasFactory;

    protected $table = 'mplgubrgynutritionservicetracking';
    protected $guarded = ['id'];
    protected $fillable = [
        'mplgubrgynutritionservice_id',
        'barangay_id',
        'municipal_id', 
        'user_id',
        'status', 
    ];
    public function  NutritionServicee() {
        return $this->belongsTo(MellpiproNutritionService::class);
    }
}
