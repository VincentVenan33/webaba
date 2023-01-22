<?php $__env->startSection('login'); ?>
<div class="wrapper vh-100">
    <div class="row align-items-center h-100">
      <form class="col-lg-3 col-md-4 col-10 mx-auto text-center">
        <div class="mx-auto text-center my-4">
          <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="/">
            <img class="logo" src="assets/images/logo.png" alt="asiabangunabadi"/>
          </a>
          <h4 class="my-3">Password reset successfully!</h4>
        </div>
        <div class="alert alert-success" role="alert"> An email has been sent to your email <strong>email@example.com</strong>. Please check your email to get reset link </div>
        <a href="/" class="btn btn-lg btn-primary btn-block">Back to home</a>
        <p class="mt-5 mb-3 text-muted">© 2020</p>
      </form>
    </div>
  </div>
  <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.tempalte_login', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\webaba\resources\views/auth-confirm.blade.php ENDPATH**/ ?>