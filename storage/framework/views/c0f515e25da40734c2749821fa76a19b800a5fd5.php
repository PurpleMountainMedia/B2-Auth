<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <?php $user = Auth::User(); ?>

    <?php echo '<script>window.b2Systems = {"name":"B2 Systems","site_url":"http:\/\/b2systems.test","api_prefix":"api","logo":"http:\/\/b2systems.test\/storage\/system\/b2_logo1.png"}</script>'; ?>

    <script>
        window.b2User = {
            id: '<?php echo e($user->id); ?>',
            name: '<?php echo e($user->name); ?>',
            email: '<?php echo e($user->email); ?>',
            permissions: <?php echo json_encode($user->getPermissionsViaRoles(), 15, 512) ?>
        }
    </script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
</head>
<body>
    <div id="app">

        <?php echo $__env->yieldContent('header'); ?>

        <?php echo $__env->yieldContent('products'); ?>

        <div class="container py-5">
            <div class="col-lg-8 m-auto">
                <div class="row">
                    <div class="col-md-3 border-right">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link active" href="<?php echo e(route('web.dashboard.index')); ?>"><i class="far fa-tachometer-alt"></i> Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('web.organisations.index')); ?>"><i class="far fa-sitemap"></i> Organisations</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('web.schools.index')); ?>"><i class="far fa-school"></i> Schools</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('web.licences.index')); ?>"><i class="far fa-credit-card-blank"></i> Licences</a>
                            </li>
                        </ul>
                        <ul class="nav flex-column mt-2">
                            <li class="nav-item">
                                <a class="nav-link active text-danger" href="<?php echo e(route('logout')); ?>"><i class="far fa-sign-out"></i> Log Out</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-9">
                        <?php echo $__env->yieldContent('content'); ?>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Scripts -->
    <script src="<?php echo e(mix('js/manifest.js')); ?>"></script>
    <script src="<?php echo e(mix('js/vendor.js')); ?>"></script>
    <script src="<?php echo e(mix('js/app.js')); ?>"></script>
</body>
</html>
