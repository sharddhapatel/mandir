<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\client\homecontroller;
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

// Route::get('/', function () {
//     return view('welcome');
// });
route::get('/',[homecontroller::class,'index']);
route::get('image',[homecontroller::class,'img']);
route::post('insertimage',[homecontroller::class,'insertimg']);
