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


class deandash extends Controller
{
    public function dashboard(Request $rq){
        $syc = SemesterCollege::where('status', '=', 1)->count();
        $sy = SemesterCollege::where('status', '=', 1)->pluck('schoolyear');
        $sem = SemesterCollege::where('status', '=', 1)->pluck('sem');

        return view('deandash', compact('syc', 'sy', 'sem'));
    }

    public function addcourse(Request $rq){
        $course = $rq->course;
        $sem = $rq->sem;
    }
}
