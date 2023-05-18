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
use Spatie\Activitylog\Models\Activity;


class registdash extends Controller
{
    public function dashboard(Request $rq){
        $cnter = SemesterCollege::count();
        $lastid = SemesterCollege::orderBy('id', 'DESC')->pluck('id');
        $status = SemesterCollege::orderBy('id', 'DESC')->pluck('status');
        $schoolyear = SemesterCollege::orderBy('id', 'DESC')->pluck('schoolyear');
        $sem = SemesterCollege::orderBy('id', 'DESC')->pluck('sem');
        $c = SemesterCollege::orderBy('id', 'DESC')->pluck('created_at');
        //dd($lastid);
        $syc = SeniorYear::count();
        $sy = SeniorYear::orderBy('id', 'DESC')->pluck('schoolyear');
        $cy = SeniorYear::orderBy('id', 'DESC')->pluck('created_at');
        $sxy = SeniorYear::orderBy('id', 'DESC')->pluck('status');

        // dd($sy);
        return view('registrar', compact('cnter', 'status', 'schoolyear', 'sem', 'c', 'syc', 'sy', 'cy', 'sxy'));
    }

    public function addsem(Request $rq){
        $sem = $rq->sem;
        $schoolyear = $rq->schoolyear;
        SemesterCollege::query()->update([
            'status' => 0,
        ]);

        SemesterCollege::create([
            'schoolyear' => $schoolyear,
            'status' => 1,
            'sem' => $sem,
        ]);

        $sem = SemesterCollege::orderBy('id', 'DESC')->limit(1)->pluck('sem');
        $causename = User::where('id', '=', Auth::user()->id)->pluck('name');
        $sy = SemesterCollege::orderBy('id', 'DESC')->limit(1)->pluck('sem');


        adminlogs::create([
            'userid' => Auth::user()->id,
            'action' => $causename[0]." created ". $sem[0]." for School Year ". $sy[0],
        ]);
        $cnter = SemesterCollege::count();
        $lastid = SemesterCollege::orderBy('id', 'DESC')->pluck('id');
        $status = SemesterCollege::orderBy('id', 'DESC')->pluck('status');
        $schoolyear = SemesterCollege::orderBy('id', 'DESC')->pluck('schoolyear');
        $sem = SemesterCollege::orderBy('id', 'DESC')->pluck('sem');
        $c = SemesterCollege::orderBy('id', 'DESC')->pluck('created_at');
        //dd($lastid);
        $syc = SeniorYear::count();
        $sy = SeniorYear::orderBy('id', 'DESC')->pluck('schoolyear');
        $cy = SeniorYear::orderBy('id', 'DESC')->pluck('created_at');
        $sxy = SeniorYear::orderBy('id', 'DESC')->pluck('status');
        return view('registrar', compact('cnter', 'status', 'schoolyear', 'sem', 'c', 'syc', 'sy', 'cy', 'sxy'));
        // return view('registrar');
    }

    public function rgislogs(Request $rq){
        $logcount = adminlogs::where('userid', '=', Auth::user()->id)->count();
        $logs = adminlogs::where('userid', '=', Auth::user()->id)->orderBy('id', 'DESC')->pluck('action');
        $logdt = adminlogs::where('userid', '=', Auth::user()->id)->orderBy('id', 'DESC')->pluck('created_at');
        //dd($logcount);
        return view('registlogs', compact('logcount', 'logs', 'logdt'));
    }

