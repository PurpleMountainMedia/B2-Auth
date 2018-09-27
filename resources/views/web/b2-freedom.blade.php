@extends('layouts.site')

@section('below_nav')
  <div>
    <div class="below_nav_container container-fluid p-5 d-flex align-items-center header_image" id="freedom_header">
      <div class="container header_container_inner">
        <h2 class="text-dark font-weight-strong">B2 Freedom Tool</h2>
        <p class="text-dark font-weight-strong">Automated IT Discovery Tool</p>
      </div>
    </div>
  </div>
  <div class="container-fluid below_nav_container_buffer"></div>
@endsection

@push('header_scripts')
  <style media="screen">
    #freedom_header {
      background: url({{ url('storage/web/b2_freedom_screen.png') }});
      background-size: cover;
      background-position: center;
    }
    .header_image::after {
      position: absolute;
      left: 0;
      top: 0;
      height: 100%;
      width: 100%;
      background: rgba(255, 255, 255, 0.54);
      content: "";
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='4' height='4' viewBox='0 0 4 4'%3E%3Cpath fill='%233a3a3a' fill-opacity='0.41' d='M1 3h1v1H1V3zm2-2h1v1H3V1z'%3E%3C/path%3E%3C/svg%3E");
    }
    .header_container_inner {
      z-index: 100;
    }
  </style>
@endpush

@section('content')
  <div class="container mt-5 pt-5">
  </div>

  <div class="container py-4">
    <div class="row">
      <div class="col-md-12">
        <h1 class="mt-4">{{__('web.body-freedom-section1-line1')}}</h1>
        <p>{{__('web.body-freedom-section1-line2')}}</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 py-5">
        {!!__('web.body-freedom-section1-line3')!!}

        <p>{{__('web.body-freedom-section1-line4')}} <a href="{{ route('inventory') }}" class="text-primary">{{__('web.body-freedom-section1-button1')}}</a> {{__('web.body-freedom-section1-line5')}}</p>

        <a href="#downloads" class="btn btn-outline-primary btn-lg mt-4">{{__('web.body-freedom-section1-button2')}}</a>

      </div>
      <div class="col-md-6 pt-1">
        <img class="img-fluid" src="{{ url('storage/web/freedom_screenshot2.png') }}" alt="Freedom">
      </div>
    </div>
  </div>

  <div class="bg1 py-5 my-4 container-fluid">
    <div class="row py-5">
      <div class="col-md-12 py-5">
        {{-- BG Image --}}
      </div>
    </div>
  </div>

  <div id="downloads" class="container py-5">
    <h2 class="text-center font-weight-bold pt-5">{{__('web.body-freedom-section2-line1')}}</h2>

    <div class="row py-4 my-5">
      <div class="col-12 order-md-first order-last">
        <div class="row">
          <div class="col-md-4 my-3 py-4 text-center">
            <i class="fab fa-windows fa-6x text-primary"></i>
            <h3 class="text-center mt-4">{{__('web.body-freedom-section2-windows')}}</h3>
            <div class="mb-2">
              <a class="btn btn-primary" href="">.exe (40mb)</a>
            </div>
          </div>
          <div class="col-md-4 my-3 py-4 text-center">
            <i class="fab fa-apple fa-6x text-primary"></i>
            <h3 class="text-center mt-4">{{__('web.body-freedom-section2-osx')}}</h3>
            <div class="mb-2">
              <a class="btn btn-primary" href="">.dmg (40mb)</a>
            </div>
          </div>
          <div class="col-md-4 my-3 py-4 text-center">
            <i class="fab fa-linux fa-6x text-primary"></i>
            <h3 class="text-center mt-4">{{__('web.body-freedom-section2-linux')}}</h3>
            <div class="mb-2">
              <a class="btn btn-primary" href="">.sh (40mb)</a>
            </div>
            <div class="mb-2">
              <a class="btn btn-outline-primary btn-sm" href="">.tar.gz (40mb)</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 order-md-last order-first mb-md-0 mb-5">
        <div class="row">
          <div class="col-md-6 my-3 py-4 text-center">
            <i class="fab fa-app-store fa-6x text-primary"></i>
            <h3 class="text-center mt-4">{{__('web.body-freedom-section2-ios')}}</h3>
            <div class="mb-2">
              <a class="btn btn-primary" href="">{{__('web.body-freedom-section2-ios-download')}}</a>
            </div>
          </div>
          <div class="col-md-6 my-3 py-4 text-center">
            <i class="fab fa-android fa-6x text-primary"></i>
            <h3 class="text-center mt-4">{{__('web.body-freedom-section2-android')}}</h3>
            <div class="mb-2">
              <a class="btn btn-primary" href="">{{__('web.body-freedom-section2-android-download')}}</a>
            </div>
            <div class="mb-2">
              <a class="btn btn-outline-primary btn-sm" href="">.apk (40mb)</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection

@push('header_scripts')
  <style media="screen">
    .bg1 {
      background: url({{ url('storage/web/freedom_spacer_img.jpg') }});
      background-position: center;
      background-size: cover;
    }
  </style>
@endpush
