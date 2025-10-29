

@section('header')
<h1> {{$titol ?? 'Sense titol'}} </h1>
<h3> Aixo es la seccio header </h3>
<hr />

@endsection
{{--Aixo es un comentari}}

@section('content')
<h3>Aixo es la seccio content</h3>
<hr />


@if ($valor >= 5)
<h4> El Valor {{$valor}} es mes gran o igual a 5 </h4>
 @endif

@endsection

@if (count($arr)>1)

<h4> L'array 'arr' conte {{count($arr)}} elements </h4>

@else

<h4> No s'ha enviat cap valor a l'array </h4>

@endif

@endsection

@section('footer')
<h3> Aixo es la seccio footer </h3>