    public function addsy(Request $rq){

        $schoolyear = $rq->schoolyear;


        if(SeniorYear::count() > 0){
        SeniorYear::query()->update([
            'status' => 0,
        ]);

        SeniorYear::create([
            'schoolyear' => $schoolyear,
            'status' => 1,

        ]);

        $causename = User::where('id', '=', Auth::user()->id)->pluck('name');
        $sysh = SeniorYear::orderBy('id', 'DESC')->limit(1)->pluck('schoolyear');


        adminlogs::create([
            'userid' => Auth::user()->id,
            'action' => $causename[0]." created School Year ". $sysh[0]. " for Senior High School",
        ]);
        $cnter = SemesterCollege::count();
        $lastid = SemesterCollege::orderBy('id', 'DESC')->pluck('id');
        $status = SemesterCollege::orderBy('id', 'DESC')->pluck('status');
        $schoolyear = SemesterCollege::orderBy('id', 'DESC')->pluck('schoolyear');
        $sem = SemesterCollege::orderBy('id', 'DESC')->pluck('sem');
        $c = SemesterCollege::orderBy('id', 'DESC')->pluck('created_at');

        $syc = SeniorYear::count();
        $sy = SeniorYear::orderBy('id', 'DESC')->pluck('schoolyear');
        $cy = SeniorYear::orderBy('id', 'DESC')->pluck('created_at');
        return view('registrar', compact('cnter', 'status', 'schoolyear', 'sem', 'c', 'syc'));

    }
    else {

        SeniorYear::create([
            'schoolyear' => $schoolyear,
            'status' => 1,

        ]);

        $causename = User::where('id', '=', Auth::user()->id)->pluck('name');
        $sysh = SeniorYear::orderBy('id', 'DESC')->limit(1)->pluck('schoolyear');


        adminlogs::create([
            'userid' => Auth::user()->id,
            'action' => $causename[0]." created School Year ". $sysh[0]. " for Senior High School",
        ]);
        $cnter = SemesterCollege::count();
        $lastid = SemesterCollege::orderBy('id', 'DESC')->pluck('id');
        $status = SemesterCollege::orderBy('id', 'DESC')->pluck('status');
        $schoolyear = SemesterCollege::orderBy('id', 'DESC')->pluck('schoolyear');
        $sem = SemesterCollege::orderBy('id', 'DESC')->pluck('sem');
        $c = SemesterCollege::orderBy('id', 'DESC')->pluck('created_at');

        $syc = SeniorYear::count();
        $sy = SeniorYear::orderBy('id', 'DESC')->pluck('schoolyear');
        $cy = SeniorYear::orderBy('id', 'DESC')->pluck('created_at');

        return view('registrar', compact('cnter', 'status', 'schoolyear', 'sem', 'c', 'syc'));

        // return view('registrar');
    }}


    public function enroll(Request $rq){
        $cnter = studentenroll::where('status', '=', 0)->count();
        $id = studentenroll::where('status', '=', 0)->pluck('id');
        $sid = studentenroll::where('status', '=', 0)->pluck('student_id');
        $name = User::where('id', '=', $id)->pluck('name');
        $course = studentenroll::where('status', '=', 0)->pluck('course');
        $schoolyear = studentenroll::where('status', '=', 0)->pluck('schoolyear');
        $yearlevel = studentenroll::where('status', '=', 0)->pluck('yearlevel');
        $status = StudentInfo::where('name', '=', $name)->pluck('status');
        return view('enroll', compact('cnter', 'id', 'sid', 'course', 'schoolyear', 'yearlevel', 'status'));
    }

    public function stnd(Request $rq){
        $ucount = StudentInfo::where('status', '=', 2)->count();
        $id = StudentInfo::where('status', '=', 2)->pluck('id');
        $name = StudentInfo::where('status', '=', 2)->pluck('name');
        $status = StudentInfo::where('status', '=', 2)->pluck('status');
        return view('allowstnd', compact('ucount', 'id', 'name', 'status'));
    }

    public function viewstu(Request $rq){
        $name = StudentInfo::where('id', '=', $rq->id)->pluck('name');
        $id = User::where('name', '=', $name)->pluck('id');
        $pfp = User::where('name', '=', $name)->pluck('profile_photo_path');
        $email = User::where('name', '=', $name)->pluck('email');
        $age = StudentInfo::where('name', '=', $name)->pluck('age');
        $gend = StudentInfo::where('name', '=', $name)->pluck('gender');
        $bday = StudentInfo::where('name', '=', $name)->pluck('birthdate');
        $cv = StudentInfo::where('name', '=', $name)->pluck('civilstatus');
        $cn = StudentInfo::where('name', '=', $name)->pluck('contactno');
        return view('viewstu', compact( 'id', 'name', 'pfp', 'email', 'gend', 'bday', 'age', 'cv', 'cn'));
    }

    public function old(Request $rq){
        $name = StudentInfo::where('id', '=', $rq->id)->pluck('name');
        StudentInfo::where('name', '=', $name)->update(['status' => 1,]);
        $cnter = SemesterCollege::count();
        $lastid = SemesterCollege::orderBy('id', 'DESC')->pluck('id');
        $status = SemesterCollege::orderBy('id', 'DESC')->pluck('status');
        $schoolyear = SemesterCollege::orderBy('id', 'DESC')->pluck('schoolyear');
        $sem = SemesterCollege::orderBy('id', 'DESC')->pluck('sem');
        $c = SemesterCollege::orderBy('id', 'DESC')->pluck('created_at');
        //dd($lastid);
        $syc = SeniorYear::count();
        $sy = SeniorYear::orderBy('id', 'DESC')->pluck('schoolyear');
        $cy = SeniorYear::orderBy('id', 'DESC')->pluck('created_at');
        $sxy = SeniorYear::orderBy('id', 'DESC')->pluck('status');

        // dd($sy);
        return view('registrar', compact('cnter', 'status', 'schoolyear', 'sem', 'c', 'syc', 'sy', 'cy', 'sxy'));
    }

