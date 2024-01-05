
<?php $__env->startSection('content'); ?>
<?php $__env->startPush('css'); ?>
<style>
.title-header.option-title {
    justify-content: none;
}
/* .select-new {
    border: 1px solid #e7e5e5 !important;
    padding: 10px 10px !important;
    background-color: #fff !important;
}  */
</style>
<?php $__env->stopPush(); ?>
        <!-- All User Table Start -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card card-table">
                                <div class="card-body">
                                    <div class="title-header option-title">
                                        <h5>Home Slider</h5>
                                        <form class="d-inline-flex">
                                            <a href="<?php echo e(route('slider.create')); ?>"
                                                class="align-items-center btn btn-theme d-flex">
                                                <i data-feather="plus-square"></i>Add New
                                            </a>
                                        </form>
                                    </div>

                                    <div class="table-responsive category-table">
                                        <div>
                                            <table class="table all-package theme-table" id="table_id">
                                                <thead>
                                                    <tr>
                                                        <th>S.No</th>
                                                        <th>Title 1</th>
                                                        <th>Title 2</th>
                                                        <th>Content</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>

                                                <tbody><?php $i = 1 ?>
                                              <?php $__currentLoopData = $slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td><?php echo e($i); ?></td>
                                                        <td><?php echo e($val->title_1); ?></td>
                                                        <td><?php echo e($val->title_2); ?></td>
                                                        <td><?php echo e($val->content); ?></td>
                                                        <td>  
                                                                <select class="status form-select" name="status" id="statusSelect" data-slider-id="<?php echo e($val->id); ?>" >
                                                                    <option >Select Status</option>
                                                                    <option value="Active" <?php echo e($val->status == "Active" ? 'selected': ''); ?> >Active</option>
                                                                    <option value="Deactive" <?php echo e($val->status == "Deactive" ? 'selected': ''); ?> >Deactive</option>
                                                                </select>
                                                    
                                                        </td>
                                                        <td>
                                                            <ul>
                                                                <li>
                                                                    <a href="<?php echo e(route('slider.edit',['slider' => $val->id ])); ?>">
                                                                        <i class="ri-pencil-line"></i>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                <a href="<?php echo e(route('slider.delete',['id' => $val->id ])); ?>" >
                                                                    <i class="ri-delete-bin-line"></i>
                                                                </a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr><?php $i++ ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- All User Table Ends-->

    
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
<script>
    $(document).ready(function () {
        $('.status').change(function () {
            var id = $(this).data('slider-id');
            var status = $(this).val();

            $.ajax({
                url: "<?php echo e(route('slider.status')); ?>",
                type: 'POST',
                data: {
                    _token: '<?php echo e(csrf_token()); ?>',
                    id:id,
                    status: status
                },
                success: function (data) {
                    Swal.fire({
                    icon: "success",
                    title: success,
                    text: data.message,
                    showConfirmButton: false,
                    timer: 1500
                    });
                },
                error: function (xhr, textStatus, errorThrown) {
                    console.error('Error updating slider status');
                }
            });
        });
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminDashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\curryleaf\resources\views/home/slider.blade.php ENDPATH**/ ?>