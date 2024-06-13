<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;

    protected $table = 'regions';
    protected $guarded = ['id'];
    protected $fillable = ['psgccode_id','region','regclass','regnumber','psgccode_id','updated_at', 'created_at'];


    public function psgc() {
        return $this->hasMany(PSGC::class);
    }
    public function province() {
        return $this->hasMany(Province::class);
    }
    public function city() {
        return $this->hasMany(City::class);
    }

    public function municipal() {
        return $this->hasMany(Municipal::class);
    }

    public function barangay() {
        return $this->hasMany(Barangay::class);
    }


}
