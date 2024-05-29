<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $table = 'citys';
    protected $guarded = ['id'];
    protected $fillable = ['region_id','city','cityclass','citynumber','cityIncomeClass','updated_at', 'created_at'];
    
    public function psgc() {
        return $this->hasMany(PSGC::class);
    }
    public function region() {
        return $this->hasMany(Region::class);
    }


    public function barangay() {
        return $this->hasMany(Barangay::class);
    }
}
