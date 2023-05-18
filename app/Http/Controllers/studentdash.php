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
use App\Models\clearance;
use App\Models\studentenroll;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class studentdash extends Controller
{
    public function studentdash(Request $rq){
        $count = StudentInfo::where('name', '=', Auth::user()->name)->count();
        $clcnt = clearance::where('userid', '=', Auth::user()->id)->where('status', '=', 1)->count();
        $encnt = studentenroll::where('student_id', '=', Auth::user()->id)->where('status', '=', 0)->count();
       
    
        if($count == 0){ 
            $name = Auth::user()->name;
            return view('studentinfo', compact('name'));
        }
        else {
            if($encnt == 0){
            if($clcnt == 0){
            $syc = SemesterCollege::where('status', '=', 1)->count();
            $sy = SemesterCollege::where('status', '=', 1)->pluck('schoolyear');
            $sem = SemesterCollege::where('status', '=', 1)->pluck('sem');

            $crs = Course::where('status', '=', 1)->pluck('course');
            $crcnt = Course::where('status', '=', 1)->count();    
            $status = StudentInfo::where('name', '=', Auth::user()->name)->pluck('status');
            return view('studentdash', compact('status', 'clcnt', 'crcnt', 'syc', 'sy', 'sem', 'crs', 'encnt'));
            }
            else{
                
                $syc = SemesterCollege::where('status', '=', 1)->count();
                $sy = SemesterCollege::where('status', '=', 1)->pluck('schoolyear');
                $sem = SemesterCollege::where('status', '=', 1)->pluck('sem');
        
                $crs = Course::where('status', '=', 1)->pluck('course');
                $crcnt = Course::where('status', '=', 1)->count();
                $status = StudentInfo::where('name', '=', Auth::user()->name)->pluck('status');
                return view('studentdash', compact('status', 'clcnt', 'crcnt', 'syc', 'sy', 'sem', 'crs', 'encnt'));
            }
        }
        else {
            $status = StudentInfo::where('name', '=', Auth::user()->name)->pluck('status');
            $id = Auth::user()->id;
            return view('studentdash', compact('status', 'clcnt', 'encnt', 'id'));
        }
    }
    }

    public function addinfo(Request $rq){
        $name = $rq->name;
        $age = $rq->age;
        $bdate = $rq->birthdate;
        $gender = $rq->gend;
        $cv = $rq->cv;
        $cname= $rq->cnum;

    //    / dd($rq->cname);
        
        StudentInfo::where('name', '=', $name)->update([
            'name' => $name,
            'age' => $age,
            'birthdate' => $bdate,
            'gender' => $gender,
            'civilstatus' => $cv,
            'contactno' => $cname,
            'status' => 2,
        ]);   

        $causename = User::where('id', '=', Auth::user()->id)->pluck('name');

        adminlogs::create([
            'userid' => Auth::user()->id,
            'action' => $causename[0]." submitted a Personal Information Form",
        ]);
        


    }

    public function upclear(Request $rq){
        $rq->validate([
            'file' => 'required|mimes:png,gif,jpeg,jpg,pdf|max:2048'
            ]);
            $fileModel = new clearance;
            if($rq->file()) {
                clearance::where('userid', '=', Auth::user()->id)->update([
                    'status' => 0,
                ]);
                $fileName = time().'_'.$rq->file->getClientOriginalName();
                $filePath = $rq->file('file')->storeAs('uploads', $fileName, 'public');
                $fileModel->userid = Auth::user()->id;
                $fileModel->filename = time().'_'.$rq->file->getClientOriginalName();
                $fileModel->file_path = '/storage/' . $filePath;
                $fileModel->status = 1;

             
                $fileModel->save();
                return back()
                ->with('success','File has been uploaded.')
                ->with('file', $fileName);
            }
    }

    public function enrollapp(Request $rq){
        $course = $rq->cs;
        $sy = $rq->sy;
        $yrlevel = $rq->yrlevel;
        studentenroll::create([
            'student_id'  => Auth::user()->id,
            'course'  => $course,
            'schoolyear'  => $sy,
            'yearlevel'  => $yrlevel,
            'status' => 0,
        ]);
        return back();
    }

    public function pay(Request $rq){
        toapprovecash::where('student_id' == $rq->id)->update([
            'status' => 1,
        ]);
        return Redirect::to('https://pm.link/org-aces/test/u3zXoGJ');
    }
}
