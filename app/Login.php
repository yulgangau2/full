<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'logins';
    public $timestamps = false;
}
