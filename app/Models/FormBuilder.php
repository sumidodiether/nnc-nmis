<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormBuilder extends Model
{
    use HasFactory;
    protected $table = 'formbuilder';
    protected $guarded =  ['id'];
    protected $fillable = ['formname', 'datecreated', 'lastupdate', 'status']; 
}
