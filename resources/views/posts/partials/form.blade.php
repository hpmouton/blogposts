
      <div class="form-group">
        <label for="blogPostTitle">Title</label>
        <input type="text" class="form-control" name="blogPostTitle" id="blogPostTitle" value="{{old('blogPostTitle',optional($blogpost ?? null)->blogPostTitle)}}" aria-describedby="blogPostTitleHelp">
         </div>
         <div class="form-group">
            <label for="blogPostContent">Content</label>
            <textarea class="form-control" name="blogPostContent" id="blogPostContent"  aria-describedby="blogPostContentHelp" >{{old('blogPostContent',optional($blogpost ?? null)->blogPostContent)}}</textarea>
          </div>
          <br>
          <input type="checkbox" name="blogPostIsHighlight" id="blogPostIsHighlight" value="{{old('blogPostIsHighlight',optional($blogpost ?? null)->blogPostIsHighlight)}}" aria-describedby="blogPostIsHighlight">

          <label for="blogPostIsHighlight">Highlight Blog post</label>

          <br>
          <div class="container">
            @if($errors->any())
            <div class="mb-3">
                <ul class="list-group">
                    @foreach ($errors->all() as $error)
                        <li class="list-group-item list-group-item-danger">
                            {{$error}}
                        </li>
                    @endforeach
                </ul>
            </div>

            @endif


        </div>
          <br>







