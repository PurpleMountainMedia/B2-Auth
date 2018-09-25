<?php $__env->startSection('content'); ?>

    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-8" style="text-align: center;">


            <a class="btn btn-outline-danger" href="<?php echo e(route('logout')); ?>"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                <?php echo e(__('Logout')); ?>

            </a>

            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                <?php echo csrf_field(); ?>
            </form>


            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.site', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>