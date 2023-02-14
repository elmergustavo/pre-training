<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class RedisController extends Controller
{
    //
    public function index() {
    
        Redis::set('elmergustavo79@gmail.com', 'KARLA');
        Redis::set('gustavodev@gmail.com', 'DOMINGO');
        Redis::set('elizabet@gmail.com', 'elmergustavo79@gmail.com');

        for ($i=0; $i <4; $i++) {
            echo Redis::get('user:'. $i .':first_name');
        }
    }
}
