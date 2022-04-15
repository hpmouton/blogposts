@extends('layout.app')
@section('title', 'create blog post')
@section('content')

<div class="container">
    <h1>Edit The Post Details</h1>
    <form action="{{ route('blogposts.store',['blogpost'=>$blogpost->id])}}" method="POST">
        @csrf
        @method('PUT')
        @include('posts.partials.form')
        <button type="submit" class="btn btn-primary">Update</button>

    </form>




</div>


@endsection
