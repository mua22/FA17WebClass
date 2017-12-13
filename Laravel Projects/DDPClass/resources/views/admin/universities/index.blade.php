@extends('admin.master')
@section('content')
    <h1>All Universities</h1>
    <a href="/admin/universities/create" class="btn btn-info btn-sm">Add New University</a>
    <table class="table table-bordered table-hover table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Ranking</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
            @foreach($universities as $university)
                <tr>
                    <td>{{$university->id}}</td>
                    <td>{{$university->title}}</td>
                    <td>{{$university->ranking}}</td>
                    <td><a href="/admin/universities/1/edit">Edit</a></td>
                </tr>
                @endforeach
        </tbody>
    </table>
    {{$universities->render()}}
@endsection
