<div class="container fixed-top">
  <nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
    <a class="navbar-brand" href="<?php echo e(route('home')); ?>">
      <img src="<?php echo e(getB2Config('logo')); ?>" class="site_logo navbar-brand" alt="B2 Systems">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">

        <li class="nav-item">
          <a class="nav-link" href="<?php echo e(route('security_labels')); ?>">Security Labels</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Software
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="<?php echo e(route('inventory')); ?>">Education Inventory</a>
            <a class="dropdown-item" href="<?php echo e(route('freedom')); ?>">B2 Freedom</a>
          </div>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Services
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="<?php echo e(route('onsite-asset-discovery')); ?>">Onsite Asset Discovery</a>
          </div>
        </li>

        <li class="nav-item">
          <?php if(auth()->guard()->check()): ?>
            <a class="nav-link text-primary" href="<?php echo e(route('web.dashboard.index')); ?>">
              <i class="far fa-user-circle"></i> <?php echo e(__('Welcome')); ?>, <?php echo e(Auth::user()->first_name); ?>

            </a>
          <?php else: ?>
            <a class="nav-link text-primary" href="<?php echo e(route('login')); ?>">
              <i class="far fa-user-circle"></i> <?php echo e(__('Login')); ?>

            </a>
          <?php endif; ?>
        </li>
      </ul>
    </div>
  </nav>
</div>
