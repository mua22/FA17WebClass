@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    @foreach($articles as $article)
                        <h2>{{$article->title}}</h2>
                        <p>{{$article->body}}</p>
                            <hr>
                        @endforeach

                        {{$articles->render()}}
                    Show some articles here
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
