@extends('layouts.site')

@section('below_nav')
  <div>
    <div class="below_nav_container container-fluid p-5 d-flex align-items-center header_image" id="label_header">
      <div class="container header_container_inner">
        <h2 class="text-dark font-weight-strong">Security Labels</h2>
        <p class="text-dark font-weight-strong">Tamper proof and barcoded</p>
      </div>
    </div>
  </div>
  <div class="container-fluid below_nav_container_buffer"></div>
@endsection

@push('header_scripts')
  <style media="screen">
    #label_header {
      background: url({{ url('storage/web/barcode_image_pack.jpg') }});
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

  <div class="container py-4">
    <div class="row">
      <div class="col-md-12">
        <h1 class="mt-4">Barcoded Security Labels</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8 py-5">
        <p>Our barcoded security labels are not only a quick and easy way of updating inventory location within your school, they act as a form of protection against theft and item mistreatment. Accompanied with the B2 Scan app for IOS and Android, users can simply select a location and then scan the asset.</p>

        <p>Our barcoded security labels are not only a quick and easy way of updating inventory location within your school, they act as a form of protection against theft and item mistreatment. Accompanied with the B2 Scan app for IOS and Android, users can simply select a location and then scan the asset.</p>

        <div class="row mt-5">
          <div class="col-md-6 my-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100" class="heroicon-diamond heroicon heroicons-lg heroicon-b2 m-auto d-block">
                <polygon class="heroicon-diamond-shape heroicon-component-fill" fill="#FFFFFF" points="20 17 50 13 80 17 100 37 50 87 0 37"></polygon>
                <path class="heroicon-diamond-sparkle heroicon-component-accent heroicon-component-fill" fill="#7ACFC0" d="M72 36h1a5 5 0 0 0 5-5v-1a1 1 0 0 1 1-1 1 1 0 0 1 1 1v1a5 5 0 0 0 5 5h1a1 1 0 0 1 1 1 1 1 0 0 1-1 1h-1a5 5 0 0 0-5 5v1a1 1 0 0 1-1 1 1 1 0 0 1-1-1v-1a5 5 0 0 0-5-5h-1a1 1 0 0 1-1-1 1 1 0 0 1 1-1zM25 49a3 3 0 0 0 3-3 1 1 0 0 1 1-1 1 1 0 0 1 1 1 3 3 0 0 0 3 3 1 1 0 0 1 1 1 1 1 0 0 1-1 1 3 3 0 0 0-3 3 1 1 0 0 1-1 1 1 1 0 0 1-1-1 3 3 0 0 0-3-3 1 1 0 0 1-1-1 1 1 0 0 1 1-1z"></path>
                <path class="heroicon-shadows" fill="#000000" d="M48.62 82.8L3.82 38h16.8l5.85 9.35A2 2 0 0 1 25 48a2 2 0 0 0 0 4 2 2 0 0 1 2 2 2 2 0 0 0 3.94.5l17.68 28.3zm2.76 0L76.88 42a4 4 0 0 1 .12 1v1a2 2 0 0 0 4 0v-1a4 4 0 0 1 4-4h1a2 2 0 0 0 1.73-1h8.44L51.38 82.8zM20 36H3.83L20 19.83V36zm60-16.17L96.17 36h-8.43A2 2 0 0 1 86 35h-1a4 4 0 0 1-4-4v-1a2 2 0 0 0-1-1.73v-8.44z" opacity=".2"></path>
                <path class="heroicon-outline" fill="#4A4A4A" fill-rule="nonzero" d="M20 17l30-4 30 4 20 20-50 50L0 37l20-20zm28.62 65.8L30.94 54.5A2 2 0 0 1 27 54a2 2 0 0 0-2-2 2 2 0 1 1 0-4 2 2 0 0 0 1.47-.65L20.63 38H3.82l44.79 44.8zm-17.4-29.72L50 83.1l26.4-42.23A4 4 0 0 0 73 39h-1c-.76 0-1.42-.42-1.76-1.04L21.8 38l5.18 8.28L27 46a2 2 0 1 1 4 0c0 1.1.9 2 2 2a2 2 0 1 1 0 4 2 2 0 0 0-1.77 1.08zm20.16 29.71L96.18 38h-8.45A2 2 0 0 1 86 39h-1a4 4 0 0 0-4 4v1a2 2 0 1 1-4 0v-1a4 4 0 0 0-.13-1L51.38 82.8zM21 36h.3l27.1-20.77L21 18.88V36zm29-20.74L22.95 36h47.32A2 2 0 0 1 72 35h1c.74 0 1.43-.2 2.03-.55L50 15.26zm1.6-.03l24.24 18.58A3.99 3.99 0 0 0 77 31v-1a2 2 0 0 1 2-2v-9.12l-27.4-3.65zM20 36V19.83L3.83 36H20zm60-16.17v8.44A2 2 0 0 1 81 30v1a4 4 0 0 0 4 4h1a1.99 1.99 0 0 1 1.74 1h8.43L80 19.83zM72 36a1 1 0 0 0-1 1 1 1 0 0 0 1 1h1a5 5 0 0 1 5 5v1a1 1 0 0 0 1 1 1 1 0 0 0 1-1v-1a5 5 0 0 1 5-5h1a1 1 0 0 0 1-1 1 1 0 0 0-1-1h-1a5 5 0 0 1-5-5v-1a1 1 0 0 0-1-1 1 1 0 0 0-1 1v1a5 5 0 0 1-5 5h-1zM25 49a1 1 0 0 0-1 1 1 1 0 0 0 1 1 3 3 0 0 1 3 3 1 1 0 0 0 1 1 1 1 0 0 0 1-1 3 3 0 0 1 3-3 1 1 0 0 0 1-1 1 1 0 0 0-1-1 3 3 0 0 1-3-3 1 1 0 0 0-1-1 1 1 0 0 0-1 1 3 3 0 0 1-3 3z"></path>
            </svg>
            <h3 class="text-center mt-4">High Quality PCV</h3>
          </div>

          <div class="col-md-6 my-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100" class="heroicon-wallet heroicon heroicons-lg heroicon-b2 m-auto d-block">
                <path class="heroicon-wallet-cover heroicon-component-fill" fill="#FFFFFF" d="M98 66v20a4 4 0 0 1-4 4H8.5A8.5 8.5 0 0 1 0 81.5v-63C0 13.8 3.8 10 8.5 10H82a4 4 0 0 1 4 4h4v3h4v4a4 4 0 0 1 4 4v21a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2z"></path>
                <path class="heroicon-wallet-strap heroicon-component-accent heroicon-component-fill" fill="#7ACFC0" d="M70 56a10 10 0 0 1 10-10h18a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2H80a10 10 0 0 1-10-10z"></path>
                <circle class="heroicon-wallet-snap heroicon-component-fill" cx="80" cy="56" r="5" fill="#FFFFFF"></circle>
                <path class="heroicon-wallet-cash heroicon-component-accent heroicon-component-fill" fill="#7ACFC0" d="M8.5 16H88v3h4v2H8.5a2.5 2.5 0 0 1 0-5z"></path>
                <path class="heroicon-shadows" fill="#000000" d="M2 80H0v2a8 8 0 0 0 8 8h86a4 4 0 0 0 4-4v-6h-2v4a2 2 0 0 1-2 2H8a6 6 0 0 1-6-6zm98-21v-2 2zm-2 9H80a10 10 0 0 1-9.95-11A10 10 0 0 0 80 66h18v2z" opacity=".2"></path>
                <path class="heroicon-outline" fill="#4A4A4A" fill-rule="nonzero" d="M98 66v20a4 4 0 0 1-4 4H8.5A8.5 8.5 0 0 1 0 81.5v-63C0 13.8 3.8 10 8.5 10H82a4 4 0 0 1 4 4h4v3h4v4a4 4 0 0 1 4 4v21a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2zM2 18.5A6.5 6.5 0 0 0 8.5 25H94v1H8.5A7.5 7.5 0 0 1 2 22.24V81.5A6.5 6.5 0 0 0 8.5 88H94a2 2 0 0 0 2-2V66H80a10 10 0 1 1 0-20h16V25a2 2 0 0 0-2-2H8.5a4.5 4.5 0 1 1 0-9H84a2 2 0 0 0-2-2H8.5A6.5 6.5 0 0 0 2 18.5zM8.5 16a2.5 2.5 0 0 0 0 5H92v-2H8.5a.5.5 0 1 1 0-1H88v-2H8.5zM80 48a8 8 0 1 0 0 16h18V48H80zM8.5 29c-1.69 0-3.28-.4-4.7-1.1l.45-.9c1.28.64 2.72 1 4.25 1v1zm3.5-1h4v1h-4v-1zm12 0v1h-4v-1h4zm4 0h4v1h-4v-1zm12 0v1h-4v-1h4zm4 0h4v1h-4v-1zm12 0v1h-4v-1h4zm4 0h4v1h-4v-1zm12 0v1h-4v-1h4zm4 0h4v1h-4v-1zm8 0h4v1h-4v-1zm1 57h4v1h-4v-1zm-4 0v1h-4v-1h4zm-12 0h4v1h-4v-1zm-4 0v1h-4v-1h4zm-12 0h4v1h-4v-1zm-4 0v1h-4v-1h4zm-12 0h4v1h-4v-1zm-4 0v1h-4v-1h4zm-12 0h4v1h-4v-1zm-4 0v1h-4v-1h4zM8 38v24H7V38h1zm77 18a5 5 0 1 1-10 0 5 5 0 0 1 10 0zm-5 4a4 4 0 1 0 0-8 4 4 0 0 0 0 8z"></path>
            </svg>
            <h3 class="text-center mt-4">Affordable</h3>
          </div>
        </div>

        <div class="row mt-5">
          <div class="col-md-6 my-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100" class="heroicon-browser heroicon heroicons-lg heroicon-b2 m-auto d-block">
                <path class="heroicon-browser-interface-background heroicon-component-fill" fill="#FFFFFF" d="M0 31h100v55a4 4 0 0 1-4 4H4a4 4 0 0 1-4-4V31z"></path>
                <rect class="heroicon-browser-interface-body heroicon-component-fill" width="56" height="36" x="10" y="48" fill="#FFFFFF"></rect>
                <rect class="heroicon-browser-interface-sidebar heroicon-component-fill" width="22" height="36" x="68" y="48" fill="#FFFFFF"></rect>
                <rect class="heroicon-browser-interface-top heroicon-component-fill" width="80" height="10" x="10" y="36" fill="#FFFFFF"></rect>
                <path class="heroicon-browser-menu-bar heroicon-component-accent heroicon-component-fill" fill="#7ACFC0" d="M0 14a4 4 0 0 1 4-4h92a4 4 0 0 1 4 4v17H0V14z"></path>
                <rect class="heroicon-browser-search heroicon-component-fill" width="92" height="4" x="4" y="24" fill="#FFFFFF"></rect>
                <path class="heroicon-outline" fill="#4A4A4A" fill-rule="nonzero" d="M0 30V14a4 4 0 0 1 4-4h92a4 4 0 0 1 4 4v72a4 4 0 0 1-4 4H4a4 4 0 0 1-4-4V30zm96-18H4a2 2 0 0 0-2 2v6h16l6-6h18l6 6h50v-6a2 2 0 0 0-2-2zM2 30h96v-8H47.17l-.58-.59L41.17 16H24.83l-5.42 5.41-.58.59H2v8zm0 2v54c0 1.1.9 2 2 2h92a2 2 0 0 0 2-2V32H2zm3-8h91v4H4v-4h1zm90 1H5v2h90v-2zM10 36h80v10H10V36zm1 1v8h78v-8H11zm0 11h55v36H10V48h1zm54 1H11v34h54V49zm3-1h22v36H68V48zm1 1v34h20V49H69zM8 16a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm3 2a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm7-2a2 2 0 1 1-4 0 2 2 0 0 1 4 0z"></path>
            </svg>
            <h3 class="text-center mt-4"><a href="{{ route('inventory') }}" title="Education Inventory Asset Management Platform">EI Platform</a> Compatible</h3>
          </div>

          <div class="col-md-6 my-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100" class="heroicon-calendar heroicon heroicons-lg heroicon-b2 m-auto d-block">
                <rect class="heroicon-calendar-month heroicon-component-fill" width="100" height="79" y="21" fill="#FFFFFF"></rect>
                <path class="heroicon-calendar-binding heroicon-component-accent heroicon-component-fill" fill="#7ACFC0" d="M79 6h21v15H0V6h21v6a3 3 0 1 0 6 0V6h46v6a3 3 0 1 0 6 0V6z"></path>
                <rect class="heroicon-calendar-date heroicon-component-accent heroicon-component-fill" width="14" height="12" x="69" y="51" fill="#7ACFC0"></rect>
                <path class="heroicon-calendar-rings heroicon-component-fill" fill="#FFFFFF" d="M21 4a3 3 0 0 1 6 0v8a3 3 0 0 1-6 0V4zm52 0a3 3 0 0 1 6 0v8a3 3 0 0 1-6 0V4z"></path>
                <path class="heroicon-shadows" fill="#000000" d="M79 6v6a3 3 0 0 1-6 0V6v2a3 3 0 1 0 6 0V6zM27 6v6a3 3 0 0 1-6 0V6v2a3 3 0 1 0 6 0V6zM1 90h98v9H1v-9zm0-71h98v4H1v-4z" opacity=".2"></path>
                <path class="heroicon-outline" fill="#4A4A4A" fill-rule="nonzero" d="M20 4a4 4 0 0 1 8 0v2h44V4a4 4 0 0 1 8 0v2h20v94H0V6h20V4zm0 4H2v10h96V8H80v4a4 4 0 0 1-8 0V8H28v4a4 4 0 0 1-8 0V8zm78 11H2v1h96v-1zM2 22v67h96V22H2zM24 2a2 2 0 0 0-2 2v8a2 2 0 0 0 4 0V4a2 2 0 0 0-2-2zm50 2v8a2 2 0 0 0 4 0V4a2 2 0 0 0-4 0zm24 87H2v1h30v1H2v1h40v1H2v3h96v-1H68v-1h30v-3H58v-1h40v-1zM17 29h1v11h12V29h1v11h12V29h1v11h12V29h1v11h12V29h1v11h12V29h1v11h13v1H83v10h13v1H83v10h13v1H83v10h13v1H83v11h-1V74H70v11h-1V74H57v11h-1V74H44v11h-1V74H31v11h-1V74H18v11h-1V74H4v-1h13V63H4v-1h13V52H4v-1h13V41H4v-1h13V29zm65 44V63H70v10h12zm0-11V52H70v10h12zm0-11V41H70v10h12zM57 41v10h12V41H57zm0 11v10h12V52H57zm0 11v10h12V63H57zm-1 10V63H44v10h12zm0-11V52H44v10h12zm0-11V41H44v10h12zM31 41v10h12V41H31zm0 11v10h12V52H31zm0 11v10h12V63H31zm-1 10V63H18v10h12zm0-11V52H18v10h12zm0-11V41H18v10h12zm42 14h2v2h-2v-2zm2-11v2h-2v-2h2zm-2-11h2v2h-2v-2zm-11 0v2h-2v-2h2zm-2 11h2v2h-2v-2zm2 11v2h-2v-2h2zm-15 0h2v2h-2v-2zm2-11v2h-2v-2h2zm-2-11h2v2h-2v-2zm-11 0v2h-2v-2h2zm-2 11h2v2h-2v-2zm2 11v2h-2v-2h2zm-15 0h2v2h-2v-2zm2-11v2h-2v-2h2zm-2-11h2v2h-2v-2zm56-18v1H24v-1h52zm-17 7h2v2h-2v-2zm15 0v2h-2v-2h2zm11 0h2v2h-2v-2zM9 43v2H7v-2h2zm78 0v2h-2v-2h2zM7 54h2v2H7v-2zm78 0h2v2h-2v-2zM9 65v2H7v-2h2zm78 0v2h-2v-2h2zM7 76h2v2H7v-2zm15 0v2h-2v-2h2zm11 0h2v2h-2v-2zm15 0v2h-2v-2h2zm11 0h2v2h-2v-2zm15 0v2h-2v-2h2zm11 0h2v2h-2v-2z"></path>
            </svg>
            <h3 class="text-center mt-4">Durable & Long Lasting</h3>
          </div>
        </div>

      </div>

      <div class="col-md-4 pt-1">
        <label-chooser-component
          :images="[{
              src: '{{ url('storage/web/barcode_label_packaging.png') }}'
          }]">
        </label-chooser-component>
      </div>
    </div>
  </div>
@endsection
