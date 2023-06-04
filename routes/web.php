<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotesController;
use App\Http\Controllers\NotesActionController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\Auth\LoginController;
use App\Models\Note;
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



Route::group([ 	'prefix' => LaravelLocalization::setLocale(), 	'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ] ], function()
{

Route::get('/', [MainController::class, 'main']);

Auth::routes();

Route::get('/dashboard', [NotesController::class, 'getall'])->middleware('auth');

Route::get('edit/{id}', [NotesActionController::class, 'edit'])->middleware('auth');

Route::post('update/{id}', [NotesActionController::class , 'update'])->name('update')->middleware('auth');


Route::get('add', function(){
return view('add');
})->name('add')->middleware('auth');


Route::post('new', [NotesActionController::class , 'add'])->name('new')->middleware('auth');

Route::post('delete', [NotesActionController::class, 'delete'])->name('delete')->middleware('auth');

Route::get('note/{id}', [NotesActionController::class , 'show'])->name('note');

Route::post('test', [LoginController::class, 'authenticate'])->name("test");

});



