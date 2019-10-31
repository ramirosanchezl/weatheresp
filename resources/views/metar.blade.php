@extends('layouts.app')

@section('content')

<h3 class = "center">METAR</h3>


<p>SABE (Aeroparque Metropolitano Jorge Newbery)</p>
<iframe id="mr_gadget_direct" src="http://www.flightutilities.com/mrgadgetdirect.aspx?ic=sabe&la=en-US&iot=0&di=1&re=00:00&se=1&gheight=400&border=empty&width=500&height=400&title=Metar/Taf%20Reader%20%26%20Decoder" frameborder="0" width="610" height="580"></iframe>
@endsection