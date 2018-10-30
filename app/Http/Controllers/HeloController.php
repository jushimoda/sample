<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
use App\Http\Requests;
use App\Http\Controllers\Controller;
 
class HeloController extends Controller
{
    public function get()
    {
        $date = "2018-03-31";
        $next_month = date('Y-m-01', strtotime(date($date).'-1 month'));

        return view('helo', ['message' => $next_month]);
    }
}
