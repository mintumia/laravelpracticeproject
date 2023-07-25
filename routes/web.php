<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MintuController;
use App\Http\Controllers\PostController;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::get('testcomp',[MintuController::class,'index'])->name('testcomp');
Route::post('testcomp',[MintuController::class,'store'])->name('testcomp');

Route::resource("posts",PostController::class);
/*GET|HEAD        postcontrollers ...postcontrollers.index › PostController@index
  POST            postcontrollers ...postcontrollers.store › PostController@store
  GET|HEAD        postcontrollers/create ... postcontrollers.create › PostController@create
  GET|HEAD        postcontrollers/{postcontroller} ... postcontrollers.show › PostController@show
  PUT|PATCH       postcontrollers/{postcontroller} ... postcontrollers.update › PostController@update
  DELETE          postcontrollers/{postcontroller} ... postcontrollers.destroy › PostController@destroy
  GET|HEAD        postcontrollers/{postcontroller}/edit ... postcontrollers.edit › PostController@edit*/
