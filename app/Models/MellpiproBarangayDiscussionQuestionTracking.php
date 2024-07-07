<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MellpiproBarangayDiscussionQuestionTracking extends Model
{
    use HasFactory;

    protected $table = 'mplgubrgydiscussionquestiontracking';
    protected $guarded = ['id'];
    protected $fillable = [
        'mplgubrgydiscussionquestion_id',
        'barangay_id',
        'municipal_id', 
        'user_id',
        'status', 
    ];
    public function  DiscussionQuestion() {
        return $this->belongsTo(MellpiproBarangayDiscussionQuestion::class);
    }
}
