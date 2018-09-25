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

    <script>
      window.intercomSettings = {
        app_id: "n2sb33ro",
        background_color: '#008080'
      };
    </script>
    <script>(function(){var w=window;var ic=w.Intercom;if(typeof ic==="function"){ic('reattach_activator');ic('update',intercomSettings);}else{var d=document;var i=function(){i.c(arguments)};i.q=[];i.c=function(args){i.q.push(args)};w.Intercom=i;function l(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://widget.intercom.io/widget/n2sb33ro';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);}if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})()</script>
</body>
</html>
