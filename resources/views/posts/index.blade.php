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
                <th scope="col">Comments</th>
                <th scope="col">Highlight</th>
                <th scope="col" colspan="2">
                    @if(auth()->user() != null && auth()->user()->hasRole(['Admin','Super-Admin']))
                    Actions
                    @endif
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($blogpost as $key => $blogpost)
            <tr>
                <th scope="row">{{$key+1}}</th>
                <td>{{$blogpost['blogPostTitle']}}</td>
                <td>{{$blogpost['blogPostContent']}}</td>
                <td>{{$blogpost['comments_count'];}}</td>

                <td>{{$blogpost['blogPostIsHighlight']==1 ? 'YES' : 'NO'}}</td>
                <td >
                    @can('edit Blog Posts')
                    <form action="{{route("blogposts.edit",['blogpost'=>$blogpost->id])}}" method="post">
                        @csrf
                        @method('GET')
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </form>
                    @endcan
                </td>
                <td>
                    @if(auth()->user() != null && auth()->user()->hasRole('Super-Admin'))


                    <form action="{{route("blogposts.destroy",['blogpost'=>$blogpost->id])}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    @endif

                </td>
            </tr>

            @endforeach


        </tbody>
    </table>







</div>

@endsection
