<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\adminlogs;
use App\Models\SemesterCollege;
use App\Models\SeniorYear;

class deandash extends Controller
{
    public function dashboard(Request $rq){
        return view('deandash');
    }
}
