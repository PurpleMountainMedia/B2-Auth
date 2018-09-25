<?php $__env->startSection('content'); ?>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <b2-create-organisation-form create-organisation-route="<?php echo e(route('organisations.store')); ?>">
      </b2-create-organisation-form>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>