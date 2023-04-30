<?php

namespace App\Models;

use App\Models\Department;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class College extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name'
    ];
    public function departments()
    {
        return $this->hasMany(Department::class);
    }
}
