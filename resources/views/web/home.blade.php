@extends('layouts.site')

@section('below_nav')
  <div id="particles-js" class="bg-dark">
    <div class="below_nav_container container-fluid p-5 d-flex align-items-center">
      <div class="container">
        <h2 class="text-white font-weight-light">Software for Education</h2>
        <a class="btn btn-primary btn-sm" href="{{ route('our-products') }}">Our Products</a>
      </div>
    </div>
  </div>
  <div class="container-fluid below_nav_container_buffer"></div>

@endsection

@section('content')
  <div class="container">
    <div class="row">

      <div class="col-md-4 p-3">
        <div class="card shadow-sm border-0">
          <a class="product_link" href="{{ route('inventory') }}">
            <div class="card-body">
              <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60" class="heroicon-package heroicon heroicon-sm d-block m-auto heroicon-inventory">
                <path class="heroicon-package-box heroicon-component-fill" d="M3 11h54v48h4V11zm18 12a2 2 0 0 0 2 2h14a2 2 0 0 0 0-4H23a2 2 0 0 0-2 2z"></path>
                <rect class="heroicon-package-lid heroicon-component-accent heroicon-component-fill" width="58" height="10" x="1" y="1"></rect>
                <path class="heroicon-package-handle heroicon-component-accent heroicon-component-fill" d="M18 23a5 5 0 0 1 5-5h14a5 5 0 0 1 0 10H23a5 5 0 0 1-5-5zm3 0a2 2 0 0 0 2 2h14a2 2 0 0 0 0-4H23a2 2 0 0 0-2 2z"></path>
                <rect class="heroicon-shadows" width="56" height="6" x="2" y="8"></rect>
                <path class="heroicon-outline" fill-rule="nonzero" d="M0 8V2C0 .9.9 0 2 0h56a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2v46a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V12a2 2 0 0 1-2-2V8zm2-6v6h18v1H2v1h56V2H2zm2 10v46h52V12H4zm20-4h2v1h-4V8h2zm22 0h2v1H28V8h18zM23 18h14a5 5 0 0 1 0 10H23a5 5 0 0 1 0-10zm0 1a4 4 0 0 0 0 8h14a4 4 0 0 0 0-8H23zm-3 4a3 3 0 0 1 3-3h14a3 3 0 1 1 0 6H23a3 3 0 0 1-3-3zm2 0a1 1 0 0 0 1 1h14a1 1 0 1 0 0-2H23a1 1 0 0 0-1 1z"></path>
              </svg>
              <h4 class="text-center mt-3 text-dark">Inventory</h4>
            </div>
          </a>
        </div>
      </div>

      <div class="col-md-4 p-3">
        <div class="card shadow-sm border-0">
          <a class="product_link" href="">
            <div class="card-body">
              <span class="badge badge-secondary coming_soon">Coming Soon</span>
              <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60" class="heroicon-calculator heroicon heroicon-sm d-block m-auto heroicon-finance">
                <rect class="heroicon-calculator-body heroicon-component-fill" width="46" height="38" x="7" y="21"></rect>
                <rect class="heroicon-calculator-top heroicon-component-accent heroicon-component-fill" width="46" height="20" x="7" y="1" transform="matrix(1 0 0 -1 0 22)"></rect>
                <rect class="heroicon-calculator-screen heroicon-component-fill" width="34" height="6" x="13" y="9"></rect>
                <path class="heroicon-calculator-buttons-numbers heroicon-component-fill" d="M11 25h8v6h-8v-6zm10 0h8v6h-8v-6zm10 0h8v6h-8v-6zm0 8h8v6h-8v-6zm-10 0h8v6h-8v-6zm-10 0h8v6h-8v-6zm0 8h8v6h-8v-6zm0 8h18v6H11v-6zm10-8h8v6h-8v-6zm10 0h8v6h-8v-6zm0 8h8v6h-8v-6z"></path>
                <path class="heroicon-calculator-buttons-equations heroicon-component-accent heroicon-component-fill" d="M41 25h8v6h-8v-6zm0 8h8v6h-8v-6zm0 8h8v6h-8v-6zm0 8h8v6h-8v-6z"></path>
                <path class="heroicon-shadows" d="M12 8h46l-1 1H13l-1-1zm-1 23h8v1h-8v-1zm10 0h8v1h-8v-1zm10 0h8v1h-8v-1zm10 0h8v1h-8v-1zm-30 8h8v1h-8v-1zm10 0h8v1h-8v-1zm10 0h8v1h-8v-1zm10 0h8v1h-8v-1zm-30 8h8v1h-8v-1zm10 0h8v1h-8v-1zm10 0h8v1h-8v-1zm10 0h8v1h-8v-1zm-30 8h18v1H11v-1zm20 0h8v1h-8v-1zm10 0h8v1h-8v-1zM8 22h44v1H8v-1z"></path>
                <path class="heroicon-outline" fill-rule="nonzero" d="M8 0h44a2 2 0 0 1 2 2v56a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2V2c0-1.1.9-2 2-2zm44 2H8v18h44V2zm0 20H8v36h44V22zM11 7h48v10H11V7zm1 1v8h46V8H12zm2 1h43v6H13V9h1zm32 1H14v4h42v-4zM27 4h7v1h-8V4h1zM12 49h17v6H11v-6h1zm16 1H12v4h16v-4zm4-1h7v6h-8v-6h1zm6 1h-6v4h6v-4zm3-1h8v6h-8v-6zm1 1v4h6v-4h-6zm-10-9h7v6h-8v-6h1zm6 1h-6v4h6v-4zm3-1h8v6h-8v-6zm1 1v4h6v-4h-6zm-30-1h7v6h-8v-6h1zm6 1h-6v4h6v-4zm3-1h8v6h-8v-6zm1 1v4h6v-4h-6zm10-9h7v6h-8v-6h1zm6 1h-6v4h6v-4zm3-1h8v6h-8v-6zm1 1v4h6v-4h-6zm-30-1h7v6h-8v-6h1zm6 1h-6v4h6v-4zm3-1h8v6h-8v-6zm1 1v4h6v-4h-6zm10-9h7v6h-8v-6h1zm6 1h-6v4h6v-4zm3-1h8v6h-8v-6zm1 1v4h6v-4h-6zm-30-1h7v6h-8v-6h1zm6 1h-6v4h6v-4zm3-1h8v6h-8v-6zm1 1v4h6v-4h-6z"></path>
              </svg>
              <h4 class="text-center mt-3 text-dark">Finance</h4>
            </div>
          </a>
        </div>
      </div>

      <div class="col-md-4 p-3">
        <div class="card shadow-sm border-0">
          <a class="product_link" href="">
            <div class="card-body">
              <span class="badge badge-secondary coming_soon">Coming Soon</span>
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
              <h4 class="text-center mt-3 text-dark">People</h4>
            </div>
          </a>
        </div>
      </div>

    </div>
  </div>

  <div class="container mt-4 py-5">
    <div class="row">
      <div class="col-md-12">
        <p>B2 Systems specialise in Financial and Assett Management Products for the Education Sector. We have a Global reach and work with Schools, Academies & Colleges in the UK, Europe, Middle East & USA.</p>
        <p>Whether it be Asset / Inventory, Budgeting, Audit, Facilities Management we can help.</p><p>Our products enable strategic financial planning, operational efficiency and value for money. We understand that budgets are key and as such have developed our systems so that costs are kept to a minimum.</p>

        <a class="btn btn-outline-primary" href="{{ route('register') }}">Get Started For <span class="badge badge-secondary">Free</span> With B2 Systems</a>
      </div>
    </div>
  </div>

  <div class="py-5 bg-primary mt-5 pattern_bg_primary">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h3 class="text-white text-center">Looking For Education</h3>
          <h3 class="text-white text-center">Inventory & Finance Software?</h3>

          <p class="text-white text-center mt-4">Here are just some of the key benefits of our software</p>

          <div class="row text-white text-center pt-5">
            <div class="col-md-6 mt-5">
              <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100" class="heroicon-cloud-lock heroicon heroicons-lg d-block m-auto heroicon-primary-inverse">
                  <path class="heroicon-cloud-lock-background heroicon-component-fill" fill="#FFFFFF" d="M83 74a17 17 0 0 0 3.93-33.54 15 15 0 0 0-18.08-16.13 27 27 0 0 0-50 5.9A22 22 0 0 0 22 74h61z"></path>
                  <circle class="heroicon-cloud-lock-circle heroicon-component-accent heroicon-component-fill" cx="50" cy="73" r="18" fill="#7ACFC0"></circle>
                  <path class="heroicon-cloud-lock-symbol heroicon-component-fill" fill="#FFFFFF" d="M56 71h3v10H41V71h3v-2a6 6 0 0 1 12 0v2zm-4 0v-2a2 2 0 1 0-4 0v2h4z"></path>
                  <path class="heroicon-shadows" fill="#000000" d="M32.7 68a18 18 0 0 0-.67 6H22A22 22 0 0 1 .83 46H2.1A20 20 0 0 0 22 68h10.7zm64.84-19.8a16.91 16.91 0 0 1 2.45 8.3A18 18 0 0 1 82 74H67.97a18.29 18.29 0 0 0-.67-6H82a16 16 0 0 0 15.54-19.8z" opacity=".2"></path>
                  <path class="heroicon-outline" fill="#4A4A4A" fill-rule="nonzero" d="M83 74H67.97a18 18 0 0 1-35.94 0H22a22 22 0 0 1-3.14-43.78 27.01 27.01 0 0 1 49.99-5.89 15 15 0 0 1 18.08 16.13A17 17 0 0 1 83 74zm-15.03-2H83a15 15 0 0 0 1.63-29.91A13.03 13.03 0 0 0 72 26c-1.48 0-2.9.25-4.21.7a25 25 0 0 0-47.3 5.36A20 20 0 0 0 22 72h10.03a18 18 0 0 1 34.95-5H83a10 10 0 0 0 8.95-5.53l.9.45A11 11 0 0 1 83 68H67.3c.37 1.28.6 2.62.67 4zM66 73a16 16 0 1 0-32 0 16 16 0 0 0 32 0zM45 16v1a20 20 0 0 0-17.9 11.05l-.89-.44A21 21 0 0 1 45 16zm-8.04 62.11A14 14 0 0 1 50 59v1a13 13 0 0 0-12.13 17.69l-.9.42zM56 71h3v10H41V71h3v-2a6 6 0 0 1 12 0v2zm-14 9h16v-6H42v6zm16-8H42v1h16v-1zm-3-1v-2a5 5 0 1 0-10 0v2h2v-2a3 3 0 0 1 6 0v2h2zm-3 0v-2a2 2 0 1 0-4 0v2h4z"></path>
              </svg>

              <h3 class="my-4">UK Cloud Based & Secure</h3>
            </div>
            <div class="col-md-6 mt-5">
              <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100" class="heroicon-bell heroicon heroicons-lg d-block m-auto heroicon-primary-inverse">
                  <path class="heroicon-bell-bowl heroicon-component-fill" fill="#FFFFFF" d="M86 79c.57.76 1.24 1.43 2 2H12a9.97 9.97 0 0 0 4-8V42a34 34 0 1 1 68 0v31c0 1.83.49 3.53 1.34 5l.66 1z"></path>
                  <path class="heroicon-bell-lip heroicon-component-accent heroicon-component-fill" fill="#7ACFC0" d="M6 83h92v3a3 3 0 0 1-3 3H5a3 3 0 0 1-3-3v-3h4z"></path>
                  <path class="heroicon-bell-top heroicon-component-accent heroicon-component-fill" fill="#7ACFC0" d="M46 6.22a36.4 36.4 0 0 1 8 0V6a4 4 0 1 0-8 .22z"></path>
                  <path class="heroicon-bell-clapper heroicon-component-accent heroicon-component-fill" fill="#7ACFC0" d="M43 91a7 7 0 1 0 14 0H43z"></path>
                  <path class="heroicon-shadows" fill="#000000" d="M55.75 95h-11.5A6.97 6.97 0 0 1 43 91h14c0 1.49-.46 2.87-1.25 4z" opacity=".2"></path>
                  <path class="heroicon-outline" fill="#4A4A4A" fill-rule="nonzero" d="M44.02 6.5a6 6 0 1 1 11.96 0A36 36 0 0 1 86 42v31a8 8 0 0 0 8 8h6v5a5 5 0 0 1-5 5H59a9 9 0 1 1-18 0H5a5 5 0 0 1-5-5v-5h6a8 8 0 0 0 8-8V42A36 36 0 0 1 44.02 6.5zM86 79H57v-1h28.34A9.93 9.93 0 0 1 84 73V42a34 34 0 1 0-68 0v31a9.97 9.97 0 0 1-4 8h76a10.06 10.06 0 0 1-2-2zM6 83H2v3a3 3 0 0 0 3 3h90a3 3 0 0 0 3-3v-3H6zM46 6.22a36.4 36.4 0 0 1 8 0V6a4 4 0 1 0-8 .22zM43 91a7 7 0 1 0 14 0H43zm7-77v1a27 27 0 0 0-23.83 14.3l-.88-.48A28 28 0 0 1 50 14zM22.94 34.78c.29-1.09.64-2.15 1.06-3.18l.92.37c-.4 1-.74 2.02-1.01 3.07l-.97-.26zm-.7 3.52l1 .13A27.25 27.25 0 0 0 23 42v12h-1V42c0-1.25.08-2.49.24-3.7z"></path>
              </svg>
              <h3 class="my-4">Inteligent Alerts</h3>
            </div>
          </div>


          <div class="row text-white text-center pt-5">
            <div class="col-md-6 mt-5">
              <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100" class="heroicon-currency heroicon heroicons-lg d-block m-auto heroicon-primary-inverse">
                  <rect class="heroicon-currency-background heroicon-component-fill" width="100" height="67" y="17" fill="#FFFFFF"></rect>
                  <path class="heroicon-currency-decorative heroicon-component-accent heroicon-component-fill" fill="#7ACFC0" d="M87.07 24A7 7 0 0 0 93 29.93v30.14A7 7 0 0 0 87.07 66H12.93A7 7 0 0 0 7 60.07V29.93A7 7 0 0 0 12.93 24h74.14zm-1.68 2H14.6A7.73 7.73 0 0 1 9 31.47v27.06c2.74.7 4.9 2.8 5.61 5.47H85.4A7.73 7.73 0 0 1 91 58.53V31.47A7.73 7.73 0 0 1 85.39 26zM50 59a14 14 0 1 1 0-28 14 14 0 0 1 0 28zm0-4a10 10 0 1 0 0-20 10 10 0 0 0 0 20zm-26-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm52 0a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"></path>
                  <rect class="heroicon-shadows" width="100" height="13" y="71" fill="#000000" opacity=".2"></rect>
                  <path class="heroicon-outline" fill="#4A4A4A" fill-rule="nonzero" d="M0 73V17h100v67H0V73zm2-2h96V19H2v52zm0 2v1h24v1H2v1h36v1H2v3h36v1H2v1h96v-1H54v-1h44v-1H74v-1h24v-3H68v-1h30v-1H2zm85-50h1a6 6 0 0 0 6 6v32a6 6 0 0 0-6 6H12a6 6 0 0 0-6-6V29a6 6 0 0 0 6-6h75zm.07 1H12.93A7 7 0 0 1 7 29.93v30.14A7 7 0 0 1 12.93 66h74.14A7 7 0 0 1 93 60.07V29.93A7 7 0 0 1 87.07 24zm-1.68 2A7.73 7.73 0 0 0 91 31.47v27.06A7.73 7.73 0 0 0 85.39 64H14.6A7.73 7.73 0 0 0 9 58.53V31.47A7.73 7.73 0 0 0 14.61 26H85.4zm-70.05 1A8.73 8.73 0 0 1 10 32.21V57.8A8.73 8.73 0 0 1 15.34 63h69.32A8.73 8.73 0 0 1 90 57.79V32.2A8.73 8.73 0 0 1 84.66 27H15.34zM50 59a14 14 0 1 1 0-28 14 14 0 0 1 0 28zm13-14a13 13 0 1 0-26 0 13 13 0 0 0 26 0zm-2 0a11 11 0 1 1-22 0 11 11 0 0 1 22 0zM50 55a10 10 0 1 0 0-20 10 10 0 0 0 0 20zM27 45a3 3 0 1 1-6 0 3 3 0 0 1 6 0zm-3 2a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm52 1a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm2-3a2 2 0 1 0-4 0 2 2 0 0 0 4 0z"></path>
              </svg>
              <h3 class="my-4">Cost Efficient</h3>
            </div>
            <div class="col-md-6 mt-5">
              <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100" class="heroicon-map heroicon heroicons-lg d-block m-auto heroicon-primary-inverse">
                  <polygon class="heroicon-map-outer heroicon-component-accent heroicon-component-fill" fill="#7ACFC0" points="0 29 25 19 50 29 75 19 100 29 100 93 75 83 50 93 25 83 0 93"></polygon>
                  <polygon class="heroicon-map-inner heroicon-component-fill" fill="#FFFFFF" points="5 33 25 25 50 35 75 25 95 33 95 85 75 77 50 87 25 77 5 85"></polygon>
                  <path class="heroicon-map-pin heroicon-component-accent heroicon-component-fill" fill="#7ACFC0" d="M50.82 50.15L50 51.41a221.2 221.2 0 0 1-6.27-10.1 107.93 107.93 0 0 1-5.4-10.39C36.83 27.52 36 24.75 36 23a14 14 0 1 1 28 0c0 1.75-.84 4.52-2.33 7.92a107.93 107.93 0 0 1-5.4 10.39 209.62 209.62 0 0 1-5.45 8.84zM53 23a3 3 0 1 0-6 0 3 3 0 0 0 6 0z"></path>
                  <path class="heroicon-shadows" fill="#000000" d="M50 61S34 37.84 34 29c0-1.15.12-2.27.35-3.35C36.7 35.75 50 55 50 55s3.33-4.81 6.94-10.89C61.26 36.86 66 27.81 66 23v-.4l9-3.6v64L50 93V61zM0 29l25-10v64L0 93V29z" opacity=".2"></path>
                  <path class="heroicon-outline" fill="#4A4A4A" fill-rule="nonzero" d="M34 22.6v.01a16 16 0 0 1 32 0L75 19l25 10v64L75 83 50 93 25 83 0 93V29l25-10 9 3.6zm1.96 7.86L26 26.48V50.4l23 9.2v-6.08l-.2-.3c-2.75-4.13-9.49-14.6-12.84-22.76zm-.5-1.27c-.6-1.59-1.05-3.07-1.28-4.36L26 21.55v3.85l9.46 3.78v.01zm29.08 0L74 25.4v-3.85l-8.18 3.28c-.23 1.29-.68 2.77-1.28 4.35zM76 25.4L95 33v25l3 1.2V30.35l-22-8.8v3.85zM95 60v25l-19-7.6v3.85l22 8.8V61.2L95 60zM74 77.4l-23 9.2v3.85l23-9.2V77.4zm-25 9.2l-23-9.2v3.85l23 9.2V86.6zm-25-9.2L5 85V60l-3 1.2v28.85l22-8.8V77.4zM5 58V33l19-7.6v-3.85l-22 8.8V59.2L5 58zm19-31.52l-18 7.2V57.6l18-7.2V26.48zM6 59.6v23.92l18-7.2V52.4L6 59.6zm20 16.72l23 9.2V61.6l-23-9.2v23.92zm25 9.2l23-9.2V52.4l-23 9.2v23.92zm25-9.2l18 7.2V59.6l-18-7.2v23.92zM94 57.6V33.68l-18-7.2V50.4l18 7.2zM74 26.48l-9.96 3.98c-3.35 8.16-10.1 18.63-12.84 22.76l-.21.32.01-.02v6.08l23-9.2V26.48zM50.82 50.15c1.5-2.3 3.47-5.42 5.45-8.84s3.93-7.04 5.4-10.39C63.17 27.52 64 24.75 64 23a14 14 0 1 0-28 0c0 1.75.84 4.52 2.33 7.92 1.47 3.35 3.42 6.97 5.4 10.39A209.62 209.62 0 0 0 50 51.41l.82-1.26zM50 33a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm9-10a9 9 0 1 0-18 0 9 9 0 0 0 18 0zm-9 5a5 5 0 1 1 0-10 5 5 0 0 1 0 10zm3-5a3 3 0 1 0-6 0 3 3 0 0 0 6 0z"></path>
              </svg>
              <h3 class="my-5">Enhance Asset Tracking</h3>
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
