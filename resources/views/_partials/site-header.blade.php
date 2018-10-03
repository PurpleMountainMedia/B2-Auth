<div class="container fixed-top">
  <nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
    <a class="navbar-brand" href="{{ route('home') }}">
      <img src="{{ getB2Config('logo') }}" class="site_logo navbar-brand" alt="B2 Systems">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">

        <li class="nav-item">
          <a class="nav-link" href="{{ route('security_labels') }}">{{__('web.nav-labels')}}</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{__('web.nav-software')}}
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('inventory') }}">{{__('web.nav-education')}}</a>
            <a class="dropdown-item" href="{{ route('freedom') }}">{{__('web.nav-freedom')}}</a>
          </div>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{__('web.nav-services')}}
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('onsite-asset-discovery') }}">{{__('web.nav-discovery')}}</a>
          </div>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{__('web.label-contact')}}
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="tel:08006445766"><i class="far fa-phone"></i> 0800 644 5766</a>
            <a class="dropdown-item" href="mailto:help@b2systems.co.uk"><i class="far fa-envelope"></i> help@b2systems.co.uk</a>
          </div>
        </li>

        <li class="nav-item">
          @auth()
            <a class="nav-link text-primary" href="{{ route('web.dashboard.index') }}">
              <i class="far fa-user-circle"></i> {{ __('web.label-welcome') }}, {{ Auth::user()->first_name }}
            </a>
          @else
            <a class="nav-link text-primary" href="{{ route('login') }}">
              <i class="far fa-user-circle"></i> {{ __('web.label-login') }}
            </a>
          @endauth
        </li>
      </ul>
    </div>
  </nav>
</div>
