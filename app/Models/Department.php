<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Department extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'name',
        'college_id'
    ];

    public function college()
    {
        return $this->belongsTo(College::class);
    }

    public function subjects()
    {
        return $this->belongsToMany(Subject::class, 'department_subject');
    }
}
