<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/index', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::post('/index', function() {
    return view('index');
});

Route::post('/confirm', function() {
    $name = Request::input('name');
    $comment = Request::input('comment');
    return view('confirm', compact('name', 'comment'));
});

Route::post('/finish', function() {
    $name = Request::input('name');
    $comment = Request::input('comment');
    DB::table('profiles')->insert(
        [
            'name' => $name,
            'comment' => $comment,
            'created_at' => now(),
            'updated_at' => now(),
        ]
    );
    return view('finish');
});