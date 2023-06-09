<?php

use Illuminate\Support\Facades\Auth;
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

//Route::get('/', function () {
//    return "hello";
//});
Route::group(["namespace"=>"App\Http\Controllers\Cafe"], function (){
   Route::get('/cafes', 'IndexController')->name("cafe.index");
   Route::get('/cafes/create', 'CreateController')->name("cafe.create")->middleware("admin");
   Route::post('/cafes', 'StoreController')->name("cafe.store")->middleware("admin");
   Route::get('/cafes/{cafe}', 'ShowController')->name("cafe.show");
   Route::get('/cafes/{cafe}/edit', 'EditController')->name("cafe.edit")->middleware("admin");
   Route::patch('/cafes/{cafe}', 'UpdateController')->name("cafe.update")->middleware("admin");
   Route::delete('/cafes/{cafe}', 'DestroyController')->name("cafe.delete")->middleware("admin");
});

Route::group(["namespace"=>"App\Http\Controllers\Event"], function (){
    Route::get('/events', 'IndexController')->name("event.index")->middleware("contentMaker");
    Route::get('/events/{cafe}/create', 'CreateController')->name("event.create")->middleware("contentMaker");
    Route::post('/events', 'StoreController')->name("event.store")->middleware("contentMaker");
    Route::get('/events/{event}', 'ShowController')->name("event.show");
    Route::get('/events/{event}/edit', 'EditController')->name("event.edit")->middleware("contentMaker");
    Route::patch('/events/{event}', 'UpdateController')->name("event.update")->middleware("contentMaker");
    Route::delete('/events/{event}', 'DestroyController')->name("event.delete")->middleware("contentMaker");

    Route::delete('subscribe/{event}', 'UnSubscribeController')->name("event.unsubscribe")->middleware("auth");
    Route::get('subscribe/{event}', 'SubscribeController')->name("event.subscribe")->middleware("auth");
});
Auth::routes();

Route::get('/auth', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

