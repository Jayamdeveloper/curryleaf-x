
<?php $__env->startSection('content'); ?>

<div class="container-fluid">
<div class="row">
    <div class="col-12">
        <div class="row">
            <div class="col-sm-12">
                

                <div class="card">
                    <div class="card-body">
                        <div class="card-header-2">
                            <h5>Contact Details</h5>
                        </div>

                        <form class="theme-form theme-form-2 mega-form">
                            
                            <div class="mb-4 row align-items-center">
                                <label class="form-label-title col-sm-2 mb-0">Email</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="email"
                                        placeholder="Email Address">
                                </div>
                            </div>

                            <div class="mb-4 row align-items-center">
                                <label class="form-label-title col-sm-2 mb-0">Phone No</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="number"
                                        placeholder="Phone Number">
                                </div>
                            </div>
                            <div class="mb-4 row align-items-center">
                                <label class="form-label-title col-sm-2 mb-0">Address</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text"
                                        placeholder="Enter Your Address">
                                </div>
                            </div>

                            <div class="mb-4 row align-items-center">
                                <label class="form-label-title col-sm-2 mb-0">Location Map</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text"
                                        placeholder="Enter Your Embeded Map Link">
                                </div>
                            </div>
                            <div class="mb-4 row align-items-center">
                                <label class="form-label-title col-sm-2 mb-0">Working Hours</label>
                                <div class="col-sm-4">
                                    <input class="form-control" type="time"
                                        placeholder="Open Time">
                                </div>
                                <div class="col-sm-4">
                                    <input class="form-control" type="time"
                                        placeholder="Close Time">
                                </div>
                            </div>

                            



                        </form>
                    </div>
                </div>

                <div class="mb-4 row align-items-center justify-content-center">
                    <div class="col-sm-2">
                        <a class="btn btn-solid " href="products.php">Save</a>
                    </div>
                    <div class="col-sm-2">
                        <a class="btn btn-solid2" href="products.php">Cancel</a>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminDashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\30Dec-curryleaf\resources\views/admindashboard/contactus.blade.php ENDPATH**/ ?>