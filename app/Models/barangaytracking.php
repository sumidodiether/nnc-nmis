<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barangaytracking extends Model
{
    use HasFactory;

    protected $table = 'barangaytracking';
    protected $guarded = ['id'];
    protected $fillable = ['user_id','lguprofilebarangay_id','barangay_id','municipal_id','status'];
   
 

    public function municipal() {
        return $this->belongsTo(LguProfile::class);
    }
    
}



 