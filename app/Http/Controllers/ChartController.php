<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Measurement;
use DB;

class ChartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $measurements = Measurement::all();
        return view('chart',compact('measurements'));

    }

}
