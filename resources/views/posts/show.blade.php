@extends('layout.app')
@section('title','Blog Posts Page')
@section('content')
<div class="container">
    <div class="blog-card">
        <div class="card-body col-sm-6 col-xs-6">
            <h3 class="title text-center">{{ $blogpost->blogPostTitle }}</h3>
            <div class="divider"></div>
            <p class="paragraph text-justify"> {{ $blogpost->blogPostContent }}</p><a class="read-more glyphicon glyphicon-chevron-down"></a>
          </div>
    </div>


</div>

@endsection
