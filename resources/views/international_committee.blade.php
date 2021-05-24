@extends('layouts.app')

@section('content')
<section class="inner-banner h-500 h-md-400 h-sm-auto py-6 d-flex align-items-center bg-overlay-dark-50 bg-holder bg-holder"  style="background-image: url(assets/images/bg/04.jpg);">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-7 col-lg-9 col-md-12 text-center pt-md-5">
          <h1 class="text-white mb-2">Internation Committee</h1>
          <ol class="breadcrumb mb-0 p-0">
            <li class="breadcrumb-item"><a href="{{ route("welcome") }}"><i class="fa fa-home pr-2"></i>Welcome</a></li>
            <li class="breadcrumb-item active"><span>International Committee</span></li>
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
            <h2 class="title">Internation Commmittee</h2>
            <p class="lead">Remind Alpha to write a short paragraph for here.......... </p>
          </div>
        </div>
      </div>
      <div class="row">
        @if (count($members)>0)
        @foreach ($members as $member)
        <div class="col-lg-6 col-sm-12 mb-4">
          <div class="team">
            <div class="team-img">
            <img class="img-fluid" src="{{URL::asset('/storage/'.$member->member_image)}}" alt="post image">
            </div>
            <div class="team-content b-radius-top-none">
              <h4>
                <a href="#">{{ $member->name_and_surname }}</a>
              </h4>
              <span> <strong>{{ $member->role }}</strong></span>
              <ul class="team-social">
                  @if ($member->facebook_handle !== null)
                    <li>
                      <a href="{{ $member->facebook_handle }}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    </li>
                  @endif
                 
                  @if ($member->twitter_handle !== null)
                    <li>
                      <a href="{{ $member->twitter_handle }}" target="_blank"><i class="fab fa-twitter"></i></a>
                    </li>
                  @endif
                  @if ($member->linked_in_handle !== null)
                    <li>
                      <a href="{{ $member->linked_in_handle }}" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    </li>
                  @endif
                  @if ($member->instagram_handle !== null)
                    <li>
                      <a href="{{ $member->instagram_handle }}" target="_blank"><i class="fab fa-instagram"></i></a>
                    </li>
                  @endif
              </ul>
              <p>
                {!! $member->biography !!}
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
  <section class="space-ptb  bg-overlay-dark-50" style="background-image: url(assets/images/bg/04.jpg);">
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

@endsection