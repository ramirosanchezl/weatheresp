<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Datatables;
use App\Station;
use App\Measurement;

class HistoricController extends Controller
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
    public function index($id = 1)
    {
        $measurements = Measurement::where('id_est', $id)->orderBy('created_at', 'desc')
                ->get();
        $station = Station::where('id', $id)->first();
        $stations = Station::all();
        return view('historic', compact('measurements','station', 'stations'))->with('i');;
                  
    }

}
