<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;

    protected $table = 'provinces';
    protected $guarded = ['id'];
    protected $fillable = ['region_id','province','proclass','provnumber','updated_at', 'created_at'];
    
  
    public function psgc() {
        return $this->hasMany(PSGC::class);
    }
    public function region() {
        return $this->hasMany(Region::class);
    }

    public function municipal() {
        return $this->hasMany(Municipal::class);
    }
    
    public function barangay() {
        return $this->hasMany(Barangay::class);
    }

}
