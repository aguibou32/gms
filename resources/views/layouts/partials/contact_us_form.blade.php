<div class="section-title">
    <h2 class="title">Let’s Get In Touch!</h2>
    @if(session()->has('message'))
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
          <p><strong>{{ session()->get('message') }}</strong></p>
        </div>
    @endif
  </div>
  <form action="{{ route('contact_us.store') }}" method="POST">
    @csrf
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <input type="text" name="first_name"  value="{{ old('first_name') }}" id="first-name" class="form-control" placeholder="First Name">
                @error('first_name')
                  <span class="help text-danger" role="alert">
                      {{$errors->first('first_name')}} 
                  </span>
                @enderror
            </div>
        </div>
        
        <div class="col-lg-6">
            <div class="form-group">
                <input name="last_name" type="text" value="{{ old('last_name') }}" class="form-control" placeholder="Last Name">
                @error('last_name')
                  <span class="help text-danger" role="alert">
                      {{$errors->first('last_name')}} 
                  </span>
                @enderror
            </div>
        </div>

        <div class="col-lg-6">
          <div class="form-group">
              <input type="text" name="email" value="{{ old('email') }}" class="form-control" placeholder="Email">
              @error('email')
                <span class="help text-danger" role="alert">
                    {{$errors->first('email')}} 
                </span>
              @enderror
          </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
              <input name="email_confirmation" value="{{ old('email_confirmation') }}" onpaste="return false;" id="email-confirm" type="email" class="form-control" placeholder="Re-enter your email" >
                @error('email_confirmation')
                  <span class="help text-danger" role="alert">
                      {{$errors->first('email_confirmation')}} 
                  </span>
                @enderror
            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-group">
                <textarea name="message" class="form-control" rows="5" spellcheck="false">
                  {{ old('message') }}
                </textarea>
            </div>
            @error('message')
              <span class="help text-danger" role="alert">
                  {{$errors->first('message')}} 
              </span>
            @enderror
        </div>

        <div class="col-lg-12 mt-3">
            <div class="causes-details-btn">
                <button type="submit" class="btn btn-primary btn-round">Submit</button>
            </div>
        </div>
    </div>
  </form>
</div>