<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MellpiproChangeNSTracking extends Model
{
    use HasFactory;

    protected $table = 'mplgubrgychangeNStracking';
    protected $guarded = ['id'];
    protected $fillable = [
        'mplgubrgychangeNS_id',
        'barangay_id',
        'municipal_id', 
        'user_id',
        'status', 
    ];
    public function  ChangeNS() {
        return $this->belongsTo(MellpiproChangeNS::class);
    }
}
