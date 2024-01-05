<?php $__env->startSection('content'); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-sm-12">


                    <div class="card">
                        <div class="card-body">
                            <div class="card-header-2">
                                <h5>Edit FAQ</h5>
                            </div>

                            <form action="<?php echo e(route('admin.updatefaq')); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="id" value="<?php echo e($faq->id); ?>">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Question</label>
                                    <textarea class="form-control" name="question" rows="3" required><?php echo e($faq->question); ?></textarea>
                                  </div>
                                  <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Answer</label>
                                    <textarea class="form-control" name="answer" rows="3" required><?php echo e($faq->answer); ?></textarea>
                                  </div>

                                <div class="mt-3 row align-items-center justify-content-center">
                                    <div class="col-sm-2">
                                        <input type="submit" class="btn btn-solid " value="Save">
                                    </div>
                                    <div class="col-sm-2">
                                        <a class="btn btn-solid2" href="<?php echo e(route('admin.faq')); ?>">Cancel</a>
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

<?php echo $__env->make('layouts.adminDashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\curryleaf\resources\views/admindashboard/editfaq.blade.php ENDPATH**/ ?>