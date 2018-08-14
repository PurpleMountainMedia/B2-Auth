<div class="container">
  <nav class="navbar navbar-light bg-light shadow">
    <a class="navbar-brand" href="/">
      <img src="{{ url('storage/b2_logo1.png') }}" class="site_logo" alt="B2 Systems">
    </a>
    @auth()
      <a class="" href="{{ route('login') }}">
        {{ __('Welcome') }}, {{ Auth::user()->first_name }} | {{ __('Logout') }}
      </a>
    @else
      <a class="" href="{{ route('login') }}">
        <i class="far fa-user-circle"></i> {{ __('Login') }}
      </a>
    @endauth
  </nav>
</div>
