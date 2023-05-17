<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Teachers;


class checkuser extends Controller
{
    public function index (Request $req){
    $user = Auth::user();
    $stat = Auth::user()->status;

    if($stat == 1){
    if(strcmp(Auth::user()->role, "Administrator") == 0){
                    return redirect()->intended('admindash');
    }

    elseif(strcmp(Auth::user()->role, "Dean") == 0){
         return redirect()->intended('deandash');
    }

    elseif(strcmp(Auth::user()->role, "Cashier") == 0){
        return redirect()->intended('cashdash');
   }

   elseif(strcmp(Auth::user()->role, "Teacher") == 0){
        return redirect()->intended('cashdash');
   }

    else {
        return redirect()->intended('registdash');
    }
}
else {
    return view('block', compact('stat'));
}

}
}
