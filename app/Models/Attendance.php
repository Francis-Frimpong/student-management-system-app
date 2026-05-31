<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    //
     protected $fillable = [
        'student_id',
        'date',
        'status'
    ];

       public function student()
    {
        return $this->belongsTo(Students::class, 'student_id');
    }
}
