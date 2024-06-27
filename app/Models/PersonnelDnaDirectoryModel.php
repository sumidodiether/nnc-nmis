<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonnelDnaDirectoryModel extends Model
{
    use HasFactory;

    protected $table = 'personnels';
    protected $guarded = ['id'];
    protected $fillable = [
        'lastname',
        'firstname',
        'middlename',
        'suffix',
        'cellphonenumer',
        'telephonenumber',
        'email',
        'address',
        'sex',
        'birthdate',
        'age',
        'civilstatus',
        'educationalbackground',
        'degreeCourse',
        'region_id',
        'province_id',
        // 'municipal_id'
        'cities_id'
    ];

    public function NaoFuction()
    {
        return $this->hasMany(PersonnelDnaDirectoryNaoModel::class, 'personnel_id');
    }

    public function NpcFuction()
    {
        return $this->hasMany(PersonnelDnaDirectoryNpcModel::class);
    }
}