<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sampleUpdateForm5a extends Model
{
    use HasFactory;
    protected $table = 'lnfp_form5a';
    protected $guarded =  ['id'];
    protected $fillable = [
        'elementsA'
    ];
}
