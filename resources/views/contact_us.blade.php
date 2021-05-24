@extends('layouts.app')

@section('content')
<!--=================================
    inner banner -->
    <section class="inner-banner h-500 h-md-400 h-sm-auto py-6 d-flex align-items-center bg-overlay-dark-50 bg-holder bg-holder"  style="background-image: url(assets/images/bg/08.jpg);">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-9 col-md-12 text-center pt-md-5">
              <h1 class="text-white mb-2">Contact Us</h1>
              <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="{{ route('welcome') }}"><i class="fa fa-home pr-2"></i>Home</a></li>
                <li class="breadcrumb-item active"><span>Contact us</span></li>
              </ol>
            </div>
          </div>
        </div>
      </section>

      <section class="space-pt">
        <div class="container">
            <h3>YOU HAVE ANY QUESTION, CONCERN, SUGGESTION ? PLEASE CONTACT US !</h3>
            <div class="row">
            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
              <div class="feature-item feature-item-shadow p-5 text-center">
                <div class="feature-item-icon">
                  <i class="flaticon-donation text-primary"></i>
                </div>
                <div class="feature-item-content">
                  <h4 class="mb-3">Email</h4>
                  <span>goheal.guinea@gmail.com</span>
                </div>
              </div>
              <div class="feature-item feature-item-shadow p-5 text-center">
                <a href="https://www.facebook.com/Guinean-Medical-Society-111385833609089" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <br>
                <a href="https://www.instagram.com/guineanmedicalsociety/" target="_blank"><i class="fab fa-instagram"></i></a>
                <ul>
                </ul>
              </div>
            </div>
            
            <div class="col-md-8 h-100 mb-4 mb-md-0">
              <div class="bg-white shadow p-4 p-lg-5">
               @include('layouts.partials.contact_us_form')
            </div>
          </div>
        </div>
      </section>
      <!--=================================
      Contact Info -->
  
      <!--=================================
      Contact form -->
      <section class="space-ptb">
        <div class="container">
          <div class="row">
            <div class="col-md-6 h-100 mb-4 mb-md-0">
             
            </div>
          </div>
        </div>
      </section>
    
@endsection