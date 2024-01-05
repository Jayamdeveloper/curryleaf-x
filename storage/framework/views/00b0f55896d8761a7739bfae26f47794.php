
<?php $__env->startSection('content'); ?>

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="row">
                                <!-- chart caard section start -->
                        <div class="col-sm-6 col-lg-12">
                            <div class="main-tiles border-5 border-0  card-hover card o-hidden">
                                <div class="custome-1-bg b-r-4 card-body">
                                    <div class="media align-items-center static-top-widget">
                                        <div class="media-body p-0">
                                            <span class="m-0">Total Revenue</span>
                                            <h4 class="mb-0 counter">$6659
                                                <span class="badge badge-light-primary grow">
                                                    <i data-feather="trending-up"></i>8.5%</span>
                                            </h4>
                                        </div>
                                        <div class="align-self-center text-center">
                                            <i class="ri-database-2-line"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-12">
                            <div class="main-tiles border-5 card-hover border-0 card o-hidden">
                                <div class="custome-2-bg b-r-4 card-body">
                                    <div class="media static-top-widget">
                                        <div class="media-body p-0">
                                            <span class="m-0">Total Orders</span>
                                            <h4 class="mb-0 counter">9856
                                                <span class="badge badge-light-danger grow">
                                                    <i data-feather="trending-down"></i>8.5%</span>
                                            </h4>
                                        </div>
                                        <div class="align-self-center text-center">
                                            <i class="ri-shopping-bag-3-line"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    
                        <!-- chart card section End -->
                            </div>
                        </div>

                        <!-- Transactions start-->
                        <div class=" col-xl-6">
                            <div class="card o-hidden card-hover card_minheight">
                                <div class="card-header border-0">
                                    <div class="card-header-title">
                                        <h4>Transactions</h4>
                                    </div>
                                </div>

                                <div class="card-body pt-0">
                                    <div>
                                        <div class="table-responsive">
                                            <table class="user-table transactions-table table border-0">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="transactions-icon">
                                                                <i class="ri-shield-line"></i>
                                                            </div>
                                                            <div class="transactions-name">
                                                                <h6>Wallets</h6>
                                                                <p>Total Amount Recieved</p>
                                                            </div>
                                                        </td>

                                                        <td class="success">$74</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td-color-1">
                                                            <div class="transactions-icon">
                                                                <i class="ri-check-line"></i>
                                                            </div>
                                                            <div class="transactions-name">
                                                                <h6>Bank Transfer</h6>
                                                                <p>Total Amount Recieved</p>
                                                            </div>
                                                        </td>

                                                        <td class="success">$125</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td-color-2">
                                                            <div class="transactions-icon">
                                                                <i class="ri-exchange-dollar-line"></i>
                                                            </div>
                                                            <div class="transactions-name">
                                                                <h6>Paypal</h6>
                                                                <p>Total Amount Recieved</p>
                                                            </div>
                                                        </td>

                                                        <td class="success">$50</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td-color-3">
                                                            <div class="transactions-icon">
                                                                <i class="ri-bank-card-line"></i>
                                                            </div>
                                                            <div class="transactions-name">
                                                                <h6>Mastercard</h6>
                                                                <p>Total Amount Recieved</p>
                                                            </div>
                                                        </td>

                                                        <td class="success">$40</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td-color-4 pb-0">
                                                            <div class="transactions-icon">
                                                                <i class="ri-bar-chart-grouped-line"></i>
                                                            </div>
                                                            <div class="transactions-name">
                                                                <h6>Refund</h6>
                                                                <p>Total Amount Refunded</p>
                                                            </div>
                                                        </td>

                                                        <td class="lost pb-0">-$90</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Transactions end-->
                       
                        <!-- Earning chart star-->
                        <div class="col-xl-12">
                            <div class="card o-hidden card-hover card_minheight">
                                <div class="card-header border-0 pb-1">
                                    <div class="card-header-title">
                                        <h4>Revenue Report</h4>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                <div id="sales-summary-monthly"></div>
                                </div>
                            </div>
                        </div>
                        <!-- Earning chart  end-->

                        <!-- Recent orders start-->
                        <div class="col-xl-12">
                            <div class="card o-hidden card-hover card_minheight">
                                <div class="card-header card-header-top card-header--2 px-0 pt-0 ">
                                    <div class="card-header-title">
                                        <h4>Recent Orders</h4>
                                    </div>

                                    <!-- <div class="best-selling-box d-sm-flex d-none">
                                        <span>Short By:</span>
                                        <div class="dropdown">
                                            <button class="btn p-0 dropdown-toggle" type="button"
                                                id="dropdownMenuButton2" data-bs-toggle="dropdown"
                                                data-bs-auto-close="true">Today</button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                            </ul>
                                        </div>
                                    </div> -->
                                </div>

                                <div class="card-body p-0">
                                    <div>
                                    <div class="table-responsive">
                                            <table class="table all-package order-table theme-table" id="table_id">
                                                <thead>
                                                    <tr>
                                                        <th>S.No</th>
                                                        <th>Date</th>
                                                        <th>Order Id</th>
                                                        <th>Amount</th>
                                                        <th>Order Status</th>
                                                        <th>Payment Method</th>
                                                        <th>Payment Status</th>
                                                        <th>Transaction Id</th>
                                                        <th>Delivery Status</th>
                                                        <th>Action</th>
                                                        

                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <tr>
                                                        <td>1 </td>

                                                        <td>Jul 20, 2022</td>

                                                        <td> <a href="order-detail.php">406-4883635</a></td>

                                                        <td>$15</td>

                                                        <td>
                                                            <select class="js-example-basic-single w-100" name="state">
                                                                <option >pending</option>
                                                                <option selected>Confirmed</option>
                                                                <option>Rejected</option>
                                                            </select>
                                                        </td>
                                                        <td>Paypal</td>
                                                         <td class="status-close">
                                                                        <span>Success</span>
                                                                    </td>
                                                         <td>9876543210123</td>
                                                        <td>
                                                            <ul>
                                                                <li>
                                                                <a class="btn btn-sm btn-solid text-white"
                                                                        href="order-tracking.php">
                                                                        Tracking
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </td>

                                    
                                                        <td>
                                                            <ul>
                                                                <li>
                                                                    <a href="order-detail.php">
                                                                        <i class="ri-eye-line"></i>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="javascript:void(0)">
                                                                        <i class="ri-pencil-line"></i>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                        data-bs-target="#exampleModalToggle">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </li>

                                                            </ul>
                                                        </td>
                                                        
                                                    </tr>
                                                    <tr>
                                                        <td>2 </td>

                                                        <td>Jul 20, 2022</td>

                                                        <td> <a href="order-detail.php">406-4883635</a></td>

                                                        <td>$15</td>

                                                        <td>
                                                            <select class="js-example-basic-single w-100" name="state">
                                                                <option >pending</option>
                                                                <option selected>Confirmed</option>
                                                                <option>Rejected</option>
                                                            </select>
                                                        </td>
                                                        <td>Paypal</td>
                                                         <td class="status-close">
                                                                        <span>Success</span>
                                                                    </td>
                                                         <td>9876543210123</td>
                                                        <td>
                                                            <ul>
                                                                <li>
                                                                <a class="btn btn-sm btn-solid text-white"
                                                                        href="order-tracking.php">
                                                                        Tracking
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </td>

                                    
                                                        <td>
                                                            <ul>
                                                                <li>
                                                                    <a href="order-detail.php">
                                                                        <i class="ri-eye-line"></i>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="javascript:void(0)">
                                                                        <i class="ri-pencil-line"></i>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                        data-bs-target="#exampleModalToggle">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </li>

                                                            </ul>
                                                        </td>
                                                        
                                                    </tr>
                                                    <tr>
                                                        <td>3 </td>

                                                        <td>Jul 20, 2022</td>

                                                        <td> <a href="order-detail.php">406-4883635</a></td>

                                                        <td>$15</td>

                                                        <td>
                                                            <select class="js-example-basic-single w-100" name="state">
                                                                <option selected>pending</option>
                                                                <option>Confirmed</option>
                                                                <option >Rejected</option>
                                                            </select>
                                                        </td>
                                                        <td>Paypal</td>
                                                         <td class="status-danger">
                                                                        <span>Failed</span>
                                                                    </td>
                                                         <td>9876543210123</td>
                                                        <td>
                                                            <ul>
                                                                <li>
                                                                <a class="btn btn-sm btn-solid text-white"
                                                                        href="order-tracking.php">
                                                                        Tracking
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </td>

                                    
                                                        <td>
                                                            <ul>
                                                                <li>
                                                                    <a href="order-detail.php">
                                                                        <i class="ri-eye-line"></i>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="javascript:void(0)">
                                                                        <i class="ri-pencil-line"></i>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                        data-bs-target="#exampleModalToggle">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </li>

                                                            </ul>
                                                        </td>
                                                        
                                                    </tr>

                                                    <tr>
                                                        <td>4 </td>

                                                        <td>Jul 20, 2022</td>

                                                        <td> <a href="order-detail.php">406-4883635</a></td>

                                                        <td>$15</td>

                                                        <td>
                                                            <select class="js-example-basic-single w-100" name="state">
                                                                <option selected>pending</option>
                                                                <option>Confirmed</option>
                                                                <option>Rejected</option>
                                                            </select>
                                                        </td>
                                                        <td>Paypal</td>
                                                         <td class="status-close">
                                                                        <span>Success</span>
                                                                    </td>
                                                         <td>9876543210123</td>
                                                        <td>
                                                            <ul>
                                                                <li>
                                                                <a class="btn btn-sm btn-solid text-white"
                                                                        href="order-tracking.php">
                                                                        Tracking
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </td>

                                    
                                                        <td>
                                                            <ul>
                                                                <li>
                                                                    <a href="order-detail.php">
                                                                        <i class="ri-eye-line"></i>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="javascript:void(0)">
                                                                        <i class="ri-pencil-line"></i>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                        data-bs-target="#exampleModalToggle">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </li>

                                                            </ul>
                                                        </td>
                                                        
                                                    </tr>

                                                    <tr>
                                                        <td>5 </td>

                                                        <td>Jul 20, 2022</td>

                                                        <td> <a href="order-detail.php">406-4883635</a></td>

                                                        <td>$15</td>

                                                        <td>
                                                            <select class="js-example-basic-single w-100" name="state">
                                                                <option selected>pending</option>
                                                                <option>Confirmed</option>
                                                                <option>Rejected</option>
                                                            </select>
                                                        </td>
                                                        <td>Paypal</td>
                                                         <td class="status-close">
                                                                        <span>Success</span>
                                                                    </td>
                                                         <td>9876543210123</td>
                                                        <td>
                                                            <ul>
                                                                <li>
                                                                <a class="btn btn-sm btn-solid text-white"
                                                                        href="order-tracking.php">
                                                                        Tracking
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </td>

                                    
                                                        <td>
                                                            <ul>
                                                                <li>
                                                                    <a href="order-detail.php">
                                                                        <i class="ri-eye-line"></i>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="javascript:void(0)">
                                                                        <i class="ri-pencil-line"></i>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                        data-bs-target="#exampleModalToggle">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </li>

                                                            </ul>
                                                        </td>
                                                        
                                                    </tr>




                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Recent orders end-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminDashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\30Dec-curryleaf\resources\views/admindashboard/dashboard.blade.php ENDPATH**/ ?>