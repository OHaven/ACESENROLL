<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
use App\Models\adminlogs;
use App\Models\SemesterCollege;
use App\Models\SeniorYear;
use App\Models\Course;
use App\Models\Subjects;
use App\Models\Teachers;
use App\Models\yearlevel;
use App\Models\StudentInfo;
use Illuminate\Support\Facades\Auth;

class studentdash extends Controller
{
    public function studentdash(Request $rq){
        $count = StudentInfo::where('id', '=', Auth::user()->id)->count();
        if($count > 0){ 
            return view('studentinfo');
        }
        else {
            return view('studentdash');
        }
    }
}
