
<div class="mb-3">
    <div class="h1">
        <label >Create a new Comment</label>
    </div>
    <label for="id" class="form-label">Blog Post</label>
    <select  name="id" class="form-control">
        @foreach($blogposts->all() as $post )
        <option value="{{$post->id}}">{{$post->blogPostTitle}}</option>
        @endforeach
    </select>
    <div class="mb-3">
        <label for="commentContent" class="form-label">Blog Post Comment</label>

        <textarea class="form-control" name="commentContent" rows="3"> </textarea>
    </div>

    @if($errors->any())
        <div class="mb-3">
            <ul class="list-group">
                @foreach($errors->all() as $error)
                    <li class="list-group-item list-group-item-danger">{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>
