
<?php $__env->startSection('content'); ?>

<!-- New Product Add Start -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card">
<div class="card-body">
<?php if($errors->any()): ?>
<div class="alert alert-danger">
    <ul>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo e($error); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>
<?php endif; ?>
                                            <div class="card-header-2">
                                            <h5><?php echo e(isset($slider) ? 'Edit' : 'Create'); ?> Home Slider</h5>
                                            </div>
                                            <form action="<?php echo e(isset($slider) ? route('slider.update', ['slider' => $slider->id]) : route('slider.store')); ?>" method="post" enctype="multipart/form-data" class="theme-form theme-form-2 mega-form">
                                                <?php echo csrf_field(); ?>
                                                <?php if(isset($slider)): ?>
                                                    <?php echo method_field('PUT'); ?>
                                                <?php endif; ?>
                                                <div class="mb-4 row align-items-center">
                                                    <label class="form-label-title col-sm-3 mb-0">Slider Title 1</label>
                                                    <div class="col-sm-9">
                                                        <input autocomplete="off" class="form-control" type="text" name="title_1" value="<?php echo e(isset($slider->title_1)? $slider->title_1: ''); ?>"
                                                            placeholder="Category Name">
                                                    </div>
                                                </div>
                                                <div class="mb-4 row align-items-center">
                                                    <label class="form-label-title col-sm-3 mb-0">Slider Title 2</label>
                                                    <div class="col-sm-9">
                                                        <input autocomplete="off" class="form-control" type="text" name="title_2" value="<?php echo e(isset($slider->title_2)? $slider->title_2: ''); ?>"
                                                            placeholder="Category Name">
                                                    </div>
                                                </div>

                                                <div class="mb-4 row align-items-center">
                                                    <label class="form-label-title col-sm-3 mb-0">Description</label>
                                                    <div class="col-sm-9">
                                                        <input autocomplete="off" class="form-control" type="text" name="content" value="<?php echo e(isset($slider->content)? $slider->content: ''); ?>"
                                                            placeholder="Description">
                                                    </div>
                                                </div>


                                                <div class="mb-4 row align-items-center">
                                                    <label class="form-label-title col-sm-3 mb-0">Slider Image</label>
                                                    <div class="col-sm-9">
                                                        <input class="form-control" type="file" name="image" value="<?php echo e(isset($category->name)? $category->name: ''); ?>"
                                                            placeholder="Category Name">
                                                        <?php if(isset($slider) && $slider->image): ?>
                                                            <img src="<?php echo e(asset('assets/upload/home/'.$slider->image)); ?>">
                                                        <?php endif; ?>
                                                    </div>
                                                </div>

                                                <div class="mb-4 row align-items-center justify-content-center">
                                                    <div class="col-sm-2">
                                                        <button type="submit" class="btn btn-solid " >Save</button>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <a class="btn btn-solid2" href="">Cancel</a>
                                                    </div>
                                                </div>
                                                <?php
                                                $lastSegment = request()->segment(count(request()->segments()));
                                                ?>
                                                <input type="hidden" name="id" value="<?php echo e($lastSegment); ?>" >
                                               
                                            </form>
                                        </div>
                                    </div>

                                   


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- New Product Add End -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminDashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\curryleaf\resources\views/home/addSlider.blade.php ENDPATH**/ ?>