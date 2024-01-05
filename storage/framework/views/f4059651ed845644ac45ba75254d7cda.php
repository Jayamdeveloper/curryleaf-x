<?php $__env->startSection('content'); ?>
    <style>
        button.btn.btn-green {
            background-color: #426a44;
            color: #fff;
            padding: 3px 10px;
            display: flex;
            align-items: center;
        }

        button.btn.btn-orange {
            background-color: #ffa53b;
            color: #fff;
            padding: 3px 16px;
            display: flex;
            align-items: center;
            column-gap: 6px;
        }
    </style>
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
                                        <th>Message</th>
                                        <th>Reply status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php $__currentLoopData = $contactus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td>
                                                <div class="table-image">
                                                    <?php echo e($i++); ?>

                                                </div>
                                            </td>

                                            <td>
                                                <div class="user-name">
                                                    <span><?php echo e($user->name); ?></span>
                                                </div>
                                            </td>

                                            <td><?php echo e($user->phone); ?></td>

                                            <td><?php echo e($user->email); ?></td>
                                            <td><?php echo e($user->created_at); ?></td>
                                            <td><?php echo e($user->message); ?></td>
                                            <td><?php
                                            if ($user->reply_status == 1) {
                                                echo '<button type="button" onclick="return replymessage(this.value);" value="' . $user->reply_message . '" class="btn btn-green" data-bs-toggle="modal" data-bs-target="#exampleModal2"><i class="ri-eye-line"></i>&nbsp;Replied</button>';
                                            } else {
                                                echo ' <button type="button" onclick="return replymail(this.value);" value="' . $user->email . '" class="btn btn-orange" data-modal="modalOne" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="ri-reply-line"></i>Reply</button>';
                                            }

                                            ?></td>
                                            <td>
                                                <ul>


                                                    

                                                    <li>
                                                        <a href="<?php echo e(route('deleteuserdata', ['id' => $user->id])); ?>"
                                                            data-bs-target="#exampleModalToggle" class="delete-btn">
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

    <!-- Modal start here -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Reply Mail</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo e(route('replymail')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <div class="mb-3">
                            <label for="disabledTextInput" class="form-label">To</label>
                            <input type="text" id="toemail" name="toemail" class="form-control" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                            <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>


                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
  <!-- Modal -->
  <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Replied Message</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" id="modal2-body">

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
    <script>
        function replymail(email) {
            document.getElementById("toemail").value = email;
        }
        function replymessage(message){
            document.getElementById("modal2-body").innerHTML = message;
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.adminDashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\curryleaf\resources\views/admindashboard/contactusdata.blade.php ENDPATH**/ ?>