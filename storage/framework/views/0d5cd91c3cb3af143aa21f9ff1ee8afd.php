<?php $__env->startSection('content'); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-sm-8 m-auto">
                    <div class="card">
                        <div class="card-body">
                            <div class="title-header option-title">
                                <h5>Edit User</h5>
                            </div>
                            <form class="theme-form theme-form-2 mega-form" action="<?php echo e(route('editsaveuser')); ?>" method="post">
                              <?php echo csrf_field(); ?>  <!-- <div class="card-header-1">
                                            <h5>User Information</h5>
                                        </div> -->
<input type="hidden" name="id" value="<?php echo e($user->id); ?>">
                                <div class="row">
                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-lg-3 col-md-3 mb-0">
                                            First Name</label>
                                        <div class="col-md-9 col-lg-9">
                                            <input class="form-control" name="fname" value="<?php echo e($user->fname); ?>" type="text">
                                        </div>
                                    </div>
                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-lg-3 col-md-3 mb-0">
                                            Last Name</label>
                                        <div class="col-md-9 col-lg-9">
                                            <input class="form-control" name="lname" value="<?php echo e($user->lname); ?>" type="text">
                                        </div>
                                    </div>
                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-lg-3 col-md-3 mb-0">Phone Number</label>
                                        <div class="col-md-9 col-lg-9">
                                            <input class="form-control" name="phone" value="<?php echo e($user->phone); ?>" type="text">
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label
                                            class="col-lg-3 col-md-3 col-form-label form-label-title">Email
                                            Address</label>
                                        <div class="col-md-9 col-lg-9">
                                            <input class="form-control" name="email" value="<?php echo e($user->email); ?>" type="email">
                                        </div>
                                    </div>

                                    

                                    <div class="mb-4 row align-items-center">
                                        <label
                                            class="col-lg-3 col-md-3 col-form-label form-label-title">Date of Birth</label>
                                        <div class="col-md-9 col-lg-9">
                                            <input class="form-control" name="dob" value="<?php echo e($user->dob); ?>" type="date">
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

<?php echo $__env->make('layouts.adminDashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\30Dec-curryleaf\resources\views/users/edit_page.blade.php ENDPATH**/ ?>