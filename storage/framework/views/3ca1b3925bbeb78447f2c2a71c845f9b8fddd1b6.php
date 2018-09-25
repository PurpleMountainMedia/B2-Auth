<?php $__env->startSection('content'); ?>
    <div class="container">
        <b2-user-form :user='<?php echo json_encode($user, 15, 512) ?>' dusk="user-form-component"/>

        <authorized-clients></authorized-clients>
        <clients></clients>
        <personal-access-tokens></personal-access-tokens>
    </div>
    <p class="mt-5">User ID: <strong><?php echo e($user->id); ?></strong></p>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>