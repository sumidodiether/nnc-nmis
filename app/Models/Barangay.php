<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barangay extends Model
{
    use HasFactory;

    protected $table = 'barangays';
    protected $guarded = ['id'];
    protected $fillable = ['psgccode_id','city_id','municipal_id','barangay','brgytype','brgynumber','updated_at', 'created_at'];
   
    public function psgc() {
        return $this->hasMany(PSGC::class);
    }
    // public function region() {
    //     return $this->hasMany(Region::class);
    // }
 
    public function city() {
        return $this->belongsTo(City::class);
    }

    public function municipal() {
        return $this->belongsTo(Municipal::class);
    }
    
 

   

}
