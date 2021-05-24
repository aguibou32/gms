@extends('layouts.app')

@section('content')
<section class="inner-banner h-500 h-md-400 h-sm-auto py-6 d-flex align-items-center bg-overlay-dark-50 bg-holder bg-holder"  style="background-image: url(assets/images/bg/03.jpg);">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-7 col-lg-9 col-md-12 text-center pt-md-5">
          <h1 class="text-white mb-2">Leadership</h1>
          <ol class="breadcrumb mb-0 p-0">
            <li class="breadcrumb-item"><a href="{{ route("welcome") }}"><i class="fa fa-home pr-2"></i>Welcome</a></li>
            <li class="breadcrumb-item active"><span>Leadership</span></li>
          </ol>
        </div>
      </div>
    </div>
  </section>
  <!--=================================
  inner banner -->

  <!--=================================
  Team -->
  <section class="space-ptb">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10 text-center">
          <div class="section-title">
            <h2 class="title">Guinean Medical Society (GMS) Founding Fathers</h2>
            <p class="lead">Remind Alpha to write a short paragraph for here.......... </p>
          </div>
        </div>
      </div>
      <div class="row">
        

        @if (count($leaders)>0)
          @foreach ($leaders as $leader)
          <div class="col-lg-6 col-sm-12 mb-4">
            <div class="team">
              <div class="team-img">
              <img class="img-fluid" src="{{URL::asset('/storage/'.$leader->leader_image)}}" alt="post image">
              </div>
              <div class="team-content b-radius-top-none">
                <h4>
                  <a href="#">{{ $leader->name_and_surname }}</a>
                </h4>
                <span> <strong>{{ $leader->role }}</strong></span>
                <ul class="team-social">
                    @if ($leader->facebook_handle !== null)
                      <li>
                        <a href="{{ $leader->facebook_handle }}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                      </li>
                    @endif
                   
                    @if ($leader->twitter_handle !== null)
                      <li>
                        <a href="{{ $leader->twitter_handle }}" target="_blank"><i class="fab fa-twitter"></i></a>
                      </li>
                    @endif
                    @if ($leader->linked_in_handle !== null)
                      <li>
                        <a href="{{ $leader->linked_in_handle }}" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                      </li>
                    @endif
                    @if ($leader->instagram_handle !== null)
                      <li>
                        <a href="{{ $leader->instagram_handle }}" target="_blank"><i class="fab fa-instagram"></i></a>
                      </li>
                    @endif
                </ul>
                <p>
                  {!! $leader->biography !!}
                </p>
              </div>
            </div>
          </div>
          @endforeach
        @endif

       
        
        
      </div>
    </div>
  </section>
  <!--=================================
  Team -->

  <!--=================================
  Call to Action -->
  <section class="space-ptb  bg-overlay-dark-50" style="background-image: url(assets/images/bg/03.jpg);">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-5">
          <div class="bg-white p-4 p-sm-5 b-radius text-center">
            <span class="display-9 d-block">Become a GMS Member</span>
            <span class="display-7 d-block font-weight-bold text-dark mb-3">Apply Now</span>
            <p class="mb-4">A short paragraph here</p>
            <a href="{{ route("join_team.index") }}" class="btn btn-primary btn-round">Join Us</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--=================================
  Call to Action -->

  <!--=================================
  Client logo -->
  <section class="py-5 our-clients">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="owl-carousel testimonial-center" data-nav-arrow="false" data-items="5" data-md-items="4" data-sm-items="3" data-xs-items="2" data-xx-items="1" data-space="0" data-autoheight="true">
              <!-- item-01 START -->
              <div class="item">
                <img class="img-fluid center-block mx-auto grayscale" src="images/client/01.svg" alt="">
              </div>
              <!-- item-01 End -->

              <!-- item-02 START -->
              <div class="item">
                <img class="img-fluid center-block mx-auto grayscale" src="images/client/02.svg" alt="">
              </div>
              <!-- item-02 End -->

              <!-- item-03 START -->
              <div class="item">
                <img class="img-fluid center-block mx-auto grayscale" src="images/client/03.svg" alt="">
              </div>
              <!-- item-03 End -->

              <!-- item-04 START -->
              <div class="item">
                <img class="img-fluid center-block mx-auto grayscale" src="images/client/04.svg" alt="">
              </div>
              <!-- item-04 End -->

              <!-- item-05 START -->
              <div class="item">
                <img class="img-fluid center-block mx-auto grayscale" src="images/client/05.svg" alt="">
              </div>
              <!-- item-05 End -->

              <!-- item-06 START -->
              <div class="item">
                <img class="img-fluid center-block mx-auto grayscale" src="images/client/06.svg" alt="">
              </div>
              <!-- item-06 End -->

              <!-- item-07 START -->
              <div class="item">
                <img class="img-fluid center-block mx-auto grayscale" src="images/client/07.svg" alt="">
              </div>
              <!-- item-07 End -->
            </div>
        </div>
      </div>
    </div>
  </section>

@endsection