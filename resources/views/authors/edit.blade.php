@extends('layout.app')
@section('title', 'Update Author')
@section('content')

<div class="container">
    <h1>Edit The Post Details</h1>
    <form action="{{ route('author.update',['author'=>$author->id])}}" method="POST">
        @csrf
        @method("PUT")
        @include('authors.partials.form')
        <button type="submit" class="btn btn-primary">Update</button>

    </form>




</div>


@endsection
