@extends('layouts.app')
@section('content')
<h1>{{$team->name}}</h1>
<h3>{{$team->email}}</h3>
<h3>{{$team->addres}}</h3>
<h3>{{$team->city}}</h3>

@foreach($players as $player)
<p>{{$player->first_name}} {{$player->last_name}}</p>
@endforeach
@endsection

