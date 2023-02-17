<?php $__env->startSection('login'); ?>
<div class="wrapper vh-100">
    <div class="row align-items-center h-100">
      <form class="col-lg-3 col-md-4 col-10 mx-auto text-center" action="<?php echo e(route('actionlogin')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="#">
          <img class="logo logo-login mb-5" src="assets/images/logo.png" alt="asiabangunabadi"/>
        </a>
        <?php if(session('error')): ?>
        <div class="alert alert-danger">
            <b>Opps!</b> <?php echo e(session('error')); ?>

        </div>
        <?php endif; ?>
        <h1 class="h6 mb-3">Sign in</h1>
        <div class="form-group">
          <label for="inputEmail" class="sr-only">Email address</label>
          <input type="email" id="email" name="email" class="form-control form-control-lg" placeholder="Email address" value="<?php echo e(old('email')); ?>" required autofocus>
        </div>
        <div class="form-group mb-5">
          <label for="inputPassword" class="sr-only">Password</label>
          <input type="password" name="password" id="password" class="form-control form-control-lg" placeholder="Password" required>
        </div>
        
        <button class="btn btn-lg btn-primary btn-block" type="submit">LOGIN</button>
        <p class="mt-5 mb-3 text-muted">© PT. Asia Bangun ABADI 2023</p>
      </form>
    </div>
  </div>
  <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template_login', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\webaba\resources\views/auth-login.blade.php ENDPATH**/ ?>