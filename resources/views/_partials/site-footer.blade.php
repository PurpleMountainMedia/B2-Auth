<footer>
  <div class="py-5 bg-secondary">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h3 class="text-white">Contact Us</h3>
          <a href="#" class="text-white">help@b2systems.co.uk</a>

          <form action="{{ route('contact') }}" method="post" class="text-white mt-5">
            @csrf

              <div class="form-group">
                <label for="contact_form_name">Name</label>
                <input type="text" class="form-control" id="contact_form_name" placeholder="John Smith">
              </div>

              <div class="form-group">
                <label for="contact_form_email">Email</label>
                <input type="email" class="form-control" id="contact_form_email" placeholder="help@b2systems.co.uk">
              </div>

              <div class="form-group">
                <label for="contact_form_email">Message</label>
                <textarea class="form-control" id="contact_form_email" placeholder="I would like some more information."></textarea>
              </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>

        </div>
      </div>
    </div>
  </div>
</footer>
