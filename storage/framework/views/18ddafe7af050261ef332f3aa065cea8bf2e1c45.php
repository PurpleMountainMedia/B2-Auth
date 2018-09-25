<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <script>
        window.b2_systems = {
            site_url: '<?php echo e(config('app.url')); ?>',
            api_prefix: '<?php echo e(config('app.api_prefix')); ?>'
        }
    </script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="<?php echo e(mix('css/site.css')); ?>" rel="stylesheet">

    <?php echo $__env->yieldPushContent('header_scripts'); ?>
</head>
<body>
    <div id="web">
        <?php $__env->startComponent('_partials.site-header'); ?>
        <?php echo $__env->renderComponent(); ?>

        <?php echo $__env->yieldContent('below_nav'); ?>

        <?php echo $__env->yieldContent('content'); ?>

        <?php $__env->startComponent('_partials.site-footer'); ?>
        <?php echo $__env->renderComponent(); ?>
    </div>

    <!-- Scripts -->
    <script src="<?php echo e(mix('js/manifest.js')); ?>"></script>
    <script src="<?php echo e(mix('js/vendor.js')); ?>"></script>
    <script src="<?php echo e(mix('js/web.js')); ?>"></script>
    <?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html>
