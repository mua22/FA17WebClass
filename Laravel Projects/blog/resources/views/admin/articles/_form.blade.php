
<div class="form-group">
    <label for="title" class="col-sm-2 control-label">Title</label>
    <div class="col-sm-10">
        <input type="text" name="title" class="form-control" id="title" placeholder="Title"
        @if(isset($article))
               value="{{$article->title}}"
                @endif
        >
    </div>
</div>

<div class="form-group">
    <label for="body" class="col-sm-2 control-label">Body</label>
    <div class="col-sm-10">
                <textarea type="text" name="body" class="form-control" id="body" placeholder="Body">
                 @if(isset($article))
                    {{$article->body}}
                     @endif
                </textarea>
    </div>
</div>