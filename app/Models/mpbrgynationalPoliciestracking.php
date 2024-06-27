<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mpbrgynationalPoliciestracking extends Model
{
    use HasFactory;
    protected $table = 'mpbrgynationalPoliciestracking';
    protected $guarded = ['id'];
    protected $fillable = [
        'mellpiprobarangaynationalpolicies_id',
        'barangay_id',
        'municipal_id', 
        'user_id',
        'status', 
    ];
    public function  Nationalpolicies() {
        return $this->belongsTo(MellpiprobarangayNationalpolicies::class);
    }
}
