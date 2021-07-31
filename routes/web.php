<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ShortController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


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


// ==============================================================================================

Route::get('/email/verify', function () {
    return view('verify');
})->middleware(['auth', 'redirect.verified'])->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/short');
})->middleware(['auth', 'signed'])->name('verification.verify');


Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

// ==============================================================================================

Route::get('/register', [AuthController::class, 'register']);
Route::post('/register', [AuthController::class, 'registerPost']);

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginPost']);

Route::get('/short', [ShortController::class, 'short'])->middleware(['auth', 'verified']);
Route::post('/short', [ShortController::class, 'shortPost']);


Route::get('/sendmail', [AuthController::class, 'sendMail']);
Route::post('/sendmail', [AuthController::class, 'sendMailPost']);


Route::get('/', function () {
    return view('welcome');
})->middleware(['auth', 'verified']);


Route::get('/{link:url_custom}', [ShortController::class, 'direct']);
