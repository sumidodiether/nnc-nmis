<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;

    protected $table = 'provinces';
    protected $guarded = ['id'];
    protected $fillable = ['psgccode_id','region_id','province','proclass','provnumber','updated_at', 'created_at'];
    
  
    public function psgc() {
        return $this->belongsTo(PSGC::class);
    }
    public function region() {
        return $this->belongsTo(Region::class);
    }

    public function municipal() {
        return $this->belongsTo(Municipal::class);
    }
    

}
