@extends('layouts.app')

@section('content')
<section class="inner-banner h-500 h-md-400 h-sm-auto py-6 d-flex align-items-center bg-overlay-dark-50 bg-holder bg-holder"  style="background-image: url(assets/images/bg/06.jpg);">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-7 col-lg-9 col-md-12 text-center pt-md-5">
          <h1 class="text-white mb-2">Make A Donation</h1>
          <ol class="breadcrumb mb-0 p-0">
            <li class="breadcrumb-item"><a href="{{ route("welcome") }}"><i class="fa fa-home pr-2"></i>Welcome</a></li>
            <li class="breadcrumb-item active"><span>Make Donation</span></li>
          </ol>
        </div>
      </div>
    </div>
  </section>

  <section class="space-ptb">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-7 text-center">
          <div class="section-title">
            <h2 class="title">Make a Donation</h2>
            <p class="lead">Some text here...</p>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <div class="donation-form shadow p-4 p-md-5">
            <div class="mb-4 mb-md-5">
              <h4 class="mb-4">Choose or select your amount</h4>
              <ul class="amount-select">
                <li><input id="1" type="radio" name="size">
                    <label for="1">$50</label>
                </li>
                <li><input id="2" type="radio" name="size">
                    <label for="2">$100</label>
                </li>
                <li><input id="3" type="radio" name="size">
                    <label for="3">$200</label>
                </li>
                <li><input id="4" type="radio" name="size">
                    <label for="4">$500</label>
                </li>
              </ul>
              <form class="mt-4">
                <div class="form-group other-amount">
                  <label>Select other amout</label>
                  <input class="form-control" type="text" value="" placeholder="Other Amount">
                </div>
              </form>
            </div>
            <div class="mb-4">
              <h4 class="mb-4">Donner Details</h4>
              <form>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="First Name">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Last Name">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="text" name="text" class="form-control" placeholder="Email">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="text" name="text" class="form-control" placeholder="Number">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="text" name="text" class="form-control" placeholder="Country">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="City">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group mb-0">
                            <input type="text" name="name" class="form-control" placeholder="Address">
                        </div>
                    </div>
                </div>
              </form>
            </div>
            <h4 class="mb-4">Payment Method</h4>
            <ul class="payment-select">
              <li><input id="6" type="radio" name="size">
                  <label for="6"><img class="img-fluid" src="{{ asset("assets/images/checkout/img-1.png") }}" alt=""></label>
              </li>
              <li><input id="7" type="radio" name="size">
                  <label for="7"><img class="img-fluid" src="{{ asset("assets/images/checkout/img-2.png") }}" alt=""></label>
              </li>
              <li><input id="8" type="radio" name="size">
                  <label for="8"><img class="img-fluid" src="{{ asset("assets/images/checkout/img-3.png") }}" alt=""></label>
              </li>
              <li><input id="9" type="radio" name="size">
                  <label for="9"><img class="img-fluid" src="{{ asset("assets/images/checkout/img-4.png") }}" alt=""></label>
              </li>
            </ul>
            <form class="mt-4">
              <div class="row">
                  <div class="col-lg-6">
                      <div class="form-group">
                          <input type="text" name="name" class="form-control" placeholder="Card Holder Name">
                      </div>
                  </div>
                  <div class="col-lg-6">
                      <div class="form-group">
                          <input type="text" name="name" class="form-control" placeholder="Card Number">
                      </div>
                  </div>
                  <div class="col-lg-6">
                      <div class="form-group">
                          <input type="text" name="text" class="form-control" placeholder="CVV">
                      </div>
                  </div>
                  <div class="col-lg-6">
                      <div class="form-group mb-0">
                          <input type="text" name="text" class="form-control" placeholder="Expire Date">
                      </div>
                  </div>
              </div>
              <div class="row mt-4">
                <div class="col-sm-12">
                  <a href="#" class="btn btn-primary btn-round">Donate Now</a>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection