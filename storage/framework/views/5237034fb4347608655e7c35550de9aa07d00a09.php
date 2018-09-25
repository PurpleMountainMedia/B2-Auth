<?php $__env->startSection('below_nav'); ?>
  <div>
    <div class="below_nav_container container-fluid p-5 d-flex align-items-center header_image" id="freedom_header">
      <div class="container header_container_inner">
        <h2 class="text-dark font-weight-strong">B2 Freedom</h2>
        <p class="text-dark font-weight-strong">Automated IT Discovery Tool</p>
      </div>
    </div>
  </div>
  <div class="container-fluid below_nav_container_buffer"></div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('header_scripts'); ?>
  <style media="screen">
    #freedom_header {
      background: url(<?php echo e(url('storage/web/b2_freedom_screen.png')); ?>);
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
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
  <div class="container mt-5 pt-5">
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.site', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>