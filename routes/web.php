<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\View;
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

Route::middleware(['auth:sanctum', 'verified'])->prefix('administrador')->group( function () {

    Route::get('/logout', [LoginController::class, 'logout']);

    Route::get('/', function ()
    {
        return view('admin.home')->with('page', 'home');
    });

    Route::get('/{pagina}', function ($pagina) {
        return view("admin.$pagina")->with('page', $pagina);
    });
});


// Route::prefix('noticias')->group(function(){

//     Route::get('/', [NewsController::class, 'home']);

//     Route::get('/{name}/{id}', [NewsController::class, 'ver']);

// });

Route::resource('message', MessageController::class)->only('store');

Route::get('/{resource}', function ($resource)
{
    if(View::exists("pages.$resource")){
        return view("pages.$resource");
    }else{
        return view("pages.$resource.index");
    }
});


Route::get('/{folder}/{resource}', function ($folder, $resource)
{
    if( View::exists("pages.$folder.$resource") ){
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
