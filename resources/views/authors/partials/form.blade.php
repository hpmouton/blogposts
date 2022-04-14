
      <div class="form-group">
        <label for="name">Author Name</label>
        <input type="text" class="form-control" name="name" id="name" >
         </div>
         <div class="form-group">
            <label for="email">Author Email</label>
            <textarea class="form-control" name="email" id="email" ></textarea>
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







