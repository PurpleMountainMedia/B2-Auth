@extends('layouts.auth')

@section('content')
  <div class="page-auth">
    <div id="particles-js" class="bg-dark">
      <div class="container">
        <div class="row screen_full_height d-flex justify-content-center">
          <div class="col-lg-8 col-12">
            <div class="h-100 d-flex align-items-center">
              <b2-login-form login-route="{{ route('login') }}"
                             forgotten-password-route="{{ route('password.request') }}"
                             url-return="{{ route('home') }}"
                             class="auth-form">
              </b2-login-form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('scripts')
    <script src="{{ mix('js/particles.js') }}" charset="utf-8"></script>
    <script src="{{ mix('js/particles-config.js') }}" charset="utf-8"></script>
@endpush
