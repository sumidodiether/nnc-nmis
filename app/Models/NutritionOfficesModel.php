<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NutritionOfficesModel extends Model
{
    use HasFactory;
    protected $table = 'nutrition_offices';
    protected $guarded =  ['id'];
    protected $fillable = [
        'geoLevel',
        'income_class',
        'nutritionOffice',
        'separateNutritionBudget',
        'separateNutritionBudgetAmount',
        'underWhatOffice',
        'underWhatOfficeOther',
        'pcnao_position',
        'pcnao_jobTitle',
        'pcnao_emplStat',
        'pcnao_othersEmpStat',
        'pcnao_salaryGrade',
        'pcnao_moreThanOne',
        'pcnao_moreThanOneNumber',
        'dcnpc_position',
        'dcnpc_jobTitle',
        'dcnpc_emplStat',
        'dcnpc_othersEmpStat',
        'dcnpc_salaryGrade',
        'dcnpc_moreThanOne',
        'dcnpc_moreThanOneNumber',
        'numTechSupp',
        'numAdminSupp',
        'psgccode_id',
        'region_id',
        'province_id',
        'municipal_id'
    ]; 

}
