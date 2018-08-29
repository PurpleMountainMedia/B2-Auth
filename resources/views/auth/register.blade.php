@extends('layouts.auth')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <b2-register-form register-route="{{ route('register') }}"
                        login-route="{{ route('login') }}">
      </b2-register-form>
    </div>
  </div>
</div>
@endsection
