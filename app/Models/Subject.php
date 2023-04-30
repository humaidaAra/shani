<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subject extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'name'
    ];

    public function stage()
    {
        return $this->belongsTo(Stage::class, 'stage_subject.subject_id');
    }

    public function department()
    {
        return $this->belongsToMany(Department::class, 'department_subject');
    }

    public function professor()
    {
        return $this->belongsToMany(Professor::class, 'professor_subject');
    }
}
