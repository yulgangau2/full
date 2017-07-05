<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public $table = 'student';
    public $primaryKey = 'id';
    public $timestamps = false;

    public function classes ()
    {
        return $this->belongsToMany('App\Classes','class_student','student_id','class_id');
    }
}
