<?php

use Illuminate\Support\Facades\Route;
use App\Data\Tabungan;

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

app()->singleton('test', function(){return new App\Data\Tabungan;});

Route::get('/', function () {
    return dd(app('test'), app('test'));
});
