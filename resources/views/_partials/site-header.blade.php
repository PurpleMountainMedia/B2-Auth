<div class="container">
  <nav class="navbar navbar-light bg-light shadow">
    <a class="navbar-brand" href="/">
      <img src="{{ getB2Config('logo') }}" class="site_logo" alt="B2 Systems">
    </a>
    @auth()
      <div class="">
        <a class="" href="{{ route('dashboard') }}">
          {{ __('Welcome') }}, {{ Auth::user()->first_name }} <i class="fal fa-user-circle"></i>
        </a>
        |
        <a href="#" onclick="event.preventDefault(); document.getElementById('logout_form').submit();" class="text-danger">{{ __('Logout') }} <i class="fal fa-sign-out-alt"></i></a>

        <form action="{{ route('logout') }}" method="post" id="logout_form">
          @csrf
        </form>

      </div>

    @else
      <a class="" href="{{ route('login') }}">
        <i class="far fa-user-circle"></i> {{ __('Login') }}
      </a>
    @endauth
  </nav>
</div>
