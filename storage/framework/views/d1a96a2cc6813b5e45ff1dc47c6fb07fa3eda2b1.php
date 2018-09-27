<?php $__env->startSection('header'); ?>
  <?php $__env->startComponent('_partials.dash-header'); ?>
  <?php echo $__env->renderComponent(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
      <a href="<?php echo e($client->redirect_url); ?>" class="btn btn-primary">Setup DD</a>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('products'); ?>

  <?php $__env->startComponent('_partials.site-products'); ?>
  <?php echo $__env->renderComponent(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>