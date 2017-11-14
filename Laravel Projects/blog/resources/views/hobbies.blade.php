@extends('layouts.master')
@section('content')
    <h1>Hobbies</h1>
    <ul>
    @foreach($hobbies as $hobby)
        <li>{{$hobby->title}}</li>
    @endforeach
    </ul>
    <ul>
    @foreach($sports as $sport)
        <li>{{$sport->noOfPlayers}} play {{$sport->name}}</li>
    @endforeach
    </ul>
@endsection

