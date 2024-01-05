<?php $__env->startSection('content'); ?>
<script>
    <?php if(session('success')): ?>
        Swal.fire('Success', '<?php echo e(session('success')); ?>', 'success');
    <?php elseif(session('error')): ?>
        Swal.fire('Error', '<?php echo e(session('error')); ?>', 'error');
    <?php endif; ?>
</script>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-table">
                    <div class="card-body">
                        <div class="title-header option-title">
                            <h5>All Users</h5>
                            
                        </div>

                        <div class="table-responsive table-product">
                            <table class="table all-package theme-table" id="table_id">
                                <thead>
                                    <tr>
                                        <th>S.no</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Registration date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td>
                                                <div class="table-image">
                                                    <?php echo e($i++); ?>

                                                </div>
                                            </td>

                                            <td>
                                                <div class="user-name">
                                                    <span><?php echo e($user->fname . ' ' . $user->lname); ?></span>
                                                </div>
                                            </td>

                                            <td><?php echo e($user->phone); ?></td>

                                            <td><?php echo e($user->email); ?></td>
                                            <td><?php echo e($user->created_at); ?></td>
                                            <td>
                                                <ul>


                                                    <li>

                                                        <a href="<?php echo e(route('edituser',['id' =>  $user->id ])); ?>">
                                                            <i class="ri-pencil-line"></i>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="<?php echo e(route('deleteuser',['id' =>  $user->id ])); ?>"
                                                            data-bs-target="#exampleModalToggle">
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.adminDashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\curryleaf\resources\views/users/alluser.blade.php ENDPATH**/ ?>