@extends('layout.app')
@section('title', 'Create Author')
@section('content')

<div class="container">
    <div class="h1">
        <label >Create a new Comment</label>
    </div>
    <form action="{{ route('comments.store') }}" method="POST">
        @csrf
        @include('comments.partials.form')
        <button type="submit" class="btn btn-primary">Create</button>

    </form>




</div>


@endsection
