@extends('layout.app')
@section('title','Blog Posts Page')
@section('content')
<div class="container">
<h1>List Of Authors</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Author</th>
                <th scope="col">Author Email</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($author as $key => $author)



            <tr>
                <th scope="row">{{$key+1}}</th>
                <td>{{ $author['name']}}</td>
                <td>{{ $author->profile->email }}</td>
                <td>
                    <a href="#" class="btn btn-primary">Edit</a>


                </td>
                <td><form
                    action="{{route('author.destroy',['author'=>$author->id])}}"
                    method="POST">
                    @csrf
                    @method('DELETE')
                    <button
                    type="submit"
                    class="btn btn-danger"
                    >Delete
                    </button>
                </form>

                </td>
            </tr>


            @endforeach


        </tbody>
    </table>







</div>

@endsection
