<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Redis;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     */
    public function __construct()
    {
        //
    }

    //

    public function index()
    {
        $redis = new Redis();
        $redis->connect('127.0.0.1', 6379);
//        abort(404, '就是没找到，你能怎么地');
        return '1';
    }
}
