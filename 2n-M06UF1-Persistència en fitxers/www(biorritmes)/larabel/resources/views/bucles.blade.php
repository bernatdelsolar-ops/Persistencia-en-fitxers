@section('content')
<h3>Aixo es la seccio content</h3>
<hr />
<h3>ForEach</h3>

@foreach($dies as $dia)
<h3> El dia es: {{$dia}}</h3>
@endforeach

<hr />
<h3>For</h3>

@for($i = 0; $i=count($dies)-1;$i++)
    <h3>El dia es: {{$dies[$i]}}</h3>

@endfor

<hr />