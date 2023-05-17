<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\adminlogs;
use Spatie\Activitylog\Models\Activity;

class admindash extends Controller
{
    public function dashboard(Request $rq){
        $name = User::where('status', '=', 0)->where('role', '!=', "Student")->pluck('name');
        $ucount = User::where('status', '=', 0)->where('role', '!=', "Student")->count();
        $role = User::where('status', '=', 0)->where('role', '!=', "Student")->pluck('role');
        $id = User::where('status', '=', 0)->where('role', '!=', "Student")->pluck('id');
        $status = User::where('status', '=', 0)->where('role', '!=', "Student")->pluck('status');
        return view('admindash', compact('name', 'ucount', 'role', 'id', 'status'));
    }

    public function approve(Request $rq){
        $id = $rq->id;
        User::where('id', '=', $id)->update([
            'status' => 1,
        ]);
        $names = User::where('id', '=', $id)->pluck('name');
        $causename = User::where('id', '=', Auth::user()->id)->pluck('name');

        adminlogs::create([
            'userid' => Auth::user()->id,
            'action' => $causename[0]." approved ". $names[0] . "'s account.",
        ]);

        $name = User::where('status', '=', 0)->where('role', '!=', "Student")->pluck('name');
        $ucount = User::where('status', '=', 0)->where('role', '!=', "Student")->count();
        $role = User::where('status', '=', 0)->where('role', '!=', "Student")->pluck('role');
        $id = User::where('status', '=', 0)->where('role', '!=', "Student")->pluck('id');
        $status = User::where('status', '=', 0)->where('role', '!=', "Student")->pluck('status');
        return view('admindash', compact('name', 'ucount', 'role', 'id', 'status'));
    }

    public function reject(Request $rq){
        $id = $rq->id;
        User::where('id', '=', $id)->update([
            'status' => 2,
        ]);
        $names = User::where('id', '=', $id)->pluck('name');
        $causename = User::where('id', '=', Auth::user()->id)->pluck('name');

        adminlogs::create([
            'userid' => Auth::user()->id,
            'action' => $causename[0]." rejected ". $names[0] . "'s account.",
        ]);

        $name = User::where('status', '=', 0)->where('role', '!=', "Student")->pluck('name');
        $ucount = User::where('status', '=', 0)->where('role', '!=', "Student")->count();
        $role = User::where('status', '=', 0)->where('role', '!=', "Student")->pluck('role');
        $id = User::where('status', '=', 0)->where('role', '!=', "Student")->pluck('id');
        $status = User::where('status', '=', 0)->where('role', '!=', "Student")->pluck('status');
        return view('admindash', compact('name', 'ucount', 'role', 'id', 'status'));
    }

    public function staff(Request $rq){
        $name = User::where('status', '=', 1)->where('role', '!=', "Student")->pluck('name');
        $ucount = User::where('status', '=', 1)->where('role', '!=', "Student")->count();
        $role = User::where('status', '=', 1)->where('role', '!=', "Student")->pluck('role');
        $id = User::where('status', '=', 1)->where('role', '!=', "Student")->pluck('id');
        $status = User::where('status', '=', 1)->where('role', '!=', "Student")->pluck('status');
        return view('staff', compact('name', 'ucount', 'role', 'id', 'status'));
    }

    public function logs(Request $rq){
        $logcount = adminlogs::count();
        $logs = adminlogs::orderBy('id', 'DESC')->pluck('action');
        $logdt = adminlogs::orderBy('id', 'DESC')->pluck('created_at');

        return view('logs', compact('logcount', 'logs', 'logdt'));
    }

    public function revoke(Request $rq){
        $name = User::where('status', '=', 1)->where('role', '!=', "Student")->pluck('name');
        $ucount = User::where('status', '=', 1)->where('role', '!=', "Student")->count();
        $role = User::where('status', '=', 1)->where('role', '!=', "Student")->pluck('role');
        $id = User::where('status', '=', 1)->where('role', '!=', "Student")->pluck('id');
        $status = User::where('status', '=', 1)->where('role', '!=', "Student")->pluck('status');
        $ids = $rq->id;
        $names = User::where('id', '=', $ids)->pluck('name');
        $causename = User::where('id', '=', Auth::user()->id)->pluck('name');

        User::where('id', '=', $ids)->update([
            'status' => 2,
        ]);
        adminlogs::create([
            'userid' => Auth::user()->id,
            'action' => $causename[0]." revoked ". $names[0] . "'s account.",
        ]);


        return view('staff', compact('name', 'ucount', 'role', 'id', 'status'));
    }

    public function staffview(Request $rq){
        $name = User::where('id', '=', $rq->id)->pluck('name');
        $email = User::where('id', '=', $rq->id)->pluck('email');
        $role = User::where('id', '=', $rq->id)->pluck('role');
        $pfp = User::where('id', '=', $rq->id)->pluck('profile_photo_path');

        return view('staffview', compact('name', 'email', 'role', 'pfp'));
    }
}
