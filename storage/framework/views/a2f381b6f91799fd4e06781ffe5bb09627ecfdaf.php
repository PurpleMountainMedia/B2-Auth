<?php $__env->startSection('content'); ?>
  <div class="page-auth">
    <div id="particles-js" class="bg-dark">
      <div class="container">
        <div class="row screen_full_height d-flex justify-content-center">
          <div class="col-12 col-lg-8">
            <div class="h-100 d-flex align-items-center">
              <b2-register-form register-route="<?php echo e(route('register')); ?>"
                                login-route="<?php echo e(route('login')); ?>"
                                url-return="<?php echo e(route('home')); ?>"
                                class="auth-form">
              </b2-register-form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script src="<?php echo e(mix('js/particles.js')); ?>" charset="utf-8"></script>
    <script src="<?php echo e(mix('js/particles-config.js')); ?>" charset="utf-8"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.auth', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>