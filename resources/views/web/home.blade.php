@extends('layouts.site')

@section('below_nav')
  <div class="page-home">
    <div id="particles-js" class="bg-dark">
      <div class="below_nav_container container-fluid p-5 d-flex align-items-center">
        <div class="container">
          <h2 class="text-white font-weight-light">Your Data, Our Insights</h2>
          <a class="btn btn-primary btn-sm" href="{{ route('our-products') }}">Our Products</a>
        </div>
      </div>
    </div>
    <div class="container-fluid below_nav_container_buffer"></div>
  </div>
@endsection

@section('content')
  
  @component('_partials.site-products')
  @endcomponent

  <div class="container mt-4 py-5">
    <div class="row">
      <div class="col-md-12">
        <p>B2 Systems specialise in Financial and Assett Management Products for the Education Sector. We have a Global reach and work with Schools, Academies & Colleges in the UK, Europe, Middle East & USA.</p>
        <p>Whether it be Asset / Inventory, Budgeting, Audit, Facilities Management we can help.</p><p>Our products enable strategic financial planning, operational efficiency and value for money. We understand that budgets are key and as such have developed our systems so that costs are kept to a minimum.</p>

        <a class="btn btn-outline-primary" href="{{ route('register') }}">Get Started For <span class="badge badge-secondary">Free</span> With B2 Systems</a>
      </div>
    </div>
  </div>

  <div class="py-5 bg-primary mt-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h3 class="text-white text-center">Looking For Education</h3>
          <h3 class="text-white text-center">Inventory & Finance Software?</h3>

          <p class="text-white text-center mt-4">Here are just some of the key benefits of our software</p>

          <div class="row text-white text-center pt-5">
            <div class="col-md-6 mt-5">
              <i class="far fa-5x fa-shield-alt"></i>
              <h3 class="my-5">UK Cloud Based & Secure</h3>
            </div>
            <div class="col-md-6 mt-5">
              <i class="far fa-5x fa-bell"></i>
              <h3 class="my-5">Inteligent Alerts</h3>
            </div>
          </div>


          <div class="row text-white text-center pt-5">
            <div class="col-md-6 mt-5">
              <i class="fal fa-5x fa-money-bill"></i>
              <h3 class="my-5">Cost Efficient</h3>
            </div>
            <div class="col-md-6 mt-5">
              <i class="far fa-5x fa-globe"></i>
              <h3 class="my-5">Inteligent Alerts</h3>
            </div>
          </div>

          <div class="row text-white text-center pt-5">
            <button type="button" class="btn btn-secondary btn-lg m-auto" name="button">Contact Us</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="py-5 bg-light mt-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h4>Comprehensive Training & Support</h4>
        </div>
        <div class="col-md-3 py-4">
          <iframe width="100%" height="150" src="https://www.youtube.com/embed/TiMVsHwji_w?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
        <div class="col-md-3 py-4">
          <iframe width="100%" height="150" src="https://www.youtube.com/embed/0Oi4WAbYs7U?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
        <div class="col-md-3 py-4">
          <iframe width="100%" height="150" src="https://www.youtube.com/embed/5udL-fdODTg?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
        <div class="col-md-3 py-4">
          <iframe width="100%" height="150" src="https://www.youtube.com/embed/igLpdOBR5G4?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>

  <div class="py-5 bg-white mt-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h4 class="pull-right">Tools For Modern Schools & Academies</h4>
        </div>
        <div class="col-md-4 py-4">
          <div class="card bg-light shadow-sm border-0 text-center">
            <div class="card-body">
              <h5 class="card-title mb-4">Reporting</h5>
              <p>Generate detailed reports in a click of a button</p>
              <hr>
              <p>Compare historic reports to gain greater insight</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 py-4">
          <div class="card bg-light shadow-sm border-0 text-center">
            <div class="card-body">
              <h5 class="card-title mb-4">Integrations</h5>
              <p>Integrate with other products using our REST API</p>
              <hr>
              <p>Stream purchases for instant reporting</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 py-4">
          <div class="card bg-light shadow-sm border-0 text-center">
            <div class="card-body">
              <h5 class="card-title mb-4">Logs</h5>
              <p>PAT testing and repair log features built in</p>
              <hr>
              <p>All actions recorded for peace of mind</p>
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
