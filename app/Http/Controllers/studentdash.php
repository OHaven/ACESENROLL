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
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class studentdash extends Controller
{
    public function studentdash(Request $rq){
        $count = StudentInfo::where('name', '=', Auth::user()->name)->count();
        $clcnt = clearance::where('userid', '=', Auth::user()->id)->where('status', '=', 1)->count();
        if($count == 0){ 
            $name = Auth::user()->name;
            
            dd($name);
            return view('studentinfo', compact('name'));
        }
        else {

            if($clcnt == 0){
          
            $status = StudentInfo::where('name', '=', Auth::user()->name)->pluck('status');
            return view('studentdash', compact('status', 'clcnt'));
            }
            else{
               
                $status = StudentInfo::where('name', '=', Auth::user()->name)->pluck('status');
                return view('studentdash', compact('status', 'clcnt'));  
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
        
        StudentInfo::create([
            'name' => $name,
            'age' => $age,
            'birthdate' => $bdate,
            'gender' => $gender,
            'civilstatus' => $cv,
            'contactno' => $cname,
            'status' => 0,
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
}
