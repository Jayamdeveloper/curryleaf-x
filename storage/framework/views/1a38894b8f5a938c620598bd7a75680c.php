
<?php $__env->startSection('content'); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="title-header option-title">
                                <h5>Create Gift Card</h5>
                            </div>
                            <div>
                            <form class="theme-form theme-form-2 mega-form">
                                        

                                        <div class="row">
                                        <div class="mb-4 row align-items-center">
                                                <label
                                                    class="col-lg-2 col-md-3 col-form-label form-label-title">Gift
                                                    Card Code</label>
                                                <div class="col-md-9 col-lg-10">
                                                    <input class="form-control" type="number" value="987665446589" readonly> 
                                                </div>
                                            </div>
                                            <div class="mb-4 row align-items-center">
                                                <label
                                                    class="form-label-title col-lg-2 col-md-3 mb-0">Full
                                                    Name</label>
                                                <div class="col-md-9 col-lg-10">
                                                    <input class="form-control" type="text">
                                                </div>
                                            </div>

                                            <div class="mb-4 row align-items-center">
                                                <label
                                                    class="form-label-title col-lg-2 col-md-3 mb-0">Phone
                                                    Number</label>
                                                <div class="col-md-9 col-lg-10">
                                                    <input class="form-control" type="text">
                                                </div>
                                            </div>
                                            <div class="mb-4 row align-items-center">
                                        <label
                                            class="form-label-title col-lg-2 col-md-3 mb-0">Email
                                            Address</label>
                                        <div class="col-md-9 col-lg-10">
                                            <input class="form-control" type="email">
                                        </div>
                                    </div>

                                            <div class="mb-4 row align-items-center">
                                                <label
                                                    class="col-lg-2 col-md-3 col-form-label form-label-title">Quantity</label>
                                                <div class="col-md-9 col-lg-10">
                                                    <input class="form-control" type="number">
                                                </div>
                                            </div>

                                            <div class="mb-4 row align-items-center">
                                                <label
                                                    class="col-sm-2 col-form-label form-label-title">Discount
                                                    Type</label>
                                                <div class="col-sm-10">
                                                    <select class="js-example-basic-single"
                                                        name="state">
                                                        <option disabled>--Select--</option>
                                                        <option>Percent (%)</option>
                                                        <option>Dollar ($)</option>
                                                    </select>
                                                </div>
                                            </div>

                                        

                                            <div class="mb-4 row align-items-center">
                                                <label
                                                    class="col-lg-2 col-md-3 col-form-label form-label-title">Expire
                                                    Date</label>
                                                <div class="col-md-9 col-lg-10">
                                                    <input class="form-control" type="date">
                                                </div>
                                            </div>
                                            


                                        </div>
                                    </form>
                                    <div class="row align-items-center justify-content-center">

                                        <div class="col-sm-2">
                                            <a href="giftcard-list.php" class="btn btn-solid2">Submit </a>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminDashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\curryleaf\resources\views/giftcards/createcards.blade.php ENDPATH**/ ?>