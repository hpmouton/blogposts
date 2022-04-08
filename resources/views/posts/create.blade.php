@extends('layout.app')
@section('title', 'create blog post')
@section('content')

<div class="container">
    <h1>Create A new Post</h1>
    <form action="{{ route('blogposts.store')}}" method="POST">
        @csrf
        @include('posts.partials.form')
        <button type="submit" class="btn btn-primary">Create</button>

    </form>




</div>


@endsection
