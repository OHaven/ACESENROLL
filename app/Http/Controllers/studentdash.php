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
use Carbon\Carbon;

class studentdash extends Controller
{
    public function studentdash(Request $rq){
        $count = StudentInfo::where('id', '=', Auth::user()->id)->count();
        if($count == 0){ 
            $name = Auth::user()->name;
            return view('studentinfo', compact('name'));
        }
        else {
            return view('studentdash');
        }
    }

    public function addinfo(Request $rq){
        $name = $rq->name;
        $age = $rq->age;
        $bdate = $rq->birthdate;
        $gender = $rq->gend;
        $cv = $rq->cv;
        $cname= $rq->cnum;

        dd($rq->cname);
        
        // StudentInfo::create([
        //     'name' => $name,
        //     'age' => $age,
        //     'birthdate' => $bdate,
        //     'gender' => $gender,
        //     'civilstatus' => $cv,
        //     'contactno' => $cname,
        //     'status' => 0,
        // ]);   

        $causename = User::where('id', '=', Auth::user()->id)->pluck('name');

        adminlogs::create([
            'userid' => Auth::user()->id,
            'action' => $causename[0]." submitted a Personal Information Form",
        ]);
        


    }
}
