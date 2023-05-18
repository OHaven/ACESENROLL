<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\adminlogs;
use App\Models\SemesterCollege;
use App\Models\SeniorYear;
use App\Models\Subjects;
use App\Models\StudentInfo;
use App\Models\clearance;
use App\Models\yearlevel;
use App\Models\studentenroll;
use App\Models\student_sub;
use App\Models\Course;
use App\Models\toapprovecash;

class cashierdash extends Controller
{
    public function dashboard(Request $rq){
        $studentid = toapprovecash::where('status', '=', 0)->pluck('student_id');
        $desc = toapprovecash::where('status', '=', 0)->pluck('payable_desc');
        $fee = toapprovecash::where('status', '=', 0)->pluck('fee');

         return view('cashierdash');
    }
}
