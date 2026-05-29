<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Assignments extends Model
{
    //
     protected $fillable = [
        'title',
        'description',
        'class_id',
        'teacher_id'

    ];

    

}
