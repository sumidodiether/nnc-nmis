<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiscussionQuestionModel extends Model
{
    use HasFactory;

    protected $fillable = [
                'lgu_profile_id ',
                'vision_good_practices_remarks',
                'vision_issues_problems_remarks',
                'vision_local_initiatives_remarks',
                'vision_immediate_actions_remarks',
                'policies_good_practices_remarks',
                'policies_issues_problems_remarks',
                'policies_local_initiatives_remarks',
                'policies_immediate_actions_remarks',
                'governance_good_practices_remarks',
                'governance_issues_problems_remarks',
                'governance_local_initiatives_remarks',
                'governance_immediate_actions_remarks',
                'nutri_good_practices_remarks',
                'nutri_issues_problems_remarks',
                'nuti_local_initiatives_remarks',
                'nutri_immediate_actions_remarks',
                'services_good_practices_remarks',
                'services_issues_problems_remarks',
                'services_local_initiatives_remarks',
                'services_immediate_actions_remarks',
                'changes_good_practices_remarks',
                'changes_issues_problems_remarks',
                'changes_local_initiatives_remarks',
                'changes_immediate_actions_remarks'
                    ];

    protected $guarded = ['id'];

    protected $table = 'discussion_questions';


}
