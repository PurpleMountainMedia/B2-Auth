<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <?php echo '<script>window.b2Systems = {"name":"B2 Systems","site_url":"http:\/\/b2systems.test","api_prefix":"api","logo":"http:\/\/b2systems.test\/storage\/system\/b2_logo1.png"}</script>'; ?>
    <?php $__env->startComponent('_partials.form-data-script'); ?>
    <?php echo $__env->renderComponent(); ?>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="<?php echo e(mix('css/site.css')); ?>" rel="stylesheet">
</head>
<body>
    <div id="app">
        <?php echo $__env->yieldContent('below_nav'); ?>

        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <!-- Scripts -->
    <script src="<?php echo e(mix('js/manifest.js')); ?>"></script>
    <script src="<?php echo e(mix('js/vendor.js')); ?>"></script>
    <script src="<?php echo e(mix('js/app.js')); ?>"></script>
    <?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html>
