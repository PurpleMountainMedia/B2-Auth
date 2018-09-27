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

        <div class="col-lg-8 text-white text-right">
          <h3>{{__('web.label-help')}}</h3>

          <a class="text-white" href="tel:08006445766"><i class="far fa-phone mr-2"></i> 0800 644 5766</a></br>
          <a class="text-white" href="mailto:help@b2systems.co.uk"><i class="far fa-envelope mr-2"></i> help@b2systems.co.uk</a>

        </div>
      </div>
    </div>
  </div>
</footer>
