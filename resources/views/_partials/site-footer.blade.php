<footer>
  <div class="py-5 bg-secondary">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 text-white">
          <h3>{{__('web.label-contact')}}</h3>

          <form action="{{ route('contact') }}" method="post" class="text-white">
            @csrf

              <div class="form-group">
                <label for="contact_form_name">{{__('web.name')}}</label>
                <input name="name" type="text" class="form-control @if ($errors->has('name')) is-invalid @endif" id="contact_form_name" placeholder="John Smith" value="{{ old('name') }}">
                <div class="invalid-feedback">
                  {{ $errors->first('name') }}
                </div>
              </div>

              <div class="form-group">
                <label for="contact_form_email">{{__('web.email')}}</label>
                <input name="email" type="email" class="form-control" id="contact_form_email" placeholder="help@b2systems.co.uk" value="{{ old('email') }}">
              </div>

              <div class="form-group">
                <label for="contact_form_email">{{__('web.message')}}</label>
                <textarea name="message" class="form-control" id="contact_form_email" placeholder="" value="{{ old('message') }}">{{__('web.message-placeholder')}}</textarea>
              </div>

            <button type="submit" class="btn btn-primary">{{__('web.submit')}}</button>
          </form>
        </div>

        <div class="col-lg-4 px-5 text-center border border-white border-top-0 border-bottom-0">
          <h3 class="text-white mb-5">Want to put our system through it's paces? Enquire below about a free trial and one of our sales team will be able to walk you through its capabilities.</h3>
          {{-- <a href="#" class="btn btn-primary btn-lg">Book Free Trial</a> --}}
          <button type="submit" disabled class="btn btn-primary btn-lg">Book Free Trial</button>
        </div>

        <div class="col-lg-4 px-5">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link text-light" href="{{ route('home') }}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="{{ route('security_labels') }}">Security Labels</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="{{ route('freedom') }}">B2 Freedom Tool</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="{{ route('inventory') }}">EI PLatform</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="{{ route('onsite-asset-discovery') }}">Onsite Asset Discovery</a>
            </li>
          </ul>

          <div class="text-white mt-3 pl-3">
            <h3>{{__('web.label-help')}}</h3>

            <a class="text-white" href="tel:08006445766"><i class="far fa-phone mr-2"></i> 0800 644 5766</a></br>
            <a class="text-white" href="mailto:help@b2systems.co.uk"><i class="far fa-envelope mr-2"></i> help@b2systems.co.uk</a>
          </div>

        </div>
      </div>
    </div>
  </div>
</footer>
