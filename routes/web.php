<?php

use App\Http\Controllers\RedisController;
use Illuminate\Support\Facades\Route;
use App\Jobs\sendEmail;
use App\Models\User;
use App\Notifications\NotifyUser;
use Illuminate\Support\Facades\Redis;

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
    // sendEmail::dispatchAfterResponse(); // 
    // return response("\nfin");



     User::find(99)->notify(new NotifyUser());
     User::find(20)->notify(new NotifyUser());
     User::find(10)->notify(new NotifyUser());
     User::find(15)->notify(new NotifyUser());
     User::find(25)->notify(new NotifyUser());
  

   

    //   echo  User::find(1);
    return 'Se ha enviado los correos perfectamente';
   
});

Route::get('/main', function () {
    return view('main');
});

Route::get('/redis', [RedisController::class, 'index']);
