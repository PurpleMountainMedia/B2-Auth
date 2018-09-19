@extends('layouts.site')

@section('below_nav')
  <div id="particles-js" class="bg-dark">
    <div class="below_nav_container container-fluid p-5 d-flex align-items-center">
      <div class="container">
        <h2 class="text-white font-weight-light">Education Inventory</h2>
        <a class="btn btn-eams btn-sm" href="https://ei.b2systems.co.uk/dashboard">Go To Product Dashboard</a>
      </div>
    </div>
  </div>
  <div class="container-fluid below_nav_container_buffer"></div>
@endsection

@section('content')
  <div class="container">
    <div class="row">

    </div>
  </div>
@endsection

@push('scripts')
    <script src="{{ mix('js/particles.js') }}" charset="utf-8"></script>
    <script src="{{ mix('js/particles-config.js') }}" charset="utf-8"></script>
@endpush
