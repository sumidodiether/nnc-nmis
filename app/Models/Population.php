<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Population extends Model
{
    use HasFactory;
    protected $table = 'population';
    protected $guarded = ['id'];
    protected $fillable = ['psgccode','correspondencecode','geolevel','incomeclass','updated_at', 'created_at'];
}
