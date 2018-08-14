@extends('layouts.auth')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6">

      <b2-login-form login-route="{{ route('login') }}"
                     forgotten-password-route="{{ route('password.request') }}">
      </b2-login-form>
    </div>
  </div>
</div>
@endsection
