<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

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

Route::get('/welcome', function () {
    return view('welcome');
})->middleware(['auth'])->name('welcome');

require __DIR__ . '/auth.php';




Route::get('/home', function () {
    return view('home');
});
Route::view('/check', 'check', ["name" => "Anand", 'lastname' => 'shukla']);


Route::resource('/posts', PostController::class)->middleware('auth');
Route::get('/userpage/{id}', [UserController::class, 'user'])->middleware('auth');;
