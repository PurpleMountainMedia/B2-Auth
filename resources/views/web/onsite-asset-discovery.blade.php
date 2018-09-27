@extends('layouts.site')

@section('below_nav')
  <div id="particles-js" class="bg-dark">
    <div class="below_nav_container container-fluid p-5 d-flex align-items-center">
      <div class="container">
        <h2 class="text-white font-weight-light">{{__('web.title-discovery-hero-primary')}}</h2>
        <p class="text-white">{{__('web.title-discovery-hero-sub')}}</p>
      </div>
    </div>
  </div>
  <div class="container-fluid below_nav_container_buffer"></div>
@endsection

@push('header_scripts')
  <style media="screen">
    #asset_discovery_header {
      background: url({{ url('storage/web/asset_discovery_header.jpg') }});
      background-size: cover;
      background-position: center;
    }
    .header_image::after {
      position: absolute;
      left: 0;
      top: 0;
      height: 100%;
      width: 100%;
      background: rgba(255, 255, 255, 0.54);
      content: "";
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='4' height='4' viewBox='0 0 4 4'%3E%3Cpath fill='%233a3a3a' fill-opacity='0.41' d='M1 3h1v1H1V3zm2-2h1v1H3V1z'%3E%3C/path%3E%3C/svg%3E");
    }
    .header_container_inner {
      z-index: 100;
    }
  </style>
@endpush

