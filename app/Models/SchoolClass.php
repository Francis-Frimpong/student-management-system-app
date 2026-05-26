<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Students;

class SchoolClass extends Model
{
    //
    protected $table = 'classes';

     protected $fillable = [
        'name',
        'teacher_id',
    ];

    public function teacher()
    {
        return $this->belongsTo(User::class, 'teacher_id');
    }

    public function students()
    {
        return $this->hasMany(Students::class, 'class_id');
    }

}
