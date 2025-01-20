@extends('layouts.main')

@section('title', 'Guilherme')

@section('content')


<h1>Titulo</h1>
<img src="/img/banner.jpg" alt="Banner">
@if(10 > 5)
<p>Teste vdd</p>
@endif

<p>{{ $name }}</p>

@foreach ($names as $name)
<p>{{$loop->index}}</p>
<p>{{$name}}</p>
@endforeach

@endsection