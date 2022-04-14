@extends('layout.app')
@section('title', 'Update Author')
@section('content')

<div class="container">
    <h1>Edit The Post Details</h1>
    <form action="{{ route('author.store')}}" method="POST">
        @csrf
        @include('authors.partials.form')
        <button type="submit" class="btn btn-primary">Update</button>

    </form>




</div>


@endsection
