@extends('layouts.site')

@section('below_nav')
  <div id="particles-js" class="bg-dark">
    <div class="below_nav_container container-fluid p-5 d-flex align-items-center">
      <div class="container">
        <h2 class="text-white font-weight-light">Security Labels</h2>
        <p class="text-white">Tamper proof and barcoded</p>
      </div>
    </div>
  </div>
  <div class="container-fluid below_nav_container_buffer"></div>
@endsection

@section('content')
  <div class="container mt-5 pt-5">
  </div>

  <div class="container py-4">
    <div class="row">
      <div class="col-md-12">
        <h1 class="mt-4">Barcoded Security Labels</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 py-5">
        <p>Our barcoded security labels are not only a quick and easy way of updating inventory location within your school, they act as a form of protection against theft and item mistreatment. Accompanied with the B2 Scan app for IOS and Android, users can simply select a location and then scan the asset.</p>

        <p>Our barcoded security labels are not only a quick and easy way of updating inventory location within your school, they act as a form of protection against theft and item mistreatment. Accompanied with the B2 Scan app for IOS and Android, users can simply select a location and then scan the asset.</p>



      </div>
      <div class="col-md-6 pr-0 pt-1">
        <label-chooser-component
          title="Barcoded Security Labels">
        </label-chooser-component>
      </div>
    </div>
  </div>
@endsection

@push('scripts')
    <script src="{{ mix('js/particles.js') }}" charset="utf-8"></script>
    <script src="{{ mix('js/particles-config.js') }}" charset="utf-8"></script>
@endpush
