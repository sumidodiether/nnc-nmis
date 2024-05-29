<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NutritionServicesModel extends Model
{
    use HasFactory;

    protected $fillable = [
                        'lgu_profile_id',
                        'young_child_feeding_rating1', 
                        'young_child_feeding_remarks1',
                        'young_child_feeding_rating2',
                        'young_child_feeding_remarks2',
                        'young_child_feeding_rating3',
                        'young_child_feeding_remarks3',
                        'acute_malnutrition_rating4',
                        'acute_malnutrition_remarks4',
                        'national_dietary_rating5',
                        'national_dietary_remarks5',
                        'national_dietary_rating6',
                        'national_dietary_remarks6',
                        'national_dietary_rating7',
                        'national_dietary_remarks7',
                        'national_dietary_rating8',
                        'national_dietary_remarks8',
                        'behavioral_change_rating9',
                        'behavioral_change_remarks9',
                        'behavioral_change_rating10',
                        'behavioral_change_remarks10',
                        'micro_supplement_rating11',
                        'micro_supplement_remark11',
                        'micro_supplement_rating12',
                        'micro_supplement_remark12',
                        'micro_supplement_rating13',
                        'micro_supplement_remark13',
                        'micro_supplement_rating14',
                        'micro_supplement_remark14',
                        'micro_supplement_rating15',
                        'micro_supplement_remark15',
                        'micro_supplement_rating16',
                        'micro_supplement_remark16',
                        'mandatory_food_rating17',
                        'mandatory_food_remarks17',
                        'mandatory_food_rating18',
                        'mandatory_food_remarks18',
                        'mandatory_food_rating19',
                        'mandatory_food_remarks19',
                        'emergencies_program_rating20',
                        'emergencies_program_remarks20',
                        'prevention_program_rating21',
                        'prevention_program_remarks21',
                        'prevention_program_rating22',
                        'prevention_program_remarks22',
                        'nutri_sensitive_rating23',
                        'nutri_sensitive_remarks23',
                        'nutri_sensitive_rating24',
                        'nutri_sensitive_remarks24',
                        'nutri_sensitive_rating25',
                        'nutri_sensitive_remarks25',
                        'nutri_sensitive_rating26',
                        'nutri_sensitive_remarks26',
                        'nutri_sensitive_rating27',
                        'nutri_sensitive_remarks27',
                        'nutri_sensitive_rating28',
                        'nutri_sensitive_remarks28',
                        'nutri_sensitive_rating29',
                        'nutri_sensitive_remarks29',
                        'nutri_sensitive_rating30',
                        'nutri_sensitive_remarks30',
                        'young_child_feeding_average',
                        'acute_malnutrition_average',
                        'national_dietary_average',
                        'behavioral_change_average',
                        'micro_supplement_average',
                        'mandatory_food_average',
                        'emergencies_program_average',
                        'prevention_program_average',
                        'nutri_sensitive_average',
                    ];

    protected $guarded = ['id'];

    protected $table = 'nutrition_services';

}
