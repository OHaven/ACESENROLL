<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\adminlogs;
use App\Models\SemesterCollege;
use App\Models\SeniorYear;
use App\Models\StudentInfo;
use App\Models\clearance;
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
        return view('enroll');
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

        return view('viewstu', compact( 'id', 'name', 'pfp'));
    }

    

}
