<footer class="footer space-pt bg-light">
    <div class="container">
      <div class="row space-pb">
        <div class="col-lg-3 col-md-6">
          <div class="footer-contact-info">
            <a href="index.html"><img class="img-fluid footer-logo mb-4" src="images/logo-dark.svg" alt=""></a>
            <p class="text-dark mb-4">Subscribe to our newsletter to receive emails about the GMS event, news, releases and updates
            </p>
            <div class="footer-subscribe">
              <h6 class="mb-3">Sign up to our newsletter</h6>
              <form  method="POST" action="{{ route('create_news_letter') }}">
                @csrf
                <div class="form-group">
                  <input type="email" name="news_email" value="{{ old('news_email') }}" class="form-control" placeholder="Your Email">
                  @error('news_email')
                    <span class="help text-danger" role="alert">
                        {{$errors->first('news_email')}} 
                    </span>
                  @enderror
                </div>
                  @if(session()->has('message'))
                      <div class="alert alert-primary alert-dismissible fade show" role="alert">
                        <p><strong>{{ session()->get('message') }}</strong></p>
                      </div>
                  @endif
                <button type="submit" class="btn btn-primary btn-round">Get Notified</button>
              </form>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mt-4 mt-md-0 pl-lg-5">
          <div class="footer-link">
            <h5>Links</h5>
            <ul class="list-unstyled mb-0">
              <li><a href="{{ route('welcome') }}" target="_blank">Home</a></li>
              <li><a href="{{ route('contact_us.index') }}">Contact Us</a></li>
              <li><a href="{{ route('join_team.index') }}">Join Us</a></li>
              <li><a href="{{ route('news.index') }}">News</a></li>
              {{-- <li><a href="https://drive.google.com/file/d/1QIGAU0Fz1D8vOlIP46ZcZfCygwsfkaVM/view">Access Our Constitution</a></li> --}}
            </ul>
          </div>
        </div>
        
        <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
          <h5>Contact</h5>
          <div class="footer-contact-info">
            <ul class="list-unstyled mb-0">
              <li><i class="fas fa-envelope-open-text text-primary"></i><span>goheal.guinea@gmail.com</span></li>
            </ul>
          </div>
          <div class="social-icon">
            <ul>
              <li><a href="https://www.facebook.com/Guinean-Medical-Society-111385833609089" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
              <li><a href="https://www.instagram.com/guineanmedicalsociety/" target="_blank"><i class="fab fa-instagram"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
          <div class="footer-link">
            <h5>Admin Links</h5>
            <ul class="list-unstyled mb-0">
              <li><a href="/admin" target="_blank">Pannel</a></li>
            </ul>
              
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-12 text-center copyright">
            <p class="mb-0 text-white"> &copy; Copyright <span id="copyright"> <script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script></span> <a href="{{ route('welcome') }}"> GMS </a> All Rights Reserved</p>
          </div>
        </div>
      </div>
    </div>
  </footer>