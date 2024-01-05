
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
                        <div class="card-body">
                            <div class="card-header-2">
                                <h5>Product Images</h5>
                            </div>

                    <form action="<?php echo e(route('create.product')); ?>" method="post" enctype="multipart/form-data" class="theme-form theme-form-2 mega-form">
                            <div class="theme-form theme-form-2 mega-form">
                            <?php echo csrf_field(); ?>    
                            <div class="mb-4 row align-items-center">
                                    <label
                                        class="col-sm-2 col-form-label form-label-title">Images</label>
                                    <div class="col-sm-9">
                                        <input class="form-control form-choose" type="file" name="images" accept="image/*"
                                             multiple>
                                    </div>
                                </div>
                          </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="card-header-2">
                                <h5>Product Information</h5>
                            </div>

                            <div class="theme-form theme-form-2 mega-form">
                                <div class="mb-4 row align-items-center">
                                    <label class="form-label-title col-sm-2 mb-0">Product
                                        Name</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" name="name"
                                            placeholder="Product Name">
                                    </div>
                                </div>
                                <div class="mb-4 row align-items-center">
                                    <label class="form-label-title col-sm-2 mb-0">Product
                                    Quantity</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="number" name="quantity"
                                            placeholder="Enter quantity">
                                    </div>
                                </div>
                                <div class="mb-4 row align-items-center">
                                    <label class="form-label-title col-sm-2 mb-0">Product
                                        Price</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="number" name="price"
                                            placeholder="Enter price">
                                    </div>
                                </div>
                                <div class="mb-4 row align-items-center">
                                    <label
                                        class="col-sm-2 col-form-label form-label-title">Category</label>
                                    <div class="col-sm-9">
                                        <select class="js-example-basic-single w-100" name="category">
                                            <option >Select Category</option>
                                          <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($val->name); ?>" ><?php echo e($val->name); ?></option>
                                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="mb-4 row align-items-center">
                                    <label
                                        class="col-sm-2 col-form-label form-label-title">Feature</label>
                                    <div class="col-sm-9">
                                        <select class="js-example-basic-single w-100" name="feature"
                                            multiple="multiple">
                                            <option selected>Popular</option>
                                            <option>New</option>
                                            <option>hot</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="mb-4 row align-items-center">
                                    <label class="col-sm-2 col-form-label form-label-title">Tags</label>
                                    <div class="col-sm-9">
                                        <div class="bs-example">
                                            <input type="text" class="form-control"
                                                placeholder="Type tag & hit enter" id="#inputTag" name="tags"
                                                data-role="tagsinput">
                                        </div>
                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="card-header-2">
                                <h5>Description</h5>
                            </div>

                            <div class="theme-form theme-form-2 mega-form">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="row">
                                            <label class="form-label-title col-sm-2 mb-0">Product
                                                Description</label>
                                            <div class="col-sm-9">
                                            <textarea id="editor" name="description"></textarea>  
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-4 row align-items-center justify-content-center">
                        <div class="col-sm-2">
                            <button type="submit" class="btn btn-solid " >Save</button>
                        </div>
                        <div class="col-sm-2">
                            <a class="btn btn-solid2">Cancel</a>
                        </div>
                    </div>

                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
                <!-- New Product Add End -->
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
<!-- ck editor js -->
<script src="<?php echo e(asset('admin/js/ckeditor.js')); ?>"></script>
<script src="<?php echo e(asset('admin/js/ckeditor-custom.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.adminDashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\30Dec-curryleaf\resources\views/products/addproducts.blade.php ENDPATH**/ ?>