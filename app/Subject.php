<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    public $table = 'subject';
    public $primaryKey = 'id';
    public $timestamps = false;

    public  function teacher()
    {
        return $this->belongsToMany('App\Teacher','teacher_subject','subject_id','teacher_id');
    }

    public  function classes()
    {
        return $this->hasMany('App\Classes','subject_id','id');
    }
}