    public function new(Request $rq){
        $name = StudentInfo::where('id', '=', $rq->id)->pluck('name');
        StudentInfo::where('name', '=', $name)->update(['status' => 2,]);
        $cnter = SemesterCollege::count();
        $lastid = SemesterCollege::orderBy('id', 'DESC')->pluck('id');
        $status = SemesterCollege::orderBy('id', 'DESC')->pluck('status');
        $schoolyear = SemesterCollege::orderBy('id', 'DESC')->pluck('schoolyear');
        $sem = SemesterCollege::orderBy('id', 'DESC')->pluck('sem');
        $c = SemesterCollege::orderBy('id', 'DESC')->pluck('created_at');
        //dd($lastid);
        $syc = SeniorYear::count();
        $sy = SeniorYear::orderBy('id', 'DESC')->pluck('schoolyear');
        $cy = SeniorYear::orderBy('id', 'DESC')->pluck('created_at');
        $sxy = SeniorYear::orderBy('id', 'DESC')->pluck('status');

        // dd($sy);
        return view('registrar', compact('cnter', 'status', 'schoolyear', 'sem', 'c', 'syc', 'sy', 'cy', 'sxy'));
    }
    
    public function viewenroll(Request $rq){
       
        $name = StudentInfo::where('id', '=', $rq->id)->pluck('name');
        $stnid = User::where('name', '=', $name)->pluck('id');
        $email = User::where('name', '=', $name)->pluck('email');
        $age = StudentInfo::where('id', '=', $rq->id)->pluck('age');
        $bday = StudentInfo::where('id', '=', $rq->id)->pluck('birthdate');
        $gender = StudentInfo::where('id', '=', $rq->id)->pluck('gender');
        $cv = StudentInfo::where('id', '=', $rq->id)->pluck('civilstatus');
        $cn = StudentInfo::where('id', '=', $rq->id)->pluck('contactno');
        $stntype = StudentInfo::where('id', '=', $rq->id)->pluck('status');

        $stdntid = studentenroll::where('student_id', '=', $stnid[0])->pluck('student_id');
  
        $stdcrs = studentenroll::where('student_id', '=', $stnid[0])->pluck('course');
        $stdyrlevel = studentenroll::where('student_id', '=', $stnid[0])->pluck('yearlevel');
        $stdsy= studentenroll::where('student_id', '=', $stnid[0])->pluck('schoolyear');
        $subcounter = Subjects::where('course', '=', $stdcrs[0])->count();
        $subjs = Subjects::where('course', '=', $stdcrs[0])->pluck('subject');
 
        if($stntype[0] == 1){
            $subcounter = Subjects::where('course', '=', $stdcrs[0])->count();
            $subjs = Subjects::where('course', '=', $stdcrs[0])->pluck('subject');
            

    $stud_subjc = student_sub::where('student_id', '=', $stnid[0])->where('status', '=', 1)->count();
    $stud_subj = student_sub::where('student_id', '=', $stnid[0])->where('status', '=', 1)->pluck('subject');
    $stud_teach = student_sub::where('student_id', '=', $stnid[0])->where('status', '=', 1)->pluck('teacher');
    $fcount = clearance::where('userid', '=', $stnid[0])->where('status', '=', 1)->count();
    $fname = clearance::where('userid', '=', $stnid[0])->where('status', '=', 1)->pluck('file_path');
    $cnteryr = yearlevel::where('status', '=', 1)->count();
        $yrlvl = yearlevel::where('status', '=', 1)->pluck('yearlevel');
        $yrcrs = yearlevel::where('status', '=', 1)->pluck('course');
        $yrsub = yearlevel::where('status', '=', 1)->pluck('subject');
    return view('viewenrollment', compact('cnteryr', 'yrlvl', 'yrsub', 'stud_teach','stud_subjc', 'stud_subj', 'fcount', 'fname', 'email', 'name', 'age', 'bday', 'gender', 'cv', 'cn', 'stntype', 'stnid', 'stdntid', 'stdcrs', 'stdyrlevel', 'stdsy'));
    }

 


 
        elseif($stntype[0] == 0){
            
            return view('viewenrollment', compact('email', 'name', 'age', 'bday', 'gender', 'cv', 'cn', 'stntype', 'stnid', 'stdntid', 'stdcrs', 'stdyrlevel', 'stdsy'));
         }

         else{
            return redirect()->intended('logout');
         }
           }

}
