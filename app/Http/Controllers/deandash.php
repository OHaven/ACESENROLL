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

        $cnteryr = yearlevel::where('status', '=', 1)->count();
        $yrlvl = yearlevel::where('status', '=', 1)->pluck('yearlevel');
        $yrcrs = yearlevel::where('status', '=', 1)->pluck('course');
        $yrsub = yearlevel::where('status', '=', 1)->pluck('subject');

        $ids = yearlevel::where('status', '=', 1)->pluck('id');
        return view('deandash', compact('syc', 'sy', 'sem', 'crs', 'crcnt', 'subcnt', 'sub', 'cnteryr', 'yrlvl', 'yrcrs', 'yrsub', 'ids'));
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

        $cnteryr = yearlevel::where('status', '=', 1)->count();
        $yrlvl = yearlevel::where('status', '=', 1)->pluck('yearlevel');
        $yrcrs = yearlevel::where('status', '=', 1)->pluck('course');
        $yrsub = yearlevel::where('status', '=', 1)->pluck('subject');

        $ids = yearlevel::where('status', '=', 1)->pluck('id');
        return view('deandash', compact('syc', 'sy', 'sem', 'crs', 'crcnt', 'subcnt', 'sub', 'cnteryr', 'yrlvl', 'yrcrs', 'yrsub', 'ids'));
    }

    public function addsub(Request $rq){
        $subject = $rq->sub;
        $course = $rq->course;
        $sys = Course::where('course', '=', $course)->pluck('schoolyear');
        //$sem = SemesterCollege::where('schoolyear', '=', $sys)->where('status', '=', 1)->pluck('sem');

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

 $cnteryr = yearlevel::where('status', '=', 1)->count();
        $yrlvl = yearlevel::where('status', '=', 1)->pluck('yearlevel');
        $yrcrs = yearlevel::where('status', '=', 1)->pluck('course');
        $yrsub = yearlevel::where('status', '=', 1)->pluck('subject');

        $ids = yearlevel::where('status', '=', 1)->pluck('id');
        return view('deandash', compact('syc', 'sy', 'sem', 'crs', 'crcnt', 'subcnt', 'sub', 'cnteryr', 'yrlvl', 'yrcrs', 'yrsub', 'ids'));

    }

    public function yrlvl(Request $rq){
        $subj = $rq->subject;
        $yrlvl = $rq->yrlevel;

        $course = Subjects::where('Subject','=', $subj)->pluck('course');
        yearlevel::create([
            'yearlevel' => $yrlvl,
            'course' => $course[0],
            'subject' => $subj,
            'status' => 1,
        ]);

        adminlogs::create([
            'userid' => Auth::user()->id,
            'action' => Auth::user()->name." added Subject: ". $subj[0]. " for Year: ". $yrlvl,
        ]);


        $syc = SemesterCollege::where('status', '=', 1)->count();
        $sy = SemesterCollege::where('status', '=', 1)->pluck('schoolyear');
        $sem = SemesterCollege::where('status', '=', 1)->pluck('sem');

        $crs = Course::where('status', '=', 1)->pluck('course');
        $crcnt = Course::where('status', '=', 1)->count();

        $sub = Subjects::where('status', '=', 1)->pluck('subject');
        $subcnt = Subjects::where('status', '=', 1)->count();

        $cnteryr = yearlevel::where('status', '=', 1)->count();
        $yrlvl = yearlevel::where('status', '=', 1)->pluck('yearlevel');
        $yrcrs = yearlevel::where('status', '=', 1)->pluck('course');
        $yrsub = yearlevel::where('status', '=', 1)->pluck('subject');

        $ids = yearlevel::where('status', '=', 1)->pluck('id');
        return view('deandash', compact('syc', 'sy', 'sem', 'crs', 'crcnt', 'subcnt', 'sub', 'cnteryr', 'yrlvl', 'yrcrs', 'yrsub', 'ids'));

    }

    public function deletesub(Request $rq){
        $id = $rq->id;
        $subj = yearlevel::where('id', '=', $id)->pluck('subject');

        yearlevel::where('id', '=', $id)->delete();
        
        adminlogs::create([
            'userid' => Auth::user()->id,
            'action' => Auth::user()->name." Deleted: ". $subj,
        ]);

        $syc = SemesterCollege::where('status', '=', 1)->count();
        $sy = SemesterCollege::where('status', '=', 1)->pluck('schoolyear');
        $sem = SemesterCollege::where('status', '=', 1)->pluck('sem');

        $crs = Course::where('status', '=', 1)->pluck('course');
        $crcnt = Course::where('status', '=', 1)->count();

        $sub = Subjects::where('status', '=', 1)->pluck('subject');
        $subcnt = Subjects::where('status', '=', 1)->count();

        $cnteryr = yearlevel::where('status', '=', 1)->count();
        $yrlvl = yearlevel::where('status', '=', 1)->pluck('yearlevel');
        $yrcrs = yearlevel::where('status', '=', 1)->pluck('course');
        $yrsub = yearlevel::where('status', '=', 1)->pluck('subject');

        //dd($crcnt);
        $ids = yearlevel::where('status', '=', 1)->pluck('id');
        return view('deandash', compact('syc', 'sy', 'sem', 'crs', 'crcnt', 'subcnt', 'sub', 'cnteryr', 'yrlvl', 'yrcrs', 'yrsub', 'ids'));
    }

    public function coursesdean(Request $rq){
      
        $crs = Course::where('status', '=', 1)->pluck('course');
        $crcnt = Course::where('status', '=', 1)->count();

        $ids = Course::where('status', '=', 1)->pluck('id');
        $crsid = Course::where('status', '=', 1)->pluck('id');
        return view('courses_dean', compact('crs', 'crcnt', 'ids', 'crsid'));
    }

    public function deletecourse(Request $rq){
        $id = $rq->id;
        $course = Course::where('id', '=', $id)->pluck('course');

        Course::where('id', '=', $id)->delete();
        
        adminlogs::create([
            'userid' => Auth::user()->id,
            'action' => Auth::user()->name." Deleted: ". $course,
        ]);

        $crs = Course::where('status', '=', 1)->pluck('course');
        $crcnt = Course::where('status', '=', 1)->count();

        $ids = Course::where('status', '=', 1)->pluck('id');
        return view('courses_dean', compact('crs', 'crcnt', 'ids'));
    }

    public function editcourse(Request $rq){
        $id = $rq->id;
        $dean = Auth::user()->name;
        $course = Course::where('id', '=', $id)->pluck('course');
        
        adminlogs::create([
            'userid' => Auth::user()->id,
            'action' => Auth::user()->name." edited: ". $course,
        ]);

        $syc = SemesterCollege::where('status', '=', 1)->count();
        $sy = SemesterCollege::where('status', '=', 1)->pluck('schoolyear');
        $sem = SemesterCollege::where('status', '=', 1)->pluck('sem');

        $crs = Course::where('status', '=', 1)->pluck('course');
        $crcnt = Course::where('status', '=', 1)->count();

        $sub = Subjects::where('status', '=', 1)->pluck('subject');
        $subcnt = Subjects::where('status', '=', 1)->count();

        $cnteryr = yearlevel::where('status', '=', 1)->count();
        $yrlvl = yearlevel::where('status', '=', 1)->pluck('yearlevel');
        $yrcrs = yearlevel::where('status', '=', 1)->pluck('course');
        $yrsub = yearlevel::where('status', '=', 1)->pluck('subject');

        //dd($crcnt);
        $ids = yearlevel::where('status', '=', 1)->pluck('id');
        $crsid = Course::where('status', '=', 1)->pluck('id');
        return view('vieweditcourse', compact('id', 'dean', 'crsid', 'syc', 'sy', 'sem', 'crs', 'crcnt', 'subcnt', 'sub', 'cnteryr', 'yrlvl', 'yrcrs', 'yrsub', 'ids', 'course'));
    }

    public function vieweditsub(Request $rq){
        $id = $rq->id;
        $course = Course::where('id', '=', $id)->pluck('course');

   
        
      

        $syc = SemesterCollege::where('status', '=', 1)->count();
        $sy = SemesterCollege::where('status', '=', 1)->pluck('schoolyear');
        $sem = SemesterCollege::where('status', '=', 1)->pluck('sem');

        $crs = Course::where('status', '=', 1)->pluck('course');
        $crcnt = Course::where('status', '=', 1)->count();

        $sub = Subjects::where('status', '=', 1)->pluck('subject');
        $subcnt = Subjects::where('status', '=', 1)->count();

        $cnteryr = yearlevel::where('status', '=', 1)->count();
        $yrlvl = yearlevel::where('status', '=', 1)->pluck('yearlevel');
        $yrcrs = yearlevel::where('status', '=', 1)->pluck('course');
        $yrsub = yearlevel::where('id', '=', $id)->pluck('subject');

        //dd($crcnt);
        $ids = yearlevel::where('status', '=', 1)->pluck('id');
        return view('editsub', compact('syc', 'sy', 'sem', 'crs', 'crcnt', 'subcnt', 'sub', 'cnteryr', 'yrlvl', 'yrcrs', 'yrsub', 'ids'));
    }

    public function editsub(Request $rq){
        $sub = $rq->sub;
        $course = $rq->course;
        $yrlevel = $rq->yrlevel;
        $idss = (int)$rq->idss;

        yearlevel::where('id', '=', $idss)->update([
            'yearlevel' => $yrlevel,
            'course' => $course,
            'subject' => $sub,
            'status' => 1,
        ]);
        
        adminlogs::create([
            'userid' => Auth::user()->id,
            'action' => Auth::user()->name." edited: ". $sub,
        ]);

        $syc = SemesterCollege::where('status', '=', 1)->count();
        $sy = SemesterCollege::where('status', '=', 1)->pluck('schoolyear');
        $sem = SemesterCollege::where('status', '=', 1)->pluck('sem');

        $crs = Course::where('status', '=', 1)->pluck('course');
        $crcnt = Course::where('status', '=', 1)->count();
        $crsid = Course::where('status', '=', 1)->pluck('id');

        $sub = Subjects::where('status', '=', 1)->pluck('subject');
        $subcnt = Subjects::where('status', '=', 1)->count();

        $cnteryr = yearlevel::where('status', '=', 1)->count();
        $yrlvl = yearlevel::where('status', '=', 1)->pluck('yearlevel');
        $yrcrs = yearlevel::where('status', '=', 1)->pluck('course');
        $yrsub = yearlevel::where('status', '=', 1)->pluck('subject');

        $ids = yearlevel::where('status', '=', 1)->pluck('id');
        return view('deandash', compact('syc', 'sy', 'sem', 'crs', 'crcnt', 'crsid', 'subcnt', 'sub', 'cnteryr', 'yrlvl', 'yrcrs', 'yrsub', 'ids'));

    }


    public function editcourses(Request $rq){
        $course = $rq->course;
        $sy = $rq->sy;
        $idss = (int)$rq->idss;

        Course::where('id', '=', $idss)->update([
            'schoolyear' => $sy,
        'course' => $course,
        ]);
        
        adminlogs::create([
            'userid' => Auth::user()->id,
            'action' => Auth::user()->name." edited: ". $course,
        ]);

        $syc = SemesterCollege::where('status', '=', 1)->count();
        $sy = SemesterCollege::where('status', '=', 1)->pluck('schoolyear');
        $sem = SemesterCollege::where('status', '=', 1)->pluck('sem');

        $crs = Course::where('status', '=', 1)->pluck('course');
        $crcnt = Course::where('status', '=', 1)->count();

        $sub = Subjects::where('status', '=', 1)->pluck('subject');
        $subcnt = Subjects::where('status', '=', 1)->count();

        $cnteryr = yearlevel::where('status', '=', 1)->count();
        $yrlvl = yearlevel::where('status', '=', 1)->pluck('yearlevel');
        $yrcrs = yearlevel::where('status', '=', 1)->pluck('course');
        $yrsub = yearlevel::where('status', '=', 1)->pluck('subject');

        $ids = yearlevel::where('status', '=', 1)->pluck('id');
        return view('deandash', compact('syc', 'sy', 'sem', 'crs', 'crcnt', 'subcnt', 'sub', 'cnteryr', 'yrlvl', 'yrcrs', 'yrsub', 'ids'));

    }

    public function deanlogs(Request $rq){
        $logcount = adminlogs::where('userid', '=', Auth::user()->id)->count();
        $logs = adminlogs::where('userid', '=', Auth::user()->id)->orderBy('id', 'DESC')->pluck('action');
        $logdt = adminlogs::where('userid', '=', Auth::user()->id)->orderBy('id', 'DESC')->pluck('created_at');
        //dd($logcount);
        return view('deanlogs', compact('logcount', 'logs', 'logdt'));
    }
}
