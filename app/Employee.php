<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $guarded = ['id'];

    public function attendances(){
        return $this->hasMany('App\Attendance');
    }
}
