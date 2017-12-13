@extends('layouts.master')
@section('content')
<h1>Universities in Lahore</h1>

    @foreach($universities as $university)
        <h3><a href="{{route('universities.show',$university->id)}}">{{$university->title}}</a></h3>
        ranking: {{$university->ranking}}
    @endforeach
<hr>
    {{$universities->render()}}
@endsection
