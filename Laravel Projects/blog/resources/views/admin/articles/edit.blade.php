@extends('admin.master')
@section('content')
    <h1>Editing</h1>
    <form action="/articles/{{$article->id}}/update" method="post" class="form-horizontal">
        @include('admin.articles._form')
        {{method_field('PATCH')}}
        {{csrf_field()}}
        <input type="submit" class="btn btn-info">
    </form>
@endsection
