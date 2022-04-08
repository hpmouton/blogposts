@extends('layout.app')
@section('title','Blog Posts Page')
@section('content')
<div class="container">
<h1>Our Blog Posts</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Content</th>
                <th scope="col">Highlight</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($blogpost as $key => $blogpost)
            <tr>
                <th scope="row">{{$key+1}}</th>
                <td>{{$blogpost['blogPostTitle']}}</td>
                <td>{{$blogpost['blogPostContent']}}</td>
                <td>{{$blogpost['blogPostIsHighlight']==1 ? 'YES' : 'NO'}}</td>
                <td>
                    <a href="{{ route('blogposts.edit',['blogpost'=>$blogpost->id]) }}" class="btn btn-primary">Edit</a>


                </td>
                <td><form
                    action="{{route('blogposts.destroy',['blogpost'=>$blogpost->id])}}"
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
