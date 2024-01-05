
<?php $__env->startSection('content'); ?>

<div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card card-table">
                                <div class="card-body">
                                    <div class="title-header option-title d-sm-flex d-block">
                                        <h5>Products List</h5>
                                        <div class="right-options">
                                            <ul>
                                                <li>
                                                    <a href="javascript:void(0)">import</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Export</a>
                                                </li>
                                                <li>
                                                    <a class="btn btn-solid d-flex align-items-center" href="<?php echo e(route('addedit.products')); ?>"><i data-feather="plus-square"></i> Add Product</a>
                                                    
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="table-responsive">
                                            <table class="table all-package theme-table table-product" id="table_id">
                                                <thead>
                                                    <tr>
                                                        <th>Product Image</th>
                                                        <th>Product Name</th>
                                                        <th>Category</th>
                                                        <th>Current Qty</th>
                                                        <th>Price</th>
                                                        <th>Feature</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td>
                                                            <div class="table-image">
                                                                <img src="<?php echo e(asset('admin/upload/product/'.$pro->images)); ?>" class="img-fluid"
                                                                    alt="">
                                                            </div>
                                                        </td>

                                                        <td><?php echo e($pro->name); ?></td>

                                                        <td><?php echo e($pro->category); ?></td>

                                                        <td><?php echo e($pro->quantity); ?></td>

                                                        <td class="td-price"><?php echo e($pro->price); ?></td>

                                                        <td class="feature_select">
                                                        <select class="js-example-basic-single w-100" name="" multiple="multiple">
                                                            <option selected>Popular</option>
                                                            <option>New</option>
                                                            <option>hot</option>
                                                        </select>
                                                        </td>

                                                        <td>
                                                            <ul>
                                                                <li>
                                                                    <a href="<?php echo e(route('edit.products', ['id' => $pro->id])); ?>">
                                                                        <i class="ri-pencil-line"></i>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="<?php echo e(route('delete.products',['id' => $pro->id])); ?>" >
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

<script>
    var success = '<?php echo e(session('success')); ?>';
    var error = '<?php echo e(session('error')); ?>';

    if (success) {
        Swal.fire({
        icon: "success",
        title: success,
        showConfirmButton: false,
        timer: 1500
        });
    }

    if (error) {
        Swal.fire({
        icon: "error",
        title: error,
        showConfirmButton: false,
        timer: 1500
        });
    }

</script>                  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminDashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\curryleaf\resources\views/products/listproducts.blade.php ENDPATH**/ ?>