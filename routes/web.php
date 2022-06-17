<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;

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
    return view('pages.inicial');
});

Auth::routes();
Route::resource('message', MessageController::class)->only('store');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/{resource}', function ($resource)
{
    if(file_exists("/resources/views/pages/$resource.blade.php")){
        return view("pages.$resource");
    }else{
        return view("pages.$resource.index");
    }
});


Route::get('/{folder}/{resource}', function ($folder, $resource)
{
    if(file_exists("/resources/views/pages/$folder/$resource.blade.php")){
        return view("pages.$folder.$resource");
    }else{
        return view("pages.$folder.$resource.index");
    }
});



Route::get('/{group}/{folder}/{resource}', function ($group, $folder, $resource)
{
    // if(file_exists("/resources/views/pages/$group/$folder/$resource.blade.php")){
        return view("pages.$group.$folder.$resource");
    // }else{
    //     return view("pages.$group.$folder.$resource.index");
    // }
});
