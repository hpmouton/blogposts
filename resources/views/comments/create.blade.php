@extends('layout.nav')
@section('title', 'Create Comment')
@section('content')
    <form action="{{route('comments.store')}}" method="post">
        @csrf
        <div class="container">
            @include('comments.partials.form')
            <button type="submit" class="btn btn-primary">Create</button>


        </div>



    </form>

@endsection
