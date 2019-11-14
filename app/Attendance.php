<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $guarded = ['id'];

    public function employee(){
        return $this->belongsTo('App\Employee');
    }

    public function month_date(){
        return $this->belongsTo('App\MonthDate', 'date', 'date');
    }

    public function att_month(){
        return $this->rightJoin($this->month_date, 'attendances.date', 'month_dates.date');
    }
}
