<?php

namespace App\Models\ArSys;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusMilestone extends Model
{
    use HasFactory;
    // protected $fillable = ['user_id', 'program_id', 'specialization_id', 'supervisor_id', 'code',  'student_id', 'first_name', 'last_name', 'phone', 'email'];
    protected $table = 'arsys_research_milestone_status';

    

}
