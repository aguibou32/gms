@extends('layouts.app')

@section('content')
<section class="inner-banner h-500 h-md-400 h-sm-auto py-6 d-flex align-items-center bg-overlay-dark-50 bg-holder bg-holder"  style="background-image:url(assets/images/bg/01.jpg);">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-7 col-lg-9 col-md-12 text-center pt-md-5">
          <h1 class="text-white mb-2">News</h1>
          <ol class="breadcrumb mb-0 p-0">
            <li class="breadcrumb-item"><a href="{{ route("welcome") }}"><i class="fa fa-home pr-2"></i>Welcome Page</a></li>
            <li class="breadcrumb-item active"><span>News</span></li>
          </ol>
        </div>
      </div>
    </div>
  </section>

  <section class="space-ptb">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10">
          <div class="section-title text-center">
            <h2 class="title">News</h2>
            <p class="lead">Short Paragraph for the news here</p>
          </div>
        </div>
      </div>
      <div class="row">
       @if (count($posts)>0)
      @foreach ($posts as $post)
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="blog-post">
          <div class="blog-post-image">
            <img class="img-fluid b-radius-bottom-none" src="{{URL::asset('/storage/'.$post->image)}}" alt="post image">
          </div>
          <div class="blog-post-content b-radius-top-none">
            <div class="blog-post-meta">
              <ul class="list-unstyled d-flex justify-content-between">
                <li class="blog-post-date"><a href="#"><i class="far fa-calendar-alt"></i>{{ $post->created_at }}</a></li>
                <li class="blog-post-comments"><a href="#"><i class="far fa-comments"></i>Comments <span>(02)</span></a></li>
              </ul>
              <p>This article was posted {{ $post->created_at->diffForHumans()}}</p>
            </div>
            <h4 class="blog-post-title"><a href="{{ route('news.show', $post->id) }}">{{ $post->title }}</a></h4>
            <p>{{ $post->excerpt }}</p>
            <a href="{{ route('news.show', $post->id) }}" class="btn btn-md btn-primary btn-round">Read More</a>
          </div>
        </div>
      </div>
      @endforeach
       @endif
      </div>
    </div>
  </section>
@endsection