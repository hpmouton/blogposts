@extends('layout.nav')
@section('title', 'Create Author')
@section('content')

<div class="container">
    <h1>Create A new Author</h1>
    <form action="{{ route('author.store')}}" method="POST">
        @csrf
        @include('authors.partials.form')
        <button type="submit" class="btn btn-primary">Create</button>

    </form>




</div>


@endsection
