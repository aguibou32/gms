@extends('layouts.app')

@section('content')
    <section class="inner-banner h-500 h-md-400 h-sm-auto py-6 d-flex align-items-center bg-overlay-dark-50 bg-holder bg-holder"  style="background-image:url({{asset('assets/images/bg/07.jpg')}});">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-7 col-lg-9 col-md-12 text-center pt-md-5">
          <h1 class="text-white mb-2">News</h1>
          <ol class="breadcrumb mb-0 p-0">
            <li class="breadcrumb-item"><a href="{{ route("welcome") }}"><i class="fa fa-home pr-2"></i>Welcome</a></li>
            <li class="breadcrumb-item"><a href="{{ route('news.index') }}"><span>News</span></a></li>
            <li class="breadcrumb-item active"><span>{{ $post->title }}</span></li>
          </ol>
        </div>
      </div>
    </div>
  </section>

  <section class="space-ptb">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-10">
          <!-- blog detail START -->
          <div class="blog-detail">
            <div class="blog-post">
              <div class="blog-post-image">
                <img class="img-fluid b-radius-bottom-none" src="{{URL::asset('/storage/'.$post->image)}}" alt="post image">
              </div>
              <div class="blog-post-content b-radius-top-none">
                <div class="blog-post-meta">
                  <ul class="list-unstyled d-flex justify-content-between">
                    <li class="blog-post-date"><a href="#"><i class="far fa-calendar-alt"></i>{{ $post->created_at }}</a></li>
                    <li class="blog-post-comments"><a href="#"><i class="far fa-comments"></i>Comments <span>(05)</span></a></li>
                  </ul>
                  <p>This article was posted {{ $post->created_at->diffForHumans()}}</p>
                </div>
                <div class="blog-post-date"></div>
                <h4 class="blog-post-title"><a href="#">{{ $post->title }}</a></h4>
                <p class="mb-4">
                    {!! $post->body  !!}
                </p>
              </div>
              <div class="comments mt-4 mt-md-5">
                <h4 class="mb-4">Comments</h4>
                <div class="media mb-4">
                  <div class="avatar avatar-md">
                    <img src="images/avatar/01.jpg" class="img-fluid rounded" alt="...">
                  </div>
                  <div class="media-body ml-3 border b-radius p-3 p-sm-4">
                    <div class="d-flex">
                      <h6 class="mt-0">Alice Williams</h6>
                      <a class="ml-auto" href="#"><i class="fas fa-reply pr-2"></i>Reply</a>
                    </div>
                    <p>Then work backwards to develop the plan. What steps are required to get you to the goals? Make the plan as detailed as possible. Try to visualize and then plan.</p>
                  </div>
                </div>
                <div class="media mb-4 ml-5">
                  <div class="avatar avatar-md">
                    <img src="images/avatar/06.jpg" class="img-fluid rounded" alt="...">
                  </div>
                  <div class="media-body ml-3 border b-radius p-3 p-sm-4">
                    <div class="d-flex">
                      <h6 class="mt-0">Mellissa Doe</h6>
                      <a class="ml-auto" href="#"><i class="fas fa-reply pr-2"></i>Reply</a>
                    </div>
                    <p>Every possible setback. Commit the plan to paper and then keep it with you at all times. Review it regularly and ensure that every step takes you closer.</p>
                  </div>
                </div>
                <div class="media mb-4 ml-5">
                  <div class="avatar avatar-md">
                    <img src="assets/images/avatar/06.jpg" class="img-fluid rounded" alt="...">
                  </div>
                  <div class="media-body ml-3 border b-radius p-3 p-sm-4">
                    <div class="d-flex">
                      <h6 class="mt-0">Mellissa Doe</h6>
                      <a class="ml-auto" href="#"><i class="fas fa-reply pr-2"></i>Reply</a>
                    </div>
                    <p>Focus is having the unwavering attention to complete what you set out to do. There are a million distractions in every facet of our lives.</p>
                  </div>
                </div>
                <div class="media mb-4">
                  <div class="avatar avatar-md">
                    <img src="assets/images/avatar/01.jpg" class="img-fluid rounded" alt="...">
                  </div>
                  <div class="media-body ml-3 border b-radius p-3 p-sm-4">
                    <div class="d-flex">
                      <h6 class="mt-0">Alice Williams</h6>
                      <a class="ml-auto" href="#"><i class="fas fa-reply pr-2"></i>Reply</a>
                    </div>
                    <p>Once you have a clear understanding of what you want, it is critical that you engage in goal setting – specifically setting SMART goals.</p>
                  </div>
                </div>
              </div>
              <div class="mt-4 mt-md-5">
                <h4 class="mb-4">Leave a Reply</h4>
                <form>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <input type="text" class="form-control" id="Website" placeholder="Website URL">
                    </div>
                    <div class="form-group col-md-6">
                      <input type="text" class="form-control" id="name" placeholder="Your Name">
                    </div>
                    <div class="form-group col-md-6">
                      <input type="email" class="form-control" id="inputEmail4" placeholder="Email Address">
                    </div>
                    <div class="form-group col-md-6">
                      <input type="text" class="form-control" id="number" placeholder="Phone Number">
                    </div>
                    <div class="form-group col-md-12">
                      <textarea class="form-control" rows="4" placeholder="Message"></textarea>
                    </div>
                    <div class="col-md-12">
                      <a class="btn btn-primary btn-round" href="#">Send Message</a>
                    </div>
                  </div>
                </form>
              </div>
              <div class="mt-4 mt-md-5">
                <h4 class="mb-4">Other Posts</h4>
                <div class="row">
                    @if (count($other_posts)>0)
                        @foreach ($other_posts as $post)
                        <div class="col-md-6 mb-4 mb-md-0">
                            <div class="blog-post">
                              <div class="blog-post-image">
                                <img class="img-fluid b-radius-bottom-none" src="{{URL::asset('/storage/'.$post->image)}}" alt="post image">
                              </div>
                              <div class="blog-post-content b-radius-top-none">
                                <div class="blog-post-meta">
                                  <ul class="list-unstyled d-flex justify-content-between">
                                    <li class="blog-post-date"><a href="#"><i class="far fa-calendar-alt"></i>{{ $post->created_at }}</a></li>
                                    <li class="blog-post-comments"><a href="#"><i class="far fa-comments"></i>Comments <span>(01)</span></a></li>
                                  </ul>
                                  <p>This article was posted {{ $post->created_at->diffForHumans()}}</p>
                                </div>
                                <div class="blog-post-date"></div>
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
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--=================================
  blog detial -->

@endsection