<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'name',
        'dorm',
        'email',
        'nationality',
        'paralel'
    ];

    public function department()
    {
        return $this->belongsTo(Department::class, 'department_student.student_id');
    }

    public function stage()
    {
        return $this->belongsTo(Stage::class, 'stage_student.student_id');
    }
}
