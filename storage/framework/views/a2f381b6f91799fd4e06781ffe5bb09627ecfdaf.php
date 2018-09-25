<?php $__env->startSection('content'); ?>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <b2-register-form register-route="<?php echo e(route('register')); ?>"
                        login-route="<?php echo e(route('login')); ?>">
      </b2-register-form>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>