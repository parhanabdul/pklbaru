<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProvinsiController;
use App\Http\Controllers\KotaController;
use App\Http\Controllers\KecamatanController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('hayu', function () {
    return view('layouts.admin');
});

Route::group(['prefix' =>'admin', 'middleware'=>['auth']],function (){
    Route::get('/',function(){   
        return view('admin.index');
    });
    

    Route::resource('provinsi',ProvinsiController::class);

});

//  kota
Route::group(['prefix' =>'admin', 'middleware'=>['auth']],function (){
    Route::get('/',function(){   
        return view('admin.kota.index');
    });

    Route::resource('kota',KotaController::class);
});
      
//kecamatan
Route::group(['prefix' =>'admin', 'middleware'=>['auth']],function (){
    Route::get('/',function(){   
        return view('admin.kecamatan.index');
    });

    Route::resource('kecamatan',KecamatanController::class);
});