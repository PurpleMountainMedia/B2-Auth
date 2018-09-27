<footer>
  <div class="py-5 bg-secondary">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 px-5">
          <h3 class="text-white">Contact Us</h3>
          <a href="mailto:help@b2systems.co.uk" class="text-white">help@b2systems.co.uk</a><br />
          <a href="tel:08006445766" class="text-white">0800 644 5766</a>

          <form action="<?php echo e(route('contact')); ?>" method="post" class="text-white mt-5">
            <?php echo csrf_field(); ?>

              <div class="form-group">
                <label for="contact_form_name">Name</label>
                <input name="name" type="text" class="form-control <?php if($errors->has('name')): ?> is-invalid <?php endif; ?>" id="contact_form_name" placeholder="John Smith" value="<?php echo e(old('name')); ?>">
                <div class="invalid-feedback">
                  <?php echo e($errors->first('name')); ?>

                </div>
              </div>

              <div class="form-group">
                <label for="contact_form_email">Email</label>
                <input name="email" type="email" class="form-control" id="contact_form_email" placeholder="help@b2systems.co.uk" value="<?php echo e(old('email')); ?>">
              </div>

              <div class="form-group">
                <label for="contact_form_email">Message</label>
                <textarea name="message" class="form-control" id="contact_form_email" placeholder="I would like some more information." value="<?php echo e(old('message')); ?>"></textarea>
              </div>

            <button type="submit" disabled class="btn btn-primary">Submit</button>
          </form>
        </div>

        <div class="col-lg-4 px-5 text-center border border-bottom-0 border-top-0 border-white">
          <h3 class="text-white mb-5">Want to put our system through it's paces? Enquire below about a free trial and one of our sales team will be able to walk you through its capabilities.</h3>
          
          <button type="submit" disabled class="btn btn-primary btn-lg">Book Free Trial</button>
        </div>

        <div class="col-lg-4 px-5">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link text-light" href="<?php echo e(route('home')); ?>">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="<?php echo e(route('security_labels')); ?>">Security Labels</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="<?php echo e(route('freedom')); ?>">B2 Freedom Tool</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="<?php echo e(route('inventory')); ?>">EI PLatform</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="<?php echo e(route('onsite-asset-discovery')); ?>">Onsite Asset Discovery</a>
            </li>
          </ul>
        </div>

      </div>
    </div>
  </div>
</footer>
