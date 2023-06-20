<?php

namespace App\Models\ArSys;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Research extends Model
{
    use HasFactory;
    //protected $fillable = ['user_id', 'program_id', 'specialization_id', 'supervisor_id', 'code',  'student_id', 'first_name', 'last_name', 'phone', 'email'];
    protected $table = 'arsys_research';

    public function student() {
        return $this->belongsTo(Student::class, 'student_id', 'id');
    }
    public function researchmilestone() {
        return $this->belongsTo(StatusMilestone ::class, 'research_milestone', 'id');
    }
    // public function specialization() {
    //     return $this->belongsTo(StudySpecialization::class, 'specialization_id', 'id' );
    // }

    // // public function supervisor() {
    // //     return $this->belongsTo(Staff::class, 'supervisor_id', 'id' );
    // // }
    // // public function status() {
    // //     return $this->belongsTo(StatusMilestone::class, 'status', 'id' );
    // // }
    // // public function getFullNameAttribute() { return $this->first_name . ' ' . $this->last_name; }

    protected $appends = [ 'full_name' ];


}
