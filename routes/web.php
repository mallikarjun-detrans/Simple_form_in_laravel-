<?php

use App\Http\Controllers\Indexcontroller;
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
    return view('welcome');
});

Route::get('/displaydata', function () {
    return view('form');
});

Route::post('/insertdata', [Indexcontroller::class ,'adddata'])->name('add');

Route::get('/result', [Indexcontroller::class, 'adddata']);


