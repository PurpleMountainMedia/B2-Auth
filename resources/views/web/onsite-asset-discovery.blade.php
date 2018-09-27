@extends('layouts.site')

@section('below_nav')
  <div id="particles-js" class="bg-dark">
    <div class="below_nav_container container-fluid p-5 d-flex align-items-center">
      <div class="container">
        <h2 class="text-white font-weight-light">{{__('web.title-discovery-hero-primary')}}</h2>
        <p class="text-white">{{__('web.title-discovery-hero-sub')}}</p>
      </div>
    </div>
  </div>
  <div class="container-fluid below_nav_container_buffer"></div>
@endsection

@section('content')
  <div class="container mt-5 pt-5">
  </div>
@endsection
