@extends('layouts.app')

@section('content')

<div>
 	<h3>Temperatura VS Humedad</h3>

	<div class = 'container' id = 'chart1'>
	 	<script type ="text/javascript" src = "https://www.gstatic.com/charts/loader.js"></script>
	    <script type ="text/javascript">
	      	google.charts.load('current', {'packages':['corechart','areachart']});
	 	 	google.charts.setOnLoadCallback(drawVisualization);

	      	function drawVisualization() {
		        // Some raw data (not necessarily accurate)
		        var data = google.visualization.arrayToDataTable([
		          ['Fecha', 'Temperatura', 'Humedad'],
	        	  @foreach($measurements as $measurement)
		          ['{{$measurement->created_at}}',  {{$measurement->temperature}}, {{$measurement->humidity}}],
		          @endforeach
		        ]);

		        var options = {
		          vAxis: {title: 'Temperatura',title: 'Humedad'},
		          hAxis: {title: 'Fecha'},
		          seriesType: 'area',
		          series: {5: {type: 'area'}},
		          width:700,
	              height:600
		        };

		        var chart = new google.visualization.AreaChart(document.getElementById('chart1'));
		        chart.draw(data, options);
		      }
	    </script>	
	</div>
</div>



@endsection