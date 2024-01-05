<?php $__env->startSection('content'); ?>

<div class="container-fluid">
    <?php if(session('message')): ?>
    <div class="alert alert-danger">
        <?php echo e(session('message')); ?>

    </div>
<?php endif; ?>
<?php if($errors->any()): ?>
<div class="alert alert-danger">
    <ul>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($error); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>
<?php endif; ?>
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-sm-8 m-auto">
                    <div class="card">
                        <div class="card-body">
                            <div class="title-header option-title">
                                <h5>Add User</h5>
                            </div>
                            <form class="theme-form theme-form-2 mega-form" action="<?php echo e(route('storeuser')); ?>" method="post">
                              <?php echo csrf_field(); ?>  <!-- <div class="card-header-1">
                                            <h5>User Information</h5>
                                        </div> -->

                                <div class="row">
                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-lg-3 col-md-3 mb-0">
                                            First Name<span class="text-danger"> *</span></label>
                                        <div class="col-md-9 col-lg-9">
                                            <input class="form-control" name="fname"  type="text">
                                        </div>
                                    </div>
                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-lg-3 col-md-3 mb-0">
                                            Last Name<span class="text-danger"> *</span></label>
                                        <div class="col-md-9 col-lg-9">
                                            <input class="form-control" name="lname"  type="text">
                                        </div>
                                    </div>
                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-lg-3 col-md-3 mb-0">Phone Number<span class="text-danger"> *</span></label>
                                        <div class="col-md-9 col-lg-9">
                                            <input class="form-control" name="phone"  type="text">
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label
                                            class="col-lg-3 col-md-3 col-form-label form-label-title">Email
                                            Address<span class="text-danger"> *</span></label>
                                        <div class="col-md-9 col-lg-9">
                                            <input class="form-control" name="email" type="email">
                                        </div>
                                    </div>

                                    

                                    <div class="mb-4 row align-items-center">
                                        <label
                                            class="col-lg-3 col-md-3 col-form-label form-label-title">Date of Birth<span class="text-danger"> *</span></label>
                                        <div class="col-md-9 col-lg-9">
                                            <input class="form-control" name="dob"  type="date">
                                        </div>
                                    </div>
                                    <div class="mb-4 row align-items-center">
                                        <label class="col-lg-3 col-md-3 col-form-label form-label-title" for="flexRadioDefault1">Gender <span
                                                class="text-danger"> *</span></label>

                                            <div class="col-md-9 col-lg-2">
                                                <input type="radio" name="gender" value="Male" required>
                                                    Male

                                            </div>

                                            <div class="col-md-9 col-lg-2">
                                                <input type="radio" name="gender" value="Female" required>
                                                    Female

                                            </div>

                                            <div class="col-md-9 col-lg-3">
                                                <input type="radio" name="gender" value="Transgender" required>
                                                    Transgender

                                            </div>


                                    </div>
                                    <div class="mb-4 row align-items-center justify-content-center">
                                        <div class="col-sm-2">

                                            <input type="submit" class="btn btn-solid" value="Submit"></input>
                                        </div>
                                        <div class="col-sm-2">
                                            <a class="btn btn-solid2" href="<?php echo e(route('users.index')); ?>">Cancel</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.adminDashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\curryleaf\resources\views/users/adduser.blade.php ENDPATH**/ ?>