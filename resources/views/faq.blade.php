@extends('layouts.app')
@section('content')
       <!--=================================
    inner banner -->
    <section class="inner-banner h-500 h-md-400 h-sm-auto py-6 d-flex align-items-center bg-overlay-dark-50 bg-holder"  style="background-image: url(assets/images/bg/05.jpg);">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-9 col-md-12 text-center pt-md-5">
              <h1 class="text-white mb-2">FAQ</h1>
              <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="{{ route('welcome') }}"><i class="fa fa-home pr-2"></i>Home</a></li>
                <li class="breadcrumb-item active"><span>FAQ</span></li>
              </ol>
            </div>
          </div>
        </div>
      </section>
      <!--=================================
      inner banner -->
  
      <!--=================================
      Faq -->
      <section class="space-ptb">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 mb-4 mb-lg-0">
              <div class="section-title">
                <h2 class="title">Frequently Asked Questions</h2>
              </div>
              @if (count($faqs)>0)
                @foreach ($faqs as $faq)
                  <div class="accordion" id="career-opportunities">
                    <div class="card">
                      <div class="accordion-icon card-header" id="headingOne">
                        <h4 class="mb-0">
                        <button class="btn" type="button" data-toggle="collapse" data-target="#faq-{{$faq->id}}" aria-expanded="false" aria-controls="security-manager">{{ $faq->title}} </button>
                        </h4>
                      </div>
                      <div id="faq-{{$faq->id}}" class="collapse {{$loop->first ? 'show':''}}" aria-labelledby="headingOne" data-parent="#faq-{{$faq->id}}">
                        <div class="card-body">
                          <p class="mb-4">{!! $faq->body !!}</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <br>
                @endforeach                  
              @endif
            </div>
            <div class="col-lg-6">
              <div class="sidebar">
                <div class="widget widget_search">
                  <div class="widget-title">
                    <h5 class="mb-0">Search</h5>
                  </div>
                  <form class="search-form">
                    <label>
                      <span class="screen-reader-text">Search for:</span>
                      <input type="search" class="search-field" placeholder="Search...">
                    </label>
                    <button type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                  </form>
                </div>
                <div class="widget mb-0">
                  @include('layouts.partials.contact_us_form')
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
@endsection