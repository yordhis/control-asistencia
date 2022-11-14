<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\Authenticate;
use App\Http\Middleware\EmailVerifiedAt;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\EnsureTokenIsValid;
use App\Http\Middleware\RedirectIfAuthenticated;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Mockery\Undefined;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('login.store');
Route::get('/out', [LoginController::class, 'delete'])->name('login.out');

Route::get('/verifyEmail', function (){
    $user = Auth::user();
    if ($user->name !== null){
        return view('verifyEmail', compact('user'));
    }else{
        redirect('/login');
    }
})->name('verify.email');


Route::get('/confirmationEmail/{id}',  [ProfileController::class, 'confirmationEmail'])->middleware('auth');


// Route::middleware(['auth'])->group(function (){

    Route::middleware([EmailVerifiedAt::class])->group(function (){
        Cookie::forget('origen_sesion');
        Route::resource('/dashboard', ProfileController::class)->names('profile.dashboard');


    });
// });