<?php

use Illuminate\Support\Facades\Route;

Route::get('/boom',[MencobaController::class, 'boomesport']);
Route::get('/prx',[MencobaController::class, 'prxsport']);
Route::get('/fnatic',[MencobaController::class, 'fnaticesport']);
Route::get('/fpx',[MencobaController::class, 'fpxesport']);
Route::get('/',[MencobaController::class, 'beranda']);


Route::get('/boom',[MencobaController::class,'boomesport']);

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

// Route::get('/halamanUtama', function () {
//     return view('halamanUtama',[
//         "name" => "Afra",
//         "email" => "afra@gmail.com"
//         ]);
// });