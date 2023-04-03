<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cont;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('emad/{no}', function ($no) {
//     return view('test',compact('no'));
// });


// Route::get('emad', function () {
//     return view('a1');
// });
Route::get('/',[cont::class,'welc']);
Route::get('/hom',[cont::class,'hom']);
Route::get('/about',[cont::class,'about']);
Route::get('/port',[cont::class,'port']);
