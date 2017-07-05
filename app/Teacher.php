<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    public $table = 'teacher';
    public $primaryKey = 'id';
    public $timestamps = false;

    public  function subject()
    {
        return $this->belongsToMany('App\Subject','teacher_subject','teacher_id','subject_id');
    }

    public  function classes()
    {
        return $this->hasMany('App\Classes','teacher_id','id');
    }
}
