<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    //
       protected $fillable = [
        'name',
        'class_id',
        'parent_id',
    ];

    public function studentclass(){
        return $this->belongsTo(SchoolClass::class, 'class_id');
    }

    public function parent(){
        return $this->belongsTo(User::class, 'parent_id');
    }

     
}
