<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipal extends Model
{
    use HasFactory;

    protected $table = 'municipals';
    protected $guarded = ['id'];
    protected $fillable = ['province_id','municipal','munclass','munnumber','updated_at', 'created_at'];

    
}
