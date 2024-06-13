<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $table = 'citys';
    protected $guarded = ['id'];
    protected $fillable = ['psgccode_id','region_id','city','cityclass','citynumber','cityIncomeClass','updated_at', 'created_at'];
    
    public function psgc() {
        return $this->belongsTo(PSGC::class);
    }
    public function region() {
        return $this->belongsTo(Region::class);
    }


    public function barangay() {
        return $this->belongsTo(Barangay::class);
    }
}
