<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barangay extends Model
{
    use HasFactory;

    protected $table = 'barangays';
    protected $guarded = ['id'];
    protected $fillable = ['municipal_id','barangay','brgytype','brgynumber','updated_at', 'created_at'];

}
