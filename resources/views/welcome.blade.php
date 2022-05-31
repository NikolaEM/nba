@extends('layouts.app')
@section('content')
@foreach($teams as $team)
<h3><a href="/show/{{$team->id}}">{{$team->name}}</h3>
@endforeach
@endsection