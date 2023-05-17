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
        

        return view('deandash');
    }
}
