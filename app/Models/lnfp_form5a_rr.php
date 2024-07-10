<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lnfp_form5a_rr extends Model
{
    use HasFactory;

    protected $fillable = [
        'forThePeriod',
        'nameofPnao',
        'address',
        'provDeploy',
        'numYearPnao',
        'fulltime',
        'profAct',
        'bdate',
        'sex',
        'dateDesignation',
        'secondedOffice',
        'devActnum1',
        'devActnum2',
        'devActnum3',
        'ratingA',
        'ratingB',
        'ratingBB',
        'ratingC',
        'ratingD',
        'ratingE',
        'ratingF',
        'ratingG',
        'ratingGG',
        'ratingH',
        'remarksA',
        'remarksB',
        'remarksBB',
        'remarksC',
        'remarksD',
        'remarksE',
        'remarksF',
        'remarksG',
        'remarksGG',
        'remarksH',
    ];

    protected $guarded = ['id'];

    protected $table = 'lnfp_form5a_rr';
}