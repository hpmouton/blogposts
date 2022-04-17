@extends('layout.nav')
@section('content')
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">GIPE 2022</a>


                <li class="nav-item">
                    <a class="nav-link" href="{{(route('home.contact'))}}">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{(route('comments.create'))}}">Create Comment</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        Authors
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="{{(route('author.index'))}}">List of Authors</a>
                        <a class="dropdown-item" href="{{(route('author.create'))}}">New Author</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        Blog posts
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                        <a class="dropdown-item" href="{{(route('blogposts.index'))}}">List of Blog Posts</a>
                        <a class="dropdown-item" href="{{(route('blogposts.create'))}}">New Blog Post</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
