<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;

    protected $table = 'provinces';
    protected $guarded = ['id'];
    protected $fillable = ['province','updated_at', 'created_at'];

    public function psgc() {
        return $this->belongsTo(User::class);
    }
}
