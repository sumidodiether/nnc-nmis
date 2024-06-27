<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mlplgubrgytracking extends Model
{
    use HasFactory;

    protected $table = 'mplgubrgyvisionmissionstracking';
    protected $guarded = ['id'];
    protected $fillable = [
        'barangay_id',
        'municipal_id',
        'mplgubrgyvisionmissions_id',
        'user_id',
        'status', 
    ];
    public function municipal() {
        return $this->belongsTo(MellpiproLGUBarangayVisionMission::class);
    }
}
