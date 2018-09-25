@extends('layouts.auth')

@section('content')
  <div class="page-auth">
    <div id="particles-js" class="bg-dark">
      <div class="container">
        <div class="row screen_full_height">
          <div class="col-12 col-lg-6">
            <div class="h-100 d-flex align-items-center">
              <b2-register-form register-route="{{ route('register') }}"
                                login-route="{{ route('login') }}"
                                url-education="{{ route('inventory') }}"
                                url-freedom="{{ route('freedom') }}"
                                url-labels="{{ route('security_labels') }}"
                                class="auth-form">
              </b2-register-form>
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
