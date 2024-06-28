<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MellpiproNutritionServiceTracking extends Model
{
    use HasFactory;

    protected $table = 'mplgubrgylncmanagementtracking';
    protected $guarded = ['id'];
    protected $fillable = [
        'mplgubrgylncmanagement_id',
        'barangay_id',
        'municipal_id', 
        'user_id',
        'status', 
    ];
    public function  LNCManagement() {
        return $this->belongsTo(MellpiproLNCManagement::class);
    }
}
