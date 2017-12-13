@extends('admin.master')
@section('content')
    <h1>Add new University</h1>

    <form action="/admin/universities" method="post" class="form-horizontal">
        {{csrf_field()}}
        <div class="form-group">
            <label for="title" class="col-sm-2 control-label">Title</label>
            <div class="col-sm-10">
                <input type="text" name="title" class="form-control" id="title" placeholder="Title">
            </div>
        </div>

        <div class="form-group">
            <label for="ranking" class="col-sm-2 control-label">Ranking</label>
            <div class="col-sm-10">
                <input type="text" name="ranking" class="form-control" id="ranking" placeholder="Ranking">
            </div>
        </div>

        <input type="submit" value="Add New" class="btn btn-info">
    </form>
@endsection
