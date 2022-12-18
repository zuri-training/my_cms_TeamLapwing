<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', HomeController::class)->name('index');
Route::get('/signup', [AuthController::class, 'signup'])->name('signup');
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/loginUser', [AuthController::class, 'loginUser']);


Route::get('step1', [PagesController::class, 'step1'])->name('step1');
Route::get('step2', [PagesController::class, 'step2'])->name('step2');
Route::get('step3', [PagesController::class, 'step3'])->name('step3');
Route::get('step4', [PagesController::class, 'step4'])->name('step4');
Route::get('templates', [PagesController::class, 'templates'])->name('templates');
Route::get('changetemplate', [PagesController::class, 'changetemplate'])->name('changetemplate');
Route::get('dashboard', [PagesController::class, 'dashboard'])->name('dashboard');
Route::get('set', [PagesController::class, 'set'])->name('set');
Route::get('logout', [PagesController::class, 'logout'])->name('logout');


