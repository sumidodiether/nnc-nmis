<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormBuilderA extends Model
{
    use HasFactory;
    protected $table = 'formbuilderA';
    protected $guarded =  ['id'];
    protected $fillable = ['formAname','status']; 
}