@section('content')
  <div class="container mt-5 pt-5">
  </div>

  <div class="container py-5 mt-5">
    <p>The final part of the ecosystem is our onsite asset discovery service, carried out by one of our trained, DBS certified auditors. The exact nature and detail of the discovery service can be discussed and scaled to suit your specific requirements prior to the visit.</p>
    <p>It will take one of our auditors approximately 1-2 days to carry out the discovery process, depending on the size of the site. All items over £50 in value will be recorded and where applicable serial numbers, manufacturer, model and description will also be provided.</p>
    <p>Our auditors are also able to barcode label assets, using our own barcoded security labels or another supplier.</p>
  </div>

  <div class="container-fluid bg-primary py-5 mt-5">
    <div class="container">
      <h1 class="text-white text-center mb-5 font-weight-bold">Our Onsite Asset Discovery Service Includes</h1>

      <div class="row">
        <div class="col-md-4 my-5">
          <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100" class="heroicon-form heroicon heroicons-lg heroicon-primary-inverse d-block m-auto">
              <path class="heroicon-form-clipboard heroicon-component-accent heroicon-component-fill" fill="#7ACFC0" d="M0 16.01A6 6 0 0 1 6 10h66a6 6 0 0 1 6 6.01v77.98a6 6 0 0 1-6 6.01H6a6 6 0 0 1-6-6.01V16.01z"></path>
              <polygon class="heroicon-form-pages heroicon-component-fill" fill="#FFFFFF" points="7 14 7 90 71 90 71 14"></polygon>
              <path class="heroicon-form-clip heroicon-component-accent heroicon-component-fill" fill="#7ACFC0" d="M24 8.9a39.7 39.7 0 0 1 7.1-2.12 8 8 0 0 1 15.8 0c2.46.5 4.83 1.2 7.1 2.13V19H24V8.9zM39 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path>
              <polygon class="heroicon-form-pen-housing heroicon-component-fill" fill="#FFFFFF" points="90 22 99 22 99 25 96 25 96 79 93 90 90 79"></polygon>
              <path class="heroicon-form-pen-button heroicon-component-accent heroicon-component-fill" fill="#7ACFC0" d="M90 15h5v7s4-.24 4 0v3h-9V15z"></path>
              <rect class="heroicon-form-pen-grip heroicon-component-accent heroicon-component-fill" width="6" height="24" x="90" y="55" fill="#7ACFC0"></rect>
              <path class="heroicon-shadows" fill="#000000" d="M23 20h32v2H23v-2zM9 85h60v3H9v-3zM6 98a3.99 3.99 0 0 1-3.55-2.16c1 .73 2.22 1.16 3.54 1.16h66.02c1.32 0 2.55-.43 3.54-1.16A4 4 0 0 1 72.01 98H5.99z" opacity=".2"></path>
              <path class="heroicon-outline" fill="#4A4A4A" fill-rule="nonzero" d="M55 9.33V10h17.16A6 6 0 0 1 78 16V93.99a6 6 0 0 1-6 6.01H6a6 6 0 0 1-6-6.01V16a6 6 0 0 1 6-6h17v-.67a39.7 39.7 0 0 1 8.1-2.55 8 8 0 0 1 15.8 0A39.7 39.7 0 0 1 55 9.33zM55 14h16v76H7V14h16v-2H6a4 4 0 0 0-4 4.01V94c.91 1.22 2.36 2 4 2h66c1.64 0 3.09-.78 4-2V16.01A4 4 0 0 0 72 12H55v2zM9 16v67h60V16H55v4H23v-4H9zm10.5 47a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5zm1.5-2.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0zm5-.5h24v1H26v-1zm35 7v1H17v-1h44zm-20 6v1H17v-1h24zm-24-3h40v1H17v-1zm40-41v1H17v-1h40zm-40 3h42v1H17v-1zm24 3v1H17v-1h24zM25 17v1h28v-1H25zm0-1h28v-5.34a37.7 37.7 0 0 0-6.49-1.92l-1.37-.27-.2-1.39a6 6 0 0 0-11.87 0l-.21 1.39-1.37.27A37.7 37.7 0 0 0 25 10.66V16zm14-5a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm2-3a2 2 0 1 0-4 0 2 2 0 0 0 4 0zM6 98h66a4 4 0 0 0 3.55-2.16A5.96 5.96 0 0 1 72.01 97H5.99a5.96 5.96 0 0 1-3.54-1.16c.67 1.28 2 2.16 3.54 2.16zm63-13H9v1h35v1H9v1h60v-1h-6v-1h6v-1zm21-69v-2h6v7h2a2 2 0 0 1 2 2v18a1 1 0 1 1-2 0V26h-1v53l-3 12h-2l-3-12V21h1v-5zm4 0h-2v5h2v-5zm-3 8h7v-1h-7v1zm4 1h-4v30h4V25zm-4 32h4v-1h-4v1zm4 20h-4v1h4v-1zm-2 9.75L94.94 79h-3.88L93 86.75zM95 76V58h-4v18h4zM26 54h24v1H26v-1zm-6.5 3a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5zm1.5-2.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0zm5-6.5h24v1H26v-1zm-6.5 3a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5zm1.5-2.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0zm5-6.5h24v1H26v-1zm-4 .5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0zM19.5 44a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zM17 26h44v1H17v-1z"></path>
          </svg>
          <h4 class="my-4 text-white text-center">Complete asset list including all items over the value of £50</h4>
        </div>
        <div class="col-md-4 my-5">
          <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100" class="heroicon-database heroicon heroicons-lg heroicon-primary-inverse d-block m-auto">
              <path class="heroicon-database-exterior heroicon-component-fill-" fill="#FFFFFF" d="M10 20v12a11.22 11.22 0 0 0 1.83 6A11.2 11.2 0 0 0 10 44v12c0 2.09.64 4.1 1.83 6A11.2 11.2 0 0 0 10 68v12c0 11.05 17.9 20 40 20s40-8.95 40-20V68c0-2.09-.64-4.1-1.83-6A11.2 11.2 0 0 0 90 56V44c0-2.09-.64-4.1-1.83-6A11.2 11.2 0 0 0 90 32V20C90 8.95 72.1 0 50 0S10 8.95 10 20z"></path>
              <path class="heroicon-database-interior heroicon-component-accent heroicon-component-fill-" fill="#7ACFC0" fill-rule="nonzero" d="M16 66.54C23.06 72.22 35.65 76 50 76c14.35 0 26.94-3.78 34-9.46V68c0 6.65-14.96 14-34 14s-34-7.35-34-14v-1.46zm0-24C23.06 48.22 35.65 52 50 52c14.35 0 26.94-3.78 34-9.46V44c0 6.65-14.96 14-34 14s-34-7.35-34-14v-1.46z"></path>
              <path class="heroicon-shadows" fill="#000000" fill-rule="nonzero" d="M83.96 44.57c.03-.19.04-.38.04-.57v-1.46C76.94 48.22 64.35 52 50 52c-14.35 0-26.94-3.78-34-9.46V44c0 .19.01.38.04.57C23.1 50.23 35.67 54 50 54c14.33 0 26.9-3.77 33.96-9.43zm0 24c.03-.19.04-.38.04-.57v-1.46C76.94 72.22 64.35 76 50 76c-14.35 0-26.94-3.78-34-9.46V68c0 .19.01.38.04.57C23.1 74.23 35.67 78 50 78c14.33 0 26.9-3.77 33.96-9.43z" opacity=".2"></path>
              <path class="heroicon-outline" fill="#4A4A4A" fill-rule="nonzero" d="M10 20C10 8.95 27.9 0 50 0s40 8.95 40 20v12c0 2.09-.64 4.1-1.83 6A11.2 11.2 0 0 1 90 44v12c0 2.09-.64 4.1-1.83 6A11.2 11.2 0 0 1 90 68v12c0 11.05-17.9 20-40 20s-40-8.95-40-20V68c0-2.09.64-4.1 1.83-6A11.2 11.2 0 0 1 10 56V44c0-2.09.64-4.1 1.83-6l.04.06A11.22 11.22 0 0 1 10 32V20zm2 0c0 9.64 17.03 18 38 18s38-8.36 38-18c0-4.36-3.58-8.84-10.61-12.35l-.74-.37C69.79 4.05 60.38 2 50 2 39.62 2 30.21 4.05 23.35 7.28l-.74.37C15.58 11.16 12 15.65 12 20zm0 4.24V32c0 4.36 3.58 8.84 10.61 12.35C29.62 47.88 39.17 50.01 50 50c10.83.01 20.38-2.12 27.39-5.65C84.42 40.84 88 36.35 88 32v-7.76C84.01 32.58 68.56 39 50 39s-34.01-6.42-38-14.76zm74.95 15.43c-.83 1-1.82 1.96-2.95 2.87V44c0 6.65-14.96 14-34 14s-34-7.35-34-14v-1.46a20.81 20.81 0 0 1-2.88-2.78A8.96 8.96 0 0 0 12 44c0 4.55 3.88 9.05 10.84 12.47C29.78 59.88 39.3 62 50 62c10.7 0 20.22-2.12 27.16-5.53C84.12 53.05 88 48.56 88 44c0-1.41-.38-2.84-1.12-4.24l.07-.09zM17 43.31V44c0 1.28.72 2.74 2.33 4.27 1.62 1.56 3.94 3 6.93 4.3C32.29 55.22 40.59 57.02 50 57c9.41 0 17.71-1.79 23.74-4.42 3-1.3 5.31-2.75 6.93-4.3 1.6-1.54 2.33-3 2.33-4.28v-.7l.03-.02C75.83 48.55 63.73 52 50 52c-13.7 0-25.8-3.44-33-8.7zM12 68c0 4.56 3.88 9.05 10.84 12.47C29.78 83.88 39.3 86 50 86c10.7 0 20.22-2.12 27.16-5.53C84.12 77.05 88 72.56 88 68c0-1.41-.38-2.84-1.12-4.24-.82.97-1.78 1.9-2.88 2.78V68c0 6.65-14.96 14-34 14s-34-7.35-34-14v-1.46a20.7 20.7 0 0 1-2.88-2.78A8.96 8.96 0 0 0 12 68zm5 0c0 1.28.72 2.74 2.33 4.27 1.62 1.56 3.94 3 6.93 4.3C32.29 79.22 40.59 81.02 50 81c9.41 0 17.71-1.79 23.74-4.42 3-1.3 5.31-2.75 6.93-4.3 1.6-1.54 2.33-3 2.33-4.28v-.7C75.8 72.57 63.7 76 50 76c-13.71 0-25.82-3.45-33.02-8.71l.02.02V68zm-5-19.76V56c0 4.36 3.58 8.84 10.61 12.35C29.62 71.88 39.17 74.01 50 74c10.83.01 20.38-2.12 27.39-5.65C84.42 64.84 88 60.35 88 56v-7.76C84.01 56.58 68.56 63 50 63s-34.01-6.42-38-14.76zm0 24V80c0 4.36 3.58 8.84 10.61 12.35C29.62 95.88 39.17 98.01 50 98c10.83.01 20.38-2.12 27.39-5.65C84.42 88.84 88 84.35 88 80v-7.76C84.01 80.58 68.56 87 50 87s-34.01-6.42-38-14.76zM16 20h1c0 6.29 15.4 13 33 13s33-6.71 33-13h1c0 6.65-14.96 14-34 14s-34-7.35-34-14z"></path>
          </svg>
          <h4 class="my-4 text-white text-center">Recording of additional data, including; manufacturer, model, serial number and cost</h4>
        </div>
        <div class="col-md-4 my-5">
          <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100" class="heroicon-tag heroicon heroicons-lg heroicon-primary-inverse d-block m-auto">
              <polygon class="heroicon-tag-background heroicon-component-fill" fill="#FFFFFF" points="0 10 10 0 40 0 98.586 58.586 100 60 98.586 61.414 61.414 98.586 60 100 58.586 98.586 0 40"></polygon>
              <path class="heroicon-tag-description-border heroicon-component-accent heroicon-component-fill" fill="#7ACFC0" d="M50 20l.7.7 38.6 38.6.7.7-.7.7-28.6 28.6-.7.7-.7-.7-38.6-38.6-.7-.7.7-.7 28.6-28.6.7-.7zM26.41 50L60 83.59 83.59 60 50 26.41 26.41 50z"></path>
              <polygon class="heroicon-tag-description heroicon-component-fill-copy" fill="#FFFFFF" points="26.414 50 60 83.586 83.586 60 50 26.414"></polygon>
              <path class="heroicon-tag-hole heroicon-component-accent heroicon-component-fill" fill="#7ACFC0" d="M20 31a11 11 0 1 1 0-22 11 11 0 0 1 0 22zm0-3a8 8 0 1 0 0-16 8 8 0 0 0 0 16z"></path>
              <path class="heroicon-outline" fill="#4A4A4A" fill-rule="nonzero" d="M0 10L10 0h30l58.59 58.59L100 60l-1.41 1.41L61.4 98.6 60 100l-1.41-1.41L0 40V10zm2 29.17l58 58L97.17 60l-58-58H10.83L2 10.83v28.34zM50 20l.7.7 38.6 38.6.7.7-.7.7-28.6 28.6-.7.7-.7-.7-38.6-38.6-.7-.7.7-.7 28.6-28.6.7-.7zm10 68.59L88.59 60 50 21.41 21.41 50 60 88.59zM49.3 25.7L50 25l.7.7 33.6 33.6.7.7-.7.7-23.6 23.6-.7.7-.7-.7-33.6-33.6-.7-.7.7-.7 23.6-23.6zM26.4 50L60 83.59 83.59 60 50 26.41 26.41 50zM20 31a11 11 0 1 1 0-22 11 11 0 0 1 0 22zm10-11a10 10 0 1 0-20 0 10 10 0 0 0 20 0zm-10 8a8 8 0 1 1 0-16 8 8 0 0 1 0 16zm6-8a6 6 0 1 0-12 0 6 6 0 0 0 12 0z"></path>
          </svg>
          <h4 class="my-4 text-white text-center">Optional barcoding of high value items using our <a class="text-dark" href="{{ route('security_labels') }}" title="Security Lables">security labels</a></h4>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4 my-5">
          <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100" class="heroicon-identification heroicon heroicons-lg heroicon-primary-inverse d-block m-auto ">
              <path class="heroicon-identification-top heroicon-component-accent heroicon-component-fill" fill="#7ACFC0" d="M44 21H6a6 6 0 0 0-6 6v13h100V27a6 6 0 0 0-6-6H56v4a4 4 0 0 1 0 8H44a4 4 0 0 1 0-8v-4z"></path>
              <path class="heroicon-identification-clip heroicon-component-fill" fill="#FFFFFF" d="M44 11h12v18H44V11zm6 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path>
              <path class="heroicon-identification-card" fill="#FFFFFF" d="M0 40h100v43a6 6 0 0 1-6 6H6a6 6 0 0 1-6-6V40z"></path>
              <path class="heroicon-identification-photo-background heroicon-component-accent heroicon-component-fill" fill="#7ACFC0" d="M7 45v37h2v-8c0-1.1.8-2.4 1.8-2.9L17 68v-1.25A7 7 0 0 1 14 61v-4a7 7 0 1 1 14 0v4a7 7 0 0 1-3 5.75V68l6.2 3.1c1 .5 1.8 1.8 1.8 2.9v8h2V45H7z"></path>
              <path class="heroicon-identification-photo-user-top heroicon-component-fill" fill="#FFFFFF" d="M17 68l-6.2 3.1C9.8 71.6 9 72.9 9 74v9h24v-9c0-1.1-.8-2.4-1.8-2.9L25 68v1a4 4 0 0 1-8 0v-1z"></path>
              <path class="heroicon-identification-photo-user-face heroicon-component-fill" fill="#FFFFFF" d="M25 66.74V69a4 4 0 0 1-8 0v-2.25A7 7 0 0 1 14 61v-4a7 7 0 0 1 14 0v4a7 7 0 0 1-3 5.74z"></path>
              <path class="heroicon-outline" fill="#4A4A4A" fill-rule="nonzero" d="M44 11h12v10h38a6 6 0 0 1 6 6v56a6 6 0 0 1-6 6H6a6 6 0 0 1-6-6V27a6 6 0 0 1 6-6h38V11zm2 2v14h8V13h-8zm-2 10H6a4 4 0 0 0-4 4v12h96V27a4 4 0 0 0-4-4H56v2a4 4 0 1 1 0 8H44a4 4 0 1 1 0-8v-2zm0 4a2 2 0 1 0 0 4h12a2 2 0 1 0 0-4v2H44v-2zm54 13H2v43a4 4 0 0 0 4 4h88a4 4 0 0 0 4-4V40zm-12 8v2H40v-2h46zm-10-4v2H40v-2h36zM40 82h10v1H40v-1zm12-2H40v-1h12v1zm0-4v1H40v-1h12zm16-12H40v-1h28v1zm-28-4h48v1H40v-1zm40-2H40v-1h40v1zm-4-4v1H40v-1h36zm-2 21h20v8H74v-8zm-45 8H6V44h30v39h-7zm18-66a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm28 59v6h18v-6H75zm-57-8.67V69a3 3 0 0 0 6 0v-1.67c-1.9.9-4.1.9-6 0zM7 45v37h2v-8c0-1.1.8-2.4 1.8-2.9L17 68v-1.25A7 7 0 0 1 14 61v-4a7 7 0 1 1 14 0v4a7 7 0 0 1-3 5.75V68l6.2 3.1c1 .5 1.8 1.8 1.8 2.9v8h2V45H7zm45-28a2 2 0 1 0-4 0 2 2 0 0 0 4 0zM21 73a4 4 0 0 1-4-4v.12L11.24 72A2.56 2.56 0 0 0 10 74v8h2v-6h1v6h16v-6h1v6h2v-8c0-.72-.6-1.68-1.24-2L25 69.12V69a4 4 0 0 1-4 4zm6-16a6 6 0 1 0-12 0v4a6 6 0 1 0 12 0v-4z"></path>
          </svg>
          <h4 class="my-4 text-white text-center">Audit carried out by qualified, DBS certified B2 personel</h4>
        </div>

        <div class="col-md-4 my-5">
          <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100" class="heroicon-camera heroicon heroicons-lg heroicon-primary-inverse d-block m-auto">
              <path class="heroicon-camera-top heroicon-component-accent heroicon-component-fill" fill="#7ACFC0" d="M36.83 16L29 23.83V24H2v12h9.53a5.98 5.98 0 0 1 8.94 0h8.08A27.94 27.94 0 0 1 50 26c8.61 0 16.31 3.89 21.45 10H98V24H83.17l-.17-.17L75.17 16H36.83z"></path>
              <path class="heroicon-camera-body heroicon-component-fill" fill="#FFFFFF" d="M20.58 38h7.67a27 27 0 1 0 43.5 0H98v46H2V38h9.42a5 5 0 0 1 9.16 0z"></path>
              <path class="heroicon-camera-buttons heroicon-component-fill" fill="#FFFFFF" d="M5 17h13v6H5v-6zm16 3h7v3h-7v-3zm63-1h11v4H84v-4z"></path>
              <circle class="heroicon-camera-lens-barrel heroicon-component-accent heroicon-component-fill" cx="50" cy="54" r="27" fill="#7ACFC0"></circle>
              <circle class="heroicon-camera-lens-glass heroicon-component-fill" cx="50" cy="54" r="16" fill="#FFFFFF"></circle>
              <path class="heroicon-shadows" fill="#000000" d="M68.9 56a19 19 0 0 0-37.8 0 19 19 0 1 1 37.8 0zm9.08-1l.02 1a28 28 0 1 1-55.98-1 28 28 0 0 0 55.96 0z" opacity=".2"></path>
              <path class="heroicon-outline" fill="#4A4A4A" fill-rule="nonzero" d="M20 22v-3h2v-1h5v1h2v2l7-7h40l7 7v-3h13v4h4v62a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V22h4v-6h15v6h1zm16.83-6L29 23.83V24H2v12h9.53a5.98 5.98 0 0 1 8.94 0h8.08A27.94 27.94 0 0 1 50 26c8.61 0 16.31 3.89 21.45 10H98V24H83.17l-.17-.17L75.17 16H36.83zM2 38v46h3V38H2zm4 46h88V38H72.98A27.87 27.87 0 0 1 78 54c0 6.53-2.23 12.53-5.98 17.3a4 4 0 1 1-4.73 4.73A28 28 0 0 1 27.02 38l-5.35-.01a5.99 5.99 0 1 1-11.32 0H6v46zm89 0h3V38h-3v46zM16 22v-1H7v1h9zm-1-4h-1v2h1v-2zm1 2h1v-2h-1v2zm-3-2h-1v2h1v-2zm-2 0h-1v2h1v-2zm-2 0H8v2h1v-2zm-2 2v-2H6v2h1zm20 1h-5v1h5v-1zm58 1h1v-2h-1v2zm3 0v-2h-1v2h1zm1 0h1v-2h-1v2zm3 0v-2h-1v2h1zm1 0h1v-2h-1v2zM24 54a26 26 0 1 0 52 0 26 26 0 0 0-52 0zm48.63 22.63a2 2 0 1 0-2.83-2.83 2 2 0 0 0 2.83 2.83zM20 40a4 4 0 1 0-8 0 4 4 0 0 0 8 0zm55-8a5 5 0 1 1 0-10 5 5 0 0 1 0 10zm0-2a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0-2a1 1 0 1 1 0-2 1 1 0 0 1 0 2zM16 43a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0-1a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm34 36a24 24 0 1 1 0-48 24 24 0 0 1 0 48zm0-1a23 23 0 1 0 0-46 23 23 0 0 0 0 46zM30 54a20 20 0 1 1 40 0 20 20 0 0 1-40 0zm38 0a18 18 0 1 0-36 0 18 18 0 0 0 36 0zM50 70a16 16 0 1 1 0-32 16 16 0 0 1 0 32zm0-1a15 15 0 0 0 9.32-26.75l-5.89 10.2-.86-.5 5.94-10.3A15 15 0 1 0 50 69zm-1.57-14.55l-.86-.5 6-10.4.86.5-6 10.4z"></path>
          </svg>
          <h4 class="my-4 text-white text-center">Optional images of each room and high value items</h4>
        </div>

        <div class="col-md-4 my-5">
          <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100" class="heroicon-shield-check heroicon heroicons-lg heroicon-primary-inverse d-block m-auto">
              <path class="heroicon-shield-check-edge heroicon-component-accent heroicon-component-fill" fill="#7ACFC0" d="M50 2a85.6 85.6 0 0 1 42 10.94v47.05c0 10.27-7.7 22.22-17.04 26.47L50 97.8 25.04 86.46C15.7 82.2 8 70.26 8 59.99V12.94A85.6 85.6 0 0 1 50 2zm21.23 76.27C77.37 75.47 83 66.73 83 59.99V18.41A76.67 76.67 0 0 0 50 11a76.67 76.67 0 0 0-33 7.4V60c0 6.73 5.64 15.48 11.77 18.27L50 87.92l21.23-9.65z"></path>
              <path class="heroicon-shield-check-background heroicon-component-fill-copy" fill="#FFFFFF" d="M71.23 78.27C77.37 75.47 83 66.73 83 59.99V18.41A76.67 76.67 0 0 0 50 11a76.67 76.67 0 0 0-33 7.4V60c0 6.73 5.64 15.48 11.77 18.27L50 87.92l21.23-9.65z"></path>
              <path class="heroicon-shield-check-circle heroicon-component-accent heroicon-component-fill" fill="#7ACFC0" d="M50 62a16 16 0 1 0 0-32 16 16 0 0 0 0 32z"></path>
              <polygon class="heroicon-shield-check-mark heroicon-component-fill" fill="#FFFFFF" points="42 47.414 47 52.414 57 42.414 55.586 41 47 49.586 43.414 46"></polygon>
              <path class="heroicon-shadows" fill="#000000" d="M67.97 47a18 18 0 1 1-35.95 0 18 18 0 0 0 35.95 0zM12 15.4v-.08A81.62 81.62 0 0 1 50 6a81.62 81.62 0 0 1 38 9.32v.08l-2.97 1.78A78.5 78.5 0 0 0 50 9a78.5 78.5 0 0 0-35.03 8.18L12 15.4zm71 5.01v-2A76.67 76.67 0 0 0 50 11a76.67 76.67 0 0 0-33 7.4v2.01A76.62 76.62 0 0 1 50 13c11.5 0 22.72 2.52 33 7.4v.01z" opacity=".2"></path>
              <path class="heroicon-outline" fill="#4A4A4A" fill-rule="nonzero" d="M94 60c0 11.04-8.15 23.7-18.21 28.28L50 100 24.21 88.28C14.15 83.7 6 71.04 6 59.99V11.77A87.6 87.6 0 0 1 50 0a87.6 87.6 0 0 1 44 11.77V60zM50 2A85.6 85.6 0 0 0 8 12.94v47.05c0 10.26 7.7 22.22 17.04 26.47L50 97.8l24.96-11.34C84.3 82.2 92 70.26 92 59.99V12.94A85.6 85.6 0 0 0 50 2zm0 4a81.62 81.62 0 0 1 38 9.32v44.67c0 8.7-6.77 19.23-14.7 22.83L50 93.4 26.7 82.8C18.78 79.22 12 68.7 12 60V15.32A81.62 81.62 0 0 1 50 6zM13 60c0 8.3 6.55 18.47 14.11 21.9L50 92.32l22.89-10.4C80.45 78.47 87 68.3 87 59.99V15.92A80.62 80.62 0 0 0 50 7a80.62 80.62 0 0 0-37 8.92V60zm2 0V17.14A78.64 78.64 0 0 1 50 9a78.64 78.64 0 0 1 35 8.15V60c0 7.53-6.09 16.98-12.94 20.1L50 90.1 27.94 80.1C21.09 76.97 15 67.5 15 59.99zm56.23 18.27C77.37 75.47 83 66.73 83 59.99V18.41A76.67 76.67 0 0 0 50 11a76.67 76.67 0 0 0-33 7.4V60c0 6.73 5.64 15.48 11.77 18.27L50 87.92l21.23-9.65zM50 64a18 18 0 1 1 0-36 18 18 0 0 1 0 36zm0-2a16 16 0 1 0 0-32 16 16 0 0 0 0 32zM36.96 51.11A14 14 0 0 1 50 32v1a13 13 0 0 0-12.13 17.69l-.9.42zm6.45-6.52L47 48.17l8.59-8.58 2.82 2.82L47 53.83l-6.41-6.42 2.82-2.82zM42 47.4l5 5 10-10L55.59 41 47 49.59 43.41 46 42 47.41z"></path>
          </svg>
          <h4 class="my-4 text-white text-center">Short training session with staff after the audit has been completed</h4>
        </div>
      </div>

    </div>
  </div>

@endsection
