@extends('admin.master')
@section('content')
    <h1>Articles</h1>
    <a href="/articles/create" class="btn btn-success">Add New Article</a>
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Actions</th>
        </tr>
        <tbody>
            @foreach($articles as $article)
                <tr>
                    <td>{{$article->id}}</td>
                    <td>{{$article->title}}</td>
                    <td><a href="" class="btn btn-info btn-sm">Edit</a>
                        <a href="" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>    
            @endforeach
        </tbody>
        </thead>
    </table>
    {{$articles->render()}}

@endsection
