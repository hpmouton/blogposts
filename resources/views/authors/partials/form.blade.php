
      <div class="form-group">
        <label for="name">Author Name</label>
        <input type="text" class="form-control" name="name" id="name" value="{{old('name',optional($author ?? null)->name)}}" aria-describedby="nameHelp">
         </div>
         <div class="form-group">
            <label for="email">Author Email</label>
            <input class="form-control" name="email" id="email" value="{{old('email',optional($author->profile ?? null)->email)}}" aria-describedby="emailHelp">
          </div>
          <br>
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







