@extends('layouts.app')

@section('content')
<section class="inner-banner h-500 h-md-400 h-sm-auto py-6 d-flex align-items-center bg-overlay-dark-70 bg-holder"  style="background-image: url(assets/images/bg/08.jpg);">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xl-7 col-lg-9 col-md-12 text-center pt-md-5">
        <h1 class="text-white mb-2">Join our exciting and dynamic team</h1>
        <ol class="breadcrumb mb-0 p-0">
          <li class="breadcrumb-item"><a href="{{ route('welcome') }}"><i class="fa fa-home pr-2"></i>Home</a></li>
          <li class="breadcrumb-item active"><span>Register</span></li>
        </ol>
      </div>
    </div>
  </div>
</section>
<!--=================================
inner banner -->
<!--=================================
login -->
<section class="space-ptb">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="login-form p-4 p-md-5 shadow">
          @if(session()->has('message'))
              <div class="alert alert-primary alert-dismissible fade show" role="alert">
                <strong>{{ session()->get('message') }}</strong>
              </div>
          @endif
          
          <div class="section-title text-center mb-4">
            <h4 class="title">To join the GMS Team, please sign up using the membership application below. And We will add you to our email list so that you do not miss any update.</h4>
          </div>
          <form method="POST" action="{{route('join_team.store')}}" class="form-row align-items-center">
            @csrf
            <div class="form-group col-md-6">
              <input name="first_name" @error('first_name') is-invalid @enderror"  value="{{ old('first_name') }}" type="text" class="form-control"  placeholder="First Name">
              @error('first_name')
                  <span class="help text-danger" role="alert">
                      {{$errors->first('first_name')}}
                  </span>
              @enderror
            </div>

            <div class="form-group col-md-6">
              <input name="last_name" @error('last_name') is-invalid @enderror"  value="{{ old('last_name') }}" type="text" class="form-control" placeholder="Last Name">
              @error('last_name')
                  <span class="help text-danger" role="alert">
                      {{$errors->first('last_name')}}
                  </span>
              @enderror
            </div>

            <div class="form-group col-md-6">
             <input name="phone_number" @error('phone_number') is-invalid @enderror"  value="{{ old('phone_number') }}" type="text" class="form-control" placeholder="Phone Number">
             @error('phone_number')
                <span class="help text-danger" role="alert">
                    {{$errors->first('phone_number')}}
                </span>
              @enderror
            </div>

            <div class="form-group col-md-6">
             <input name="email" @error('email') is-invalid @enderror"  value="{{ old('email') }}" type="email" class="form-control" placeholder="Email Address">
             @error('email')
                <span class="help text-danger" role="alert">
                    {{$errors->first('email')}}
                </span>
              @enderror
            </div>

            <div class="form-group col-md-6">
                <input name="age" @error('age') is-invalid @enderror"  value="{{ old('age') }}" type="number" class="form-control" placeholder="Age">
                @error('age')
                  <span class="help text-danger" role="alert">
                      {{$errors->first('age')}}
                  </span>
                @enderror
            </div>

            <div class="form-group col-md-6">
                <select name="region" id="" class="form-control" placeholder="Region">
                    <option value="" disabled selected>Select your region...</option>
                    <option value="Africa" {{ old('region') == 'Africa' ? 'selected' : '' }}>Africa</option>
                    <option value="Asia" {{ old('region') == 'Asia' ? 'selected' : '' }}>Asia</option>
                    <option value="Australia" {{ old('region') == 'Australia' ? 'selected' : '' }}>Australia</option>
                    <option value="Europe" {{ old('region') == 'Europe' ? 'selected' : '' }}>Europe</option>
                    <option value="North America" {{ old('region') == 'North America' ? 'selected' : '' }}>North America</option>
                    <option value="South Africa" {{ old('region') == 'South Africa' ? 'selected' : '' }}>South Africa</option>
                </select>
            </div>

            <div class="form-group col-md-6">
                <input name="country" type="text" value="{{ old('country') }}" class="form-control" placeholder="Country">
                @error('country')
                  <span class="help text-danger" role="alert">
                      {{$errors->first('country')}}
                  </span>
                @enderror
            </div>

            <div class="form-group col-md-6">
                <input name="city" type="text" value="{{ old('city') }}" class="form-control" placeholder="City">
                @error('city')
                  <span class="help text-danger" role="alert">
                      {{$errors->first('city')}}
                  </span>
                @enderror
            </div>

            <div class="form-group col-md-6">
                <input name="language" type="text" value="{{ old('language') }}" class="form-control" placeholder="Language">
                @error('language')
                  <span class="help text-danger" role="alert">
                      {{$errors->first('language')}}
                  </span>
                @enderror
            </div>

            <div class="form-group col-md-6">
                <select name="current_academic_position" id="" class="form-control">
                    <option value="" disabled selected>Select Current Academic Position...</option>
                    <option value="High School" {{ old('current_academic_position') == 'High School' ? 'selected' : '' }}>High School</option>
                    <option value="Undergraduate University" {{ old('current_academic_position') == 'Undergraduate University' ? 'selected' : '' }}>Undergraduate University</option>
                    <option value="Post-Undergraduate / Post-Baccalaureate" {{ old('current_academic_position') == 'Post-Undergraduate / Post-Baccalaureate' ? 'selected' : '' }}>Post-Undergraduate / Post-Baccalaureate</option>
                    <option value="Medical, Graduate, or Health Professions School" {{ old('current_academic_position') == 'Medical, Graduate, or Health Professions School' ? 'selected' : '' }}>Medical, Graduate, or Health Professions School</option>
                    <option value="Post-Graduate School" {{ old('current_academic_position') == 'Post-Graduate School' ? 'selected' : '' }}>Post-Graduate School</option>
                    <option value="Healthcare Professional" {{ old('current_academic_position') == 'Healthcare Professional' ? 'selected' : '' }}>Healthcare Professional</option>
                </select>
            </div>

            <div class="form-group col-md-12">
                <label for="">Current Academic Institution (if Currently Post-Undergraduate, Post-Graduate or Healthcare Professional, Please Name Previous Academic Institution)</label>
                <input name="current_academic_institution" type="text" value="{{ old('current_academic_institution') }}" class="form-control" placeholder="Your answer...">
                @error('current_academic_institution')
                  <span class="help text-danger" role="alert">
                      {{$errors->first('current_academic_institution')}}
                  </span>
                @enderror
            </div>

            <div class="form-group col-md-12">
                <label for="">Future Professional Aspirations - What are you interested in as a healthcare career? </label>
                <textarea name="future_aspirations" id="" cols="30" rows="5" class="form-control" placeholder="Your answer...">
                  {{ old('future_aspirations') }}
                </textarea>

                @error('future_aspirations')
                  <span class="help text-danger" role="alert">
                      {{$errors->first('future_aspirations')}}
                  </span>
                @enderror
            </div>

            <div class="form-group col-md-12">
                <select name="are_you_interested_in_joining_the_board" id="" class="form-control" placeholder="">
                    <option value="" disabled selected>Are you interested in joining our leadership board ?</option>
                    <option value="Yes" {{ old('are_you_interested_in_joining_the_board') == 'Yes' ? 'selected' : '' }}>Yes</option>
                    <option value="No" {{ old('are_you_interested_in_joining_the_board') == 'No' ? 'selected' : '' }}>No</option>
                    <option value="Maybe" {{ old('are_you_interested_in_joining_the_board') == 'Maybe' ? 'selected' : '' }}>Maybe</option>
                </select>
            </div>
            
            <div class="form-group col-md-12">
                <label for=""> What are your interests in GMS? What do you hope the organization can do for Guinea, and Guineans abroad?</label>
                <textarea name="interests_in_gms" class="form-control" placeholder="You answer...">{{ old('interests_in_gms') }}</textarea>
                @error('interests_in_gms')
                  <span class="help text-danger" role="alert">
                      {{$errors->first('interests_in_gms')}}
                  </span>
                @enderror
            </div>

            <div class="form-group col-md-12">
                <select name="where_did_you_hear_from_us" id="" class="form-control" placeholder="Current Academic Position">
                    <option value="" disabled selected>How did you hear about us?</option>
                    <option value="Instagram" {{ old('where_did_you_hear_from_us') == 'Instagram' ? 'selected' : '' }} >Instagram</option>
                    <option value="Facebook" {{ old('where_did_you_hear_from_us') == 'Facebook' ? 'selected' : '' }}>Facebook</option>
                    <option value="LinkedIn" {{ old('where_did_you_hear_from_us') == 'LinkedIn' ? 'selected' : '' }}>LinkedIn</option>
                    <option value="YouTube" {{ old('where_did_you_hear_from_us') == 'YouTube' ? 'selected' : '' }}>YouTube</option>
                    <option value="Word of Mouth" {{ old('where_did_you_hear_from_us') == 'Word of Mouth' ? 'selected' : '' }}>Word of Mouth</option>
                    <option value="Guinean Medical Society Website" {{ old('where_did_you_hear_from_us') == 'Guinean Medical Society Website' ? 'selected' : '' }}>Guinean Medical Society Website</option>
                    <option value="Guinean Medical Society Partner Organizations" {{ old('where_did_you_hear_from_us') == 'Guinean Medical Society Partner Organizations' ? 'selected' : '' }}>Guinean Medical Society Partner Organizations</option>
                </select>

                @error('where_did_you_hear_from_us')
                  <span class="help text-danger" role="alert">
                      {{$errors->first('questions')}}
                  </span>
                @enderror
            </div>

            <div class="form-group col-md-12">
                <label for="">Please do let us know if you have any questions and/or comments <strong>(Leave empty if you dont have any) </strong> </label>
                <input name="questions" type="text" value="{{ old('questions') }}" class="form-control" placeholder="Your answer...">
                @error('questions')
                  <span class="help text-danger" role="alert">
                      {{$errors->first('questions')}} 
                  </span>
                @enderror
            </div>
            <div class="form-group col-sm-12">
              <button type="submit" class="btn btn-primary btn-round">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection 