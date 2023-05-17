<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\checkuser;
use App\Http\Controllers\admindash;
use App\Http\Controllers\registdash;

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

    Route::get('logout', function () {
        Auth::guard('web')->logout();
        return redirect()->intended('/');
    });

});
