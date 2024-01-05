<?php $__env->startPush('css'); ?>

<style>
    header {
        border-bottom: 1px solid #ebebebb0;
    }

    a.form-link {
        color: #ff7c08;
        font-family: 'Barlow', sans-serif !important;
        font-weight: 600;
    }

    a.form-link:hover {
        color: #595959;
    }

    span.txt-style {
        font-family: 'Barlow', sans-serif !important;
        font-weight: 500;
        color: #595959;
    }

    .btn-new {
        background: #ff7c08;
        padding: 12px 40px 12px 40px;
        border: 1px solid #ff7c08;
        color: #fff;
        font-size: 16px !important;
        font-family: 'Barlow', sans-serif !important;
        font-weight: 600;
        text-transform: capitalize;
        display: inline-block;
        margin-top: 10px;
        border-radius: 30px;
        transition: 0.3s;
    }

    .btn-new:hover {
        background-color: transparent;
        color: #ff7c08;
    }

    .padding-bottom-60 {
        padding-bottom: 35px;
    }

    .padding-top-140 {
        padding-top: 155px;
    }
</style>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
<script>
    <?php if(session('success')): ?>
        Swal.fire('Success', '<?php echo e(session('success')); ?>', 'success');
    <?php elseif(session('error')): ?>
        Swal.fire('Error', '<?php echo e(session('error')); ?>', 'error');
    <?php endif; ?>
</script>
   <!-- contact-form-area -->
   <section class="border-top about-area about-area2 writeto-us login-area padding-top-140 signup-area padding-bottom-60">

    <!-- Your login form goes here -->


    <div class="form-shapes">
        <span class="fs1 item-animateOne"><img src="assets/images/shapes/1.png" alt=""></span>
        <span class="fs2 item-bounce"><img src="assets/images/shapes/12.png" alt=""></span>
        <span class="fs3"><img src="assets/images/shapes/13.png" alt=""></span>
        <span class="fs4 item-bounce"><img src="assets/images/shapes/26.png" alt=""></span>
    </div>
    <?php if(session('message')): ?>
        <div class="alert alert-danger">
            <?php echo e(session('message')); ?>

        </div>
    <?php endif; ?>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4 col-md-12 wow fadeInUp">
                <div class="contact-form-area login-form-area signup-form-area">
                    <h3>Login Your Account</h3>

                    <form action="<?php echo e(route('login.verify')); ?>" method="post" autocomplete="off">
                        <?php echo csrf_field(); ?>
                         <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email Address <span class="text-danger"> *</span></label>
                            <input type="email" name="email" placeholder="Enter your email address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                        </div>
                        
                        
                        <div class="login-btn">
                            <button type="submit" class="btn-new w-100">login account</button>
                        </div>
                        <div class="mt-4">
                            <div class="d-flex align-items-center">
                                <div>
                                    <span class="txt-style">Don't have an account ?</span>
                                </div>
                                <a href="<?php echo e('Signup'); ?>" class="form-link ps-2">Register</a>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\curryleaf\resources\views/profile/login.blade.php ENDPATH**/ ?>