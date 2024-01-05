
<?php $__env->startSection('content'); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-sm-12">


                    <div class="card">
                        <div class="card-body">
                            <div class="card-header-2">
                                <h5>Terms and Conditions</h5>
                            </div>

                            <form class="theme-form theme-form-2 mega-form custom_ckeditor">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="row">

                                            <div class="col-sm-12">
                                                <div id="editor"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-3 row align-items-center justify-content-center">
                                    <div class="col-sm-2">
                                        <a class="btn btn-solid " href="products.php">Save</a>
                                    </div>
                                    <div class="col-sm-2">
                                        <a class="btn btn-solid2" href="products.php">Cancel</a>
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

<?php $__env->startPush('js'); ?>
<!-- ck editor js -->
<script src="<?php echo e(asset('admin/js/ckeditor.js')); ?>"></script>
<script src="<?php echo e(asset('admin/js/ckeditor-custom.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.adminDashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\30Dec-curryleaf\resources\views/admindashboard/termsandCondition.blade.php ENDPATH**/ ?>