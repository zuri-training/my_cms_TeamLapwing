<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/index', function () {
//     return view('index');
// });
Route::get('index', HomeController::class)->name('index');
Route::get('/signup', [AuthController::class, 'signup'])->name('signup');
Route::get('login', [AuthController::class, 'login'])->name('login');

/* Test routes*/
Route::get('setup', function () {
    return view('Ready-set-up');
});
Route::get('step3', function () {
    return view('onboarding3');
});
Route::get('step2', function () {
    return view('onboarding2');
});
Route::get('step1', function () {
    return view('onboarding1');
});
Route::get('step4', function () {
    return view('onboarding4');
});
Route::get('templatechange', function () {
    return view('changetemplate');
});
Route::get('templates', function () {
    return view('templates');
});