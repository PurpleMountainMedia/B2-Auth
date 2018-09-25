<?php $__env->startSection('content'); ?>
    <div class="container">
        <b2-organisations-form :organisations='<?php echo json_encode($user->organisations, 15, 512) ?>' />
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>