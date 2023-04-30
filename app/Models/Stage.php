<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Stage extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'stage'
    ];

    public function subjects()
    {
        return $this->hasMany(Subject::class, 'stage_subject_stage_id');
    }
}
