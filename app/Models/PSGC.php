<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PSGC extends Model
{
    use HasFactory;
    protected $table = 'psgcs';
    protected $guarded = ['id'];
    protected $fillable = ['psgccode','correspondencecode','geolevel','incomeclass','updated_at', 'created_at'];


    public function region() {
        return $this->hasOne(PSGC::class);
    }

    public function province() {
        return $this->hasOne(PSGC::class);
    }

    public function municipal() {
        return $this->hasOne(PSGC::class);
    }

    public function barangay() {
        return $this->hasOne(PSGC::class);
    }

    public function population() {
        return $this->hasOne(PSGC::class);
    }

    public function visionmissions() {
        return $this->hasOne(PSGC::class);
    }

    public function nationalpolicies() {
        return $this->hasOne(PSGC::class);
    }

    public function governances() {
        return $this->hasOne(PSGC::class);
    }

    public function managements() {
        return $this->hasOne(PSGC::class);
    }







}
