<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    public $table = 'class';
    public $primaryKey = 'id';
    public $timestamps = false;

    public function student ()
    {
        return $this->belongsToMany('App\Student','class_student','class_id','student_id');
    }

    public function teacher()
    {
        return $this->belongsTo('App\Teacher','teacher_id','id');
    }

    public function subject()
    {
        return $this->belongsTo('App\Subject','subject_id','id');
    }

}
