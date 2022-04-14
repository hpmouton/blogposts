@extends('layout.app')
@section('title','Authors Page')
@section('content')
<div class="container">
    <div class="blog-card">
        <div class="card-body col-sm-6 col-xs-6">
            <h3 class="title text-center">{{ $author->name }}</h3>
            <div class="divider"></div>
            <p class="paragraph text-justify">#</p><a class="read-more glyphicon glyphicon-chevron-down"></a>
          </div>
    </div>


</div>

@endsection
