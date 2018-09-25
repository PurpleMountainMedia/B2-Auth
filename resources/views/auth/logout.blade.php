@extends('layouts.site')

@section('content')
  <div class="page-auth">
    <div id="particles-js" class="bg-dark">
      <div class="container py-4">
        <div class="row screen_full_height">
          <div class="col-12 col-lg-8" style="text-align: center;">
            <div class="h-100 d-flex align-items-center">
              <a class="btn btn-outline-danger" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
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
