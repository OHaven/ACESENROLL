<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\checkuser;
use App\Http\Controllers\admindash;
use App\Http\Controllers\registdash;
use App\Http\Controllers\deandash;
use App\Http\Controllers\studentdash;
use App\Http\Controllers\cashierdash;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect() -> intended('login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

   //dashboard redirection
    Route::get('dashboard', function () {
        return redirect() -> intended('usertype');
    })->name('dashboard');

    Route::get('usertype',  [checkuser::class, 'index']);

    Route::get('admindash', function () {
             return redirect() -> intended('dashad');
    })->name('admindash');




    //admin
    Route::get('dashad',  [admindash::class, 'dashboard']);
    Route::get('approve',  [admindash::class, 'approve']);
    Route::get('reject',  [admindash::class, 'reject']);
    Route::get('staff', [admindash::class, 'staff']);
    Route::get('revoke', [admindash::class, 'revoke']);
    Route::get('staffv', [admindash::class, 'staffview']);
    Route::get('logs', [admindash::class, 'logs']);

    //registrar
    Route::get('registdash',  [registdash::class, 'dashboard']);
    Route::get('enroll',  [registdash::class, 'enroll']);
    Route::post('addsem',  [registdash::class, 'addsem']);
    Route::get('registlogs',  [registdash::class, 'rgislogs']);
    Route::post('addsy',  [registdash::class, 'addsy']);
    Route::get('stnd',  [registdash::class, 'stnd']);
    Route::get('viewstu',  [registdash::class, 'viewstu']);
    Route::get('old',  [registdash::class, 'old']);
    Route::get('new',  [registdash::class, 'new']);
    Route::get('viewenroll',  [registdash::class, 'viewenroll']);
    Route::post('addsubjectsstu',  [registdash::class, 'addsubjectsstu']);
    Route::get('tocash',  [registdash::class, 'tocash']);
    
    
    //dean
    Route::get('deandash',  [deandash::class, 'dashboard']);
    Route::post('addcourse',  [deandash::class, 'addcourse']);
    Route::post('addsub',  [deandash::class, 'addsub']);
    Route::post('yrlvl',  [deandash::class, 'yrlvl']);
    Route::get('deletesub',  [deandash::class, 'deletesub']);
    Route::get('coursesdean',  [deandash::class, 'coursesdean']);
    Route::get('deletecourse',  [deandash::class, 'deletecourse']);   
    Route::get('editcourse',  [deandash::class, 'editcourse']); 
    Route::get('vieweditsub',  [deandash::class, 'vieweditsub']); 
    Route::post('editsub',  [deandash::class, 'editsub']); 
    Route::post('editcourses',  [deandash::class, 'editcourses']); 
    Route::get('deanlogs',  [deandash::class, 'deanlogs']);


    //student
    Route::get('studentdash',  [studentdash::class, 'studentdash']);
    Route::post('addinfo',  [studentdash::class, 'addinfo']);
    Route::post('upclear', [studentdash::class, 'upclear']);
    Route::post('enrollapp', [studentdash::class, 'enrollapp']);

    //cashier
    Route::get('cashdash',  [cashierdash::class, 'dashboard']);
    
    Route::get('logout', function () {
        Auth::guard('web')->logout();
        return redirect()->intended('/');
    });

});
