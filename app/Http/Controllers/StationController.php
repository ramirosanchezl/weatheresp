<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Station;


class StationController extends Controller
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
       $stations = Station::latest()->paginate(5);
        return view('station.index', compact('stations'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view('station.create');
    }
    


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
          'name' => 'required',
          'latitude_pos' => 'required',
          'longitude_pos' => 'required',
          'forecast' => 'required',
          'forecast_id' => 'required',
          'location' => 'required',
          'winds' => 'required'

        ]);
        Station::create($request->all());
        return redirect()->route('station.index')
                        ->with('success', 'Nueva Estacion creada');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $station = Station::find($id);
        return view('station.detail', compact('station'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $station = Station::find($id);
        return view('station.edit', compact('station'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
        'name' => 'required',
        'latitude_pos' => 'required',
        'longitude_pos' => 'required',
        'forecast' => 'required',
        'forecast_id' => 'required',
        'location' => 'required',
        'winds' => 'required'
      ]);
      $station = Station::find($id);
      $station->name = $request->get('name');
      $station->latitude_pos = $request->get('latitude_pos');
      $station->longitude_pos = $request->get('longitude_pos');
      $station->forecast = $request->get('forecast');
      $station->forecast_id = $request->get('forecast_id');
      $station->location = $request->get('location');
      $station->winds = $request->get('winds');
      $station->save();
      return redirect()->route('station.index')
                      ->with('success', 'Estacion actualizada correctamente');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $station = Station::find($id);
        $station->delete();
        return redirect()->route('station.index')
                        ->with('success', 'Estacion eliminada correctamente');
    }
}