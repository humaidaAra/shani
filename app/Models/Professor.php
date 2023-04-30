<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Professor extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'name',
        'phone'
    ];

    public function subjects()
    {
        return $this->hasMany(Subject::class);
    }
}
