<?php

use App\Http\Controllers\RedisController;
use Illuminate\Support\Facades\Route;
use App\Jobs\sendEmail;

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
    //envio en segundo plano para determinar los cambios 
   // sendEmail::dispatch();
    sendEmail::dispatchAfterResponse(); // 
    return response("\nfin");
});

Route::get('/main', function () {
    return view('main');
});

Route::get('/redis', [RedisController::class, 'index']);
