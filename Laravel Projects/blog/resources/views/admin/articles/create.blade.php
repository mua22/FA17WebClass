@extends('admin.master')
@section('content')
    <h1>Add new Article</h1>
    <form action="/articles" method="post" class="form-horizontal">
        @include('admin.articles._form')
        {{csrf_field()}}
        <input type="submit" class="btn btn-info">
    </form>
@endsection
