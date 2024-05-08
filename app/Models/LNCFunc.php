<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LNCFunc extends Model
{
    use HasFactory;

    // protected $fillable = ['barangay', 'municipality', 'province', 'updated_at', 'created_at'];
    // protected $guarded = ['id'];
    protected $table = 'lncdata';
    
}
