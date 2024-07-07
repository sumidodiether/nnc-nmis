<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MellpiproLGUBarangayVisionMissionTracker extends Model
{
    use HasFactory;

    protected $table = 'mplgubrgyvisionmissionstracking';
    protected $guarded = ['id'];
    protected $fillable = [
        'mplgubrgyvisionmissions_id',
        'barangay_id',
        'municipal_id', 
        'user_id',
        'status', 
    ];
    public function  Nationalpolicies() {
        return $this->belongsTo(MellpiproLGUBarangayVisionMission::class);
    }
}
