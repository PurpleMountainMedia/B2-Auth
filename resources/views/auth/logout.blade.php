@extends('layouts.auth')

@section('content')
  <div class="page-auth">
    <div id="particles-js" class="bg-dark">
      <div class="container">
        <div class="row screen_full_height d-flex justify-content-center">
          <div class="col-lg-8 col-12">
            <div class="h-100 d-flex align-items-center">
              <div class="w-100 text-center particles-above">
                <el-card class="py-5">
                    <h3 class="mb-4">{{ __('app.title-logout-confirm') }}</h3>
                    <a class="btn btn-outline-primary" href="{{ route('dashboard') }}">
                        {{ __('app.label-logout-return') }}
                    </a>
                    <a class="btn btn-danger" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        {{ __('app.label-logout-confirm') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" hidden>
                        @csrf
                    </form>
                </el-card>
              </div>
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
