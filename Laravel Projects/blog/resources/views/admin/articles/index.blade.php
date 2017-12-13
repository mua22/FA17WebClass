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
                    <td><a href="/articles/{{$article->id}}/edit" class="btn btn-info btn-sm">Edit</a>
                        <form action="/articles/{{$article->id}}/delete" class="form-inline inline" method="POST">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <button class="btn btn-danger btn-sm" type="submit">Delete</button>

                        </form>

                    </td>
                </tr>    
            @endforeach
        </tbody>
        </thead>
    </table>
    {{$articles->render()}}

@endsection
