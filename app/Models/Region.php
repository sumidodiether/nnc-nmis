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

    

}
