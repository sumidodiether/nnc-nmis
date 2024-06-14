<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipal extends Model
{
    use HasFactory;

    protected $table = 'municipals';
    protected $guarded = ['id'];
    protected $fillable = ['psgccode_id','province_id','municipal','munclass','munnumber','updated_at', 'created_at'];

    public function psgc() {
        return $this->belongsTo(PSGC::class);
    }
    // public function region() {
    //     return $this->belongsTo(Region::class);
    // }

    public function Province() {
        return $this->belongsTo(Province::class);
    }
    
    public function barangay() {
        return $this->hasMany(Barangay::class);
    }

}
