@extends('layouts.full')

@section('content')
  <div class="container-fluid h-100 text-center ">

    <div class="row">
      <div class="container">

      </div>
    </div>

    <div class="row h-100">
      <div class="col-md-4 bg-eams h-100 py-5 screen_full_height d-flex align-items-center">
        <div class="w-100">
          <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60" class="heroicon-package heroicon heroicon-sm d-block m-auto heroicon-inventory">
            <path class="heroicon-package-box heroicon-component-fill" d="M3 11h54v48h4V11zm18 12a2 2 0 0 0 2 2h14a2 2 0 0 0 0-4H23a2 2 0 0 0-2 2z"></path>
            <rect class="heroicon-package-lid heroicon-component-accent heroicon-component-fill" width="58" height="10" x="1" y="1"></rect>
            <path class="heroicon-package-handle heroicon-component-accent heroicon-component-fill" d="M18 23a5 5 0 0 1 5-5h14a5 5 0 0 1 0 10H23a5 5 0 0 1-5-5zm3 0a2 2 0 0 0 2 2h14a2 2 0 0 0 0-4H23a2 2 0 0 0-2 2z"></path>
            <rect class="heroicon-shadows" width="56" height="6" x="2" y="8"></rect>
            <path class="heroicon-outline" fill-rule="nonzero" d="M0 8V2C0 .9.9 0 2 0h56a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2v46a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V12a2 2 0 0 1-2-2V8zm2-6v6h18v1H2v1h56V2H2zm2 10v46h52V12H4zm20-4h2v1h-4V8h2zm22 0h2v1H28V8h18zM23 18h14a5 5 0 0 1 0 10H23a5 5 0 0 1 0-10zm0 1a4 4 0 0 0 0 8h14a4 4 0 0 0 0-8H23zm-3 4a3 3 0 0 1 3-3h14a3 3 0 1 1 0 6H23a3 3 0 0 1-3-3zm2 0a1 1 0 0 0 1 1h14a1 1 0 1 0 0-2H23a1 1 0 0 0-1 1z"></path>
          </svg>
          <h1 class="text-dark mt-4">Inventory</h1>
          <a class="btn btn-dark" href="{{ route('inventory') }}">Find Out More</a>
        </div>
      </div>
      <div class="col-md-4 bg-finance h-100 py-5 screen_full_height d-flex align-items-center">
        <div class="w-100">
          <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60" class="heroicon-calculator heroicon heroicon-sm d-block m-auto heroicon-finance">
            <rect class="heroicon-calculator-body heroicon-component-fill" width="46" height="38" x="7" y="21"></rect>
            <rect class="heroicon-calculator-top heroicon-component-accent heroicon-component-fill" width="46" height="20" x="7" y="1" transform="matrix(1 0 0 -1 0 22)"></rect>
            <rect class="heroicon-calculator-screen heroicon-component-fill" width="34" height="6" x="13" y="9"></rect>
            <path class="heroicon-calculator-buttons-numbers heroicon-component-fill" d="M11 25h8v6h-8v-6zm10 0h8v6h-8v-6zm10 0h8v6h-8v-6zm0 8h8v6h-8v-6zm-10 0h8v6h-8v-6zm-10 0h8v6h-8v-6zm0 8h8v6h-8v-6zm0 8h18v6H11v-6zm10-8h8v6h-8v-6zm10 0h8v6h-8v-6zm0 8h8v6h-8v-6z"></path>
            <path class="heroicon-calculator-buttons-equations heroicon-component-accent heroicon-component-fill" d="M41 25h8v6h-8v-6zm0 8h8v6h-8v-6zm0 8h8v6h-8v-6zm0 8h8v6h-8v-6z"></path>
            <path class="heroicon-shadows" d="M12 8h46l-1 1H13l-1-1zm-1 23h8v1h-8v-1zm10 0h8v1h-8v-1zm10 0h8v1h-8v-1zm10 0h8v1h-8v-1zm-30 8h8v1h-8v-1zm10 0h8v1h-8v-1zm10 0h8v1h-8v-1zm10 0h8v1h-8v-1zm-30 8h8v1h-8v-1zm10 0h8v1h-8v-1zm10 0h8v1h-8v-1zm10 0h8v1h-8v-1zm-30 8h18v1H11v-1zm20 0h8v1h-8v-1zm10 0h8v1h-8v-1zM8 22h44v1H8v-1z"></path>
            <path class="heroicon-outline" fill-rule="nonzero" d="M8 0h44a2 2 0 0 1 2 2v56a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2V2c0-1.1.9-2 2-2zm44 2H8v18h44V2zm0 20H8v36h44V22zM11 7h48v10H11V7zm1 1v8h46V8H12zm2 1h43v6H13V9h1zm32 1H14v4h42v-4zM27 4h7v1h-8V4h1zM12 49h17v6H11v-6h1zm16 1H12v4h16v-4zm4-1h7v6h-8v-6h1zm6 1h-6v4h6v-4zm3-1h8v6h-8v-6zm1 1v4h6v-4h-6zm-10-9h7v6h-8v-6h1zm6 1h-6v4h6v-4zm3-1h8v6h-8v-6zm1 1v4h6v-4h-6zm-30-1h7v6h-8v-6h1zm6 1h-6v4h6v-4zm3-1h8v6h-8v-6zm1 1v4h6v-4h-6zm10-9h7v6h-8v-6h1zm6 1h-6v4h6v-4zm3-1h8v6h-8v-6zm1 1v4h6v-4h-6zm-30-1h7v6h-8v-6h1zm6 1h-6v4h6v-4zm3-1h8v6h-8v-6zm1 1v4h6v-4h-6zm10-9h7v6h-8v-6h1zm6 1h-6v4h6v-4zm3-1h8v6h-8v-6zm1 1v4h6v-4h-6zm-30-1h7v6h-8v-6h1zm6 1h-6v4h6v-4zm3-1h8v6h-8v-6zm1 1v4h6v-4h-6z"></path>
          </svg>
          <h1 class="text-dark mt-4">Finance <span class="badge badge-danger">Coming Soon!</span></h1>
          <button disabled class="btn btn-dark" href="#">Find Out More</button>
        </div>
      </div>
      <div class="col-md-4 bg-people h-100 py-5 screen_full_height d-flex align-items-center">
        <div class="w-100">
          <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60" class="heroicon-couple2 heroicon heroicon-sm d-block m-auto heroicon-people">
            <path class="heroicon-couple2-male-top heroicon-component-accent heroicon-component-fill" d="M27 29.5V31a9.98 9.98 0 0 0 4.18 8.14l-3.66 1.54A9.78 9.78 0 0 0 22 48.99V60H0V42c0-3.32 2.4-7.2 5.36-8.68L14 29v1l6 6 6-6v-1l1 .5z"></path>
            <path class="heroicon-couple2-male-collar heroicon-component-accent heroicon-component-fill" d="M25 31v6.99c0 1.32-.2 1.4-1.12.48l-3.17-3.18.7-.7L25 31zm-5.7 4.3l-3.18 3.17c-.93.92-1.12.84-1.12-.48V31l3.59 3.59.7.7z"></path>
            <path class="heroicon-couple2-male-hair heroicon-component-fill" d="M32 9.34V8a5 5 0 0 0-2.12-4.1A5 5 0 0 0 25.01 0H11.99A5 5 0 0 0 8 8v10h4v-8h18v2c.8-1.08 1.83-1.99 3-2.66z"></path>
            <path class="heroicon-couple2-male-face heroicon-component-fill" d="M11 14.13V10h18v2a9.94 9.94 0 0 0-2 6v7.66c-.3.37-.64.73-1 1.05V30l-6 6-6-6v-3.3a9 9 0 0 1-2.8-4.78 4 4 0 0 1-.2-7.8z"></path>
            <path class="heroicon-couple2-male-mouth heroicon-component-fill" d="M17.17 23a3 3 0 0 1-.17-1h6a3 3 0 0 1-5.83 1z"></path>
            <path class="heroicon-couple2-female-top heroicon-component-accent heroicon-component-fill" d="M35.66 37.25l-8.14 3.43A9.78 9.78 0 0 0 22 48.99V60h48V49c0-3.3-2.47-7.04-5.52-8.32l-8.14-3.43-.34.24v2.5a5 5 0 0 1-10 0v-2.5a9.03 9.03 0 0 1-.34-.24z"></path>
            <path class="heroicon-couple2-female-collar heroicon-component-accent heroicon-component-fill" d="M46 39.28V40a5 5 0 0 1-10 0v-.72l-2.93 1.23a2 2 0 0 0 .55.93l.43.42-.17.58a2 2 0 0 0 1.45 2.5l.58.15.15.58a2 2 0 0 0 2.5 1.45l.58-.17.42.43a2 2 0 0 0 2.88 0l.42-.43.58.17a2 2 0 0 0 2.5-1.45l.15-.58.58-.15a2 2 0 0 0 1.45-2.5l-.17-.58.43-.42a2 2 0 0 0 .55-.93L46 39.28z"></path>
            <path class="heroicon-couple2-female-hair heroicon-component-fill" d="M48.54 38.18A8 8 0 0 0 53 31V17.6l-.04-.4a8 8 0 0 0-11.16-6.54l-.8.35-.8-.35a8 8 0 0 0-11.16 6.53l-.04.4V31a8 8 0 0 0 4.46 7.18l2.2-.93A8.99 8.99 0 0 1 32 30V19.8a10.05 10.05 0 0 0 9-2.66 9.97 9.97 0 0 0 9 2.66V30c0 2.97-1.44 5.6-3.66 7.25l2.2.93z"></path>
            <path class="heroicon-couple2-female-face heroicon-component-fill" d="M46 37.49A8.98 8.98 0 0 0 50 30V19.8a10.05 10.05 0 0 1-9-2.66 9.97 9.97 0 0 1-9 2.66V30a8.98 8.98 0 0 0 4 7.48V40a5 5 0 1 0 10 0v-2.51z"></path>
            <path class="heroicon-couple2-female-mouth heroicon-component-fill" d="M38 32a3 3 0 1 0 6 0h-6z"></path>
            <path class="heroicon-shadows" d="M14 29l-2.2 1.1A12.95 12.95 0 0 0 20 33c3.1 0 5.96-1.09 8.2-2.9L26 29v-2.3a8.97 8.97 0 0 1-12 0V29zm27 10c2 0 3.84-.65 5.34-1.75l4.08 1.71a12.96 12.96 0 0 1-18.84 0l4.08-1.71A8.96 8.96 0 0 0 41 39z"></path>
            <path class="heroicon-outline" fill-rule="nonzero" d="M37 8c1.42 0 2.78.3 4 .83A10 10 0 0 1 54.95 17H55v14a9.99 9.99 0 0 1-4.18 8.13l3.66 1.55A9.77 9.77 0 0 1 60 48.99V60H0V42c0-3.32 2.4-7.2 5.36-8.68L14 29v-2.3a9 9 0 0 1-2.8-4.78A4 4 0 0 1 8 18V8a5 5 0 0 1 4-8h13a5 5 0 0 1 4.88 3.91A5 5 0 0 1 32 8v1.34A9.95 9.95 0 0 1 37 8zm-8 2v2c.3-.4.64-.79 1-1.14V8a3 3 0 0 0-1.27-2.45l-.63-.45-.17-.75A3 3 0 0 0 25 2H12a3 3 0 1 0 0 6h17v2zm19.54 28.18A8 8 0 0 0 53 31V17.6l-.04-.4a8 8 0 0 0-11.16-6.54l-.8.35-.8-.35a8 8 0 0 0-11.16 6.53l-.04.4V31a8 8 0 0 0 4.46 7.18l2.2-.93A8.99 8.99 0 0 1 32 30V19.8a10.05 10.05 0 0 0 9-2.66 9.97 9.97 0 0 0 9 2.66V30c0 2.97-1.44 5.6-3.66 7.25l2.2.93zM38 40a3 3 0 1 0 6 0v-1.51a8.99 8.99 0 0 1-6 0V40zm8-.72V40a5 5 0 0 1-10 0v-.72l-2.93 1.23a2 2 0 0 0 .55.93l.43.42-.17.58a2 2 0 0 0 1.45 2.5l.58.15.15.58a2 2 0 0 0 2.5 1.45l.58-.17.42.43a2 2 0 0 0 2.88 0l.42-.43.58.17a2 2 0 0 0 2.5-1.45l.15-.58.58-.15a2 2 0 0 0 1.45-2.5l-.17-.58.43-.42a2 2 0 0 0 .55-.93L46 39.28zm-17.7 3.24a7.8 7.8 0 0 0-4.3 6.47V58h4v-8h1v8h26v-8h1v8h4v-9c0-2.5-2-5.51-4.3-6.48l-3.84-1.62a3 3 0 0 1-.78 1.26 3 3 0 0 1-2.17 3.75 3 3 0 0 1-3.75 2.17 3 3 0 0 1-4.32 0 3 3 0 0 1-3.75-2.17 3 3 0 0 1-2.17-3.75 3 3 0 0 1-.78-1.26l-3.84 1.62zm2.88-3.39a9.99 9.99 0 0 1-4.15-7.38L26 31.24v6.75c0 2.21-1.27 2.74-2.82 1.19L20 36l-3.18 3.18C15.26 40.74 14 40.2 14 37.99v-6.75L6.25 35.1C3.97 36.25 2 39.44 2 41.99V58h4V40h1v18h15v-9a9.78 9.78 0 0 1 5.52-8.32l3.66-1.55zM27 25.66a9.06 9.06 0 0 1-1 1.05V29l1 .5v-3.84zM25 31l-3.59 3.59-.7.7 3.17 3.18c.93.92 1.12.84 1.12-.48V31zm-5.7 4.3l-.71-.71L15 31v6.99c0 1.32.2 1.4 1.12.48l3.17-3.18zM27 12v-2H13v10a7 7 0 1 0 14 0v-8zM10 9.58v4.96c.3-.18.65-.32 1-.41V9.9a4.96 4.96 0 0 1-1-.32zm1 6.69a2 2 0 0 0 0 3.46v-3.46zm5 12.9l4 4 4-4v-1.1a8.96 8.96 0 0 1-8 0v1.1zM34 22v8a7 7 0 1 0 14 0v-8c-2.61 0-5.03-.84-7-2.25A11.95 11.95 0 0 1 34 22zM23 3v1h-8V3h8zm-3 38a1 1 0 1 1 0-2 1 1 0 0 1 0 2zm0 7a1 1 0 1 1 0-2 1 1 0 0 1 0 2zm1 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm-1-34c-.64 0-1.25-.15-1.79-.42l.45-.9a2.99 2.99 0 0 0 2.68 0l.45.9c-.54.27-1.15.42-1.79.42zm-2.83 3a3 3 0 0 1-.17-1h6a3 3 0 0 1-5.83 1zm1.1 0a2 2 0 0 0 3.46 0h-3.46zM17 17a1 1 0 1 1 0-2 1 1 0 0 1 0 2zm7-1a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm14 16h6a3 3 0 1 1-6 0zm3 2a2 2 0 0 0 1.73-1h-3.46c.34.6.99 1 1.73 1zm-1.79-4.42l.45-.9a2.99 2.99 0 0 0 2.68 0l.45.9a3.98 3.98 0 0 1-3.58 0zM38 26a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 1a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"></path>
          </svg>
          <h1 class="text-dark mt-4">People <span class="badge badge-danger">Coming Soon!</span></h1>
          <button disabled class="btn btn-dark" href="#">Find Out More</button>
        </div>
      </div>
    </div>
  </div>
@endsection
