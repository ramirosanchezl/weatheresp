<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Station;
use App\Measurement;
use Carbon\Carbon;
use DB;

class HomeController extends Controller
{



    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id = 1){
        $max = Measurement::where('id_est', $id)->max('temperature');
        $min = Measurement::where('id_est', $id)->min('temperature');
        $measurements = Measurement::where('id_est', $id)->orderBy('created_at', 'desc')->first();
        $station = Station::where('id', $id)->first();
        $stations = Station::all();
        return view('home',compact('measurements','max','min','station','stations'))->with('i');
    }   
}