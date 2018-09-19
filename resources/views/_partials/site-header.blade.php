<div class="container">
  <nav class="navbar navbar-light bg-light shadow">
    <a class="navbar-brand" href="/">
      <img src="{{ getB2Config('logo') }}" class="site_logo" alt="B2 Systems">
    </a>
    @auth()
      <a class="" href="{{ route('login') }}">
        {{ __('Welcome') }}, {{ Auth::user()->first_name }} | Go to Account
      </a>
    @else
      <a class="" href="{{ route('login') }}">
        <i class="far fa-user-circle"></i> {{ __('Login') }}
      </a>
    @endauth
  </nav>
</div>
