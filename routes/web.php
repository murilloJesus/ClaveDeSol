<?php

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
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/{resource}', function ($resource)
{
    return view("pages.$resource");
});


Route::get('/{folder}/{resource}', function ($folder, $resource)
{
    return view("pages.$folder.$resource");
});



Route::get('/{group}/{folder}/{resource}', function ($group, $folder, $resource)
{
    return view("pages.$group.$folder.$resource");
});
