<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class AttendanceController extends Controller
{
    public function test(){
        $att = Employee::with(['attendances' => function($q){
            $q->with('month_date')->whereHas('month_date');
        }])
            ->whereHas('attendances')
            ->get();
        \dd($att);
    }
}
