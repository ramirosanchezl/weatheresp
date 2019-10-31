@extends('layouts.app')

@section('content')

<h3 class = "center">Radar</h3>



<iframe width="1260" height="1100" src="https://embed.windy.com/embed2.html?lat=-34.556&lon=-58.487&zoom=11&level=surface&overlay=radar&menu=&message=true&marker=&calendar=&pressure=&type=map&location=coordinates&detail=&detailLat=-34.524&detailLon=-58.482&metricWind=km%2Fh&metricTemp=%C2%B0C&radarRange=-1" frameborder="0"></iframe>

@endsection