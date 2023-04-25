@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <img src="{{ asset('images/articles/'.$article->image) }}" alt="Cover
                        Image" class="img-fluid" width="100%">
                <h1 class="mt-4 mb-3">{{ $article->title }}</h1>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <p>{{ $article->summary }}</p>
                    <p>{!! $article->content !!}</p>
                </div>
            </div>
            <div class="mt-4 mb-4">
                <span class="badge rounded-pill bg-primary">Tag 1</span>
                <span class="badge rounded-pill bg-secondary">Tag 2</span>
                <span class="badge rounded-pill bg-success">Tag 3</span>
                <span class="badge rounded-pill bg-danger">Tag 4</span>
            </div>
            <h3>Comments</h3>
            <div class="comment-box mt-4 mb-4">
                <div class="comment">
                    <h5>John Doe</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit.</p>
                </div>
                <div class="comment">
                    <h5>Jane Doe</h5>
                    <p>Nullam sit amet nisi condimentum, auctor velit
                        sed, malesuada enim.</p>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <p>© 2023 Blog</p>
    </footer>
@endsection
