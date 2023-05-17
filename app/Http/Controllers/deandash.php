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
use Illuminate\Support\Facades\Auth;


class deandash extends Controller
{
    public function dashboard(Request $rq){
        $syc = SemesterCollege::where('status', '=', 1)->count();
        $sy = SemesterCollege::where('status', '=', 1)->pluck('schoolyear');
        $sem = SemesterCollege::where('status', '=', 1)->pluck('sem');

        $crs = Course::where('status', '=', 1)->pluck('course');
        $crcnt = Course::where('status', '=', 1)->count();

        $sub = Subjects::where('status', '=', 1)->pluck('subject');
        $subcnt = Subjects::where('status', '=', 1)->count();

        //dd($crcnt);
        return view('deandash', compact('syc', 'sy', 'sem', 'crs', 'crcnt', 'subcnt', 'sub'));
    }

    public function addcourse(Request $rq){
        $course = $rq->course;
        $sem = $rq->sem;

        Course::create([
            'schoolyear' => $sem,
        'status' => 1,
        'course' => $course,
        'dean' => Auth::user()->id,
        ]);

        adminlogs::create([
            'userid' => Auth::user()->id,
            'action' => Auth::user()->name." created course: ". $course,
        ]);

        $syc = SemesterCollege::where('status', '=', 1)->count();
        $sy = SemesterCollege::where('status', '=', 1)->pluck('schoolyear');
        $sem = SemesterCollege::where('status', '=', 1)->pluck('sem');

        $crs = Course::where('status', '=', 1)->pluck('course');
        $crcnt = Course::where('status', '=', 1)->count();

        $sub = Subjects::where('status', '=', 1)->pluck('subject');
        $subcnt = Subjects::where('status', '=', 1)->count();

        //dd($crcnt);
        return view('deandash', compact('syc', 'sy', 'sem', 'crs', 'crcnt', 'subcnt', 'sub'));
    }

    public function addsub(Request $rq){
        $subject = $rq->sub;
        $course = $rq->course;
        $sys = Course::where('course', '=', $course)->pluck('schoolyear');
        $sem = SemesterCollege::where('schoolyear', '=', $sys)->where('status', '=', 1)->pluck('sem');

        Subjects::create([
        'dean' => Auth::user()->id,
        'course' => $course,
        'subject' => $subject,
        'year' => $sys[0],
        'status' => 1,
        ]);

        adminlogs::create([
            'userid' => Auth::user()->id,
            'action' => Auth::user()->name." created Subject: ". $subject. " for course: ". $course,
        ]);

        $syc = SemesterCollege::where('status', '=', 1)->count();
        $sy = SemesterCollege::where('status', '=', 1)->pluck('schoolyear');
        $sem = SemesterCollege::where('status', '=', 1)->pluck('sem');

        $crs = Course::where('status', '=', 1)->pluck('course');
        $crcnt = Course::where('status', '=', 1)->count();

        $sub = Subjects::where('status', '=', 1)->pluck('subject');
        $subcnt = Subjects::where('status', '=', 1)->count();

        //dd($crcnt);
        return view('deandash', compact('syc', 'sy', 'sem', 'crs', 'crcnt', 'subcnt', 'sub'));

    }
}
