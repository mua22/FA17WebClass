@extends('layouts.app')

@section('content')
<h1>{{$article->title}}</h1>
<p>{{$article->body}}</p>


    <h3>Comments</h3>
    @foreach($article->comments as $comment)
    {{$comment->comment}}
    <hr>
    @endforeach
    @endsection