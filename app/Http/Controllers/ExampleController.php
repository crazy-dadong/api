<?php

namespace App\Http\Controllers;

use Carbon\Carbon;

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
        $now = Carbon::now();
//        abort(404, '就是没找到，你能怎么地');
        return $now;
    }
}
