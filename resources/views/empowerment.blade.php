@extends('layouts.app')

@section('content')
<section class="inner-banner h-500 h-md-400 h-sm-auto py-6 d-flex align-items-center bg-overlay-dark-50 bg-holder bg-holder"  style="background-image: url(assets/images/bg/07.jpg);">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-7 col-lg-9 col-md-12 text-center pt-md-5">
          <h1 class="text-white mb-2">Empowerment</h1>
          <ol class="breadcrumb mb-0 p-0">
            <li class="breadcrumb-item"><a href="{{ route("welcome") }}"><i class="fa fa-home pr-2"></i>Welcome</a></li>
            <li class="breadcrumb-item active"><span>Empowerment</span></li>
          </ol>
        </div>
      </div>
    </div>
  </section>

  <section class="space-ptb">
    <div class="container">
      @if ($empowerment !== null)
      <div class="row">
        <div class="col-md-6 mb-4 mb-md-0">
          <div class="position-relative pb-md-0 h-100">
            <img class="img-fluid b-radius pb-sm-6" src="{{URL::asset('/storage/'.$empowerment->empowerment_image)}}" alt="mission image">
          </div>
        </div>
        <div class="col-md-6">
          {!! $empowerment->empowerment_body !!}
        </div>
      </div>
               
      @else
          <h3>This section is under contruction </h3>
      @endif
    </div>
  </section>
@endsection