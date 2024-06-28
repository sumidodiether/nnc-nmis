<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MellpiprobarangayGovernanceTracker extends Model
{
    use HasFactory;

    protected $table = 'mplgubrgygovernancetracking';
    protected $guarded = ['id'];
    protected $fillable = [
        'mplgubrgygovernance_id',
        'barangay_id',
        'municipal_id', 
        'user_id',
        'status', 
    ];
    public function  Nationalpolicies() {
        return $this->belongsTo(MellpiprobarangayGovernance::class);
    }
}
