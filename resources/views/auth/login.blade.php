@extends('layouts.auth')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <b2-login-form login-route="{{ route('login') }}"
                     home-route="{{ route('home') }}"
                     logo="{{ url('storage/b2_logo1.png') }}"
                     forgotten-password-route="{{ route('password.request') }}"
                     csrf-token="{{ csrf_token() }}"
                     :old-input='@json(session()->getOldInput())'
                     :form-errors='{{$errors}}'>
      </b2-login-form>
    </div>
  </div>
</div>
@endsection
