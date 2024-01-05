<!DOCTYPE html>
<html lang="en" dir="ltr">


<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo e(asset('admin/img/logo/favicon.png')); ?>" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo e(asset('admin/img/logo/favicon.png')); ?>" type="image/x-icon">
    <title>The Curry Leaf</title>

    <!-- Google font -->
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">

    <!-- Linear Icon css -->
    <link rel="stylesheet" href="<?php echo e(asset('admin/css/linearicon.css')); ?>">

    <!-- remixicon css -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin/css/remixicon.css')); ?>">

    <!-- fontawesome css  -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin/css/vendors/font-awesome.css')); ?>">

    <!-- Themify icon css -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin/css/vendors/themify.css')); ?>">

    <!--Drop zon css -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin/css/vendors/dropzone.css')); ?>">

    <!-- Feather icon css -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin/css/vendors/feather-icon.css')); ?>">

    <!-- Select2 css -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin/css/select2.min.css')); ?>">

    <!-- Plugins css -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin/css/vendors/scrollbar.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin/css/vendors/animate.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin/css/vendors/chartist.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin/css/vendors/date-picker.css')); ?>">

    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin/css/vendors/bootstrap.css')); ?>">

    <!-- Bootstrap-tag input css -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin/css/vendors/bootstrap-tagsinput.css')); ?>">

    <!-- App css -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin/css/style.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('admin/css/custom.css')); ?>">

    <!-- Sweet alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <style>
        .title-header.option-title {
            justify-content: space-between;
        }

        .main-logo {
            width: 75%;
            display: block;
            object-fit: none;
        }

        .logo-icon-wrapper {
            display: flex;
            justify-content: center;
            padding: 15px 0;
        }
    </style>


</head>

<body>

 <!-- tap on top start -->
 <div class="tap-top">
        <span class="lnr lnr-chevron-up"></span>
    </div>
    <!-- tap on tap end -->

    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Page Header Start-->

        <div class="page-header">
            <div class="header-wrapper m-0">
                <div class="header-logo-wrapper p-0">
                    <div class="logo-wrapper">
                        <a href="index.php">
                            <img class="img-fluid main-logo" src="<?php echo e(asset('admin/img/logo/logo.png')); ?>" alt="logo">
                            <img class="img-fluid white-logo" src="<?php echo e(asset('admin/img/logo/logo.png')); ?>" alt="logo">
                        </a>
                    </div>
                    <div class="toggle-sidebar">
                        <i class="status_toggle middle sidebar-toggle" data-feather="align-center"></i>
                        <a href="index.php">
                            <img src="<?php echo e(asset('admin/img/logo/logo.png')); ?>" class="img-fluid" alt="">
                        </a>
                    </div>
                </div>

                <form class="form-inline search-full" action="javascript:void(0)" method="">
                    <div class="form-group w-100">
                        <div class="Typeahead Typeahead--twitterUsers">
                            <div class="u-posRelative">
                                <input class="demo-input form-control-plaintext w-100" type="text"
                                    placeholder="Search.." name="" title="" autofocus>
                                <i class="close-search" ></i>
                                <div class="spinner-border Typeahead-spinner" role="status">
                                    <span class="sr-only">Loading...</span>
                                </div>
                            </div>
                            <div class="Typeahead-menu"></div>
                        </div>
                    </div>
                </form>
                <div class="nav-right col-6 pull-right right-header p-0">
                    <ul class="nav-menus">
                        <li>
                            <span class="header-search">
                                <i class="ri-search-line"></i>
                            </span>
                        </li>
                        <li class="onhover-dropdown">
                            <div class="notification-box">
                                <i class="ri-notification-line"></i>
                                <span class="badge rounded-pill badge-theme">4</span>
                            </div>
                            <ul class="notification-dropdown onhover-show-div">
                                <li>
                                    <i class="ri-notification-line"></i>
                                    <h6 class="f-18 mb-0">Notitications</h6>
                                </li>
                                <li>
                                    <p>
                                        <i class="fa fa-circle me-2 font-primary"></i>Delivery processing <span
                                            class="pull-right">10 min.</span>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <i class="fa fa-circle me-2 font-success"></i>Order Complete<span
                                            class="pull-right">1 hr</span>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <i class="fa fa-circle me-2 font-info"></i>Tickets Generated<span
                                            class="pull-right">3 hr</span>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <i class="fa fa-circle me-2 font-danger"></i>Delivery Complete<span
                                            class="pull-right">6 hr</span>
                                    </p>
                                </li>
                                <li>
                                    <a class="btn btn-primary" href="javascript:void(0)">Check all notification</a>
                                </li>
                            </ul>
                        </li>

                        <!-- <li>
                            <div class="mode">
                                <i class="ri-moon-line"></i>
                            </div>
                        </li> -->
                        <li class="profile-nav onhover-dropdown pe-0 me-0">
                            <div class="media profile-media">
                                <img class="user-profile rounded-circle" src="<?php echo e(asset('admin/images/users/4.jp')); ?>g" alt="">
                                <div class="user-name-hide media-body">
                                    <span>Emay Walter</span>
                                    <p class="mb-0 font-roboto">Admin<i class="middle ri-arrow-down-s-line"></i></p>
                                </div>
                            </div>
                            <ul class="profile-dropdown onhover-show-div">
                                <li>
                                    <a href="<?php echo e(route('settings.index')); ?>">
                                        <i data-feather="users"></i>
                                        <span>Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo e(route('orders.index')); ?>">
                                        <i data-feather="archive"></i>
                                        <span>Orders</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo e(route('settings.changepassword')); ?>">
                                        <i data-feather="phone"></i>
                                        <span>Change Passowrd</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="login.php">
                                        <i data-feather="log-out"></i>
                                        <span>Log out</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Page Header Ends-->

  <!-- Page Body Start-->
  <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->


            <div class="sidebar-wrapper">
                <div id="sidebarEffect"></div>
                <div>
                    <div class="logo-wrapper logo-wrapper-center">
                        <a href="index.php" data-bs-original-title="" title="">
                            <img class="img-fluid for-white" src="<?php echo e(asset('admin/img/logo/logo.png')); ?>" alt="logo">
                        </a>
                        <div class="back-btn">
                            <i class="fa fa-angle-left"></i>
                        </div>

                    </div>
                    <div class="logo-icon-wrapper">
                        <a href="index.php">
                            <img class="img-fluid main-logo main-white" src="<?php echo e(asset('admin/img/logo/logo.png')); ?>" alt="logo">
                            <img class="img-fluid main-logo main-dark" src="<?php echo e(asset('admin/img/logo/logo.png')); ?>"
                                alt="logo">
                        </a>
                    </div>
                    <nav class="sidebar-main">
                        <div class="left-arrow" id="left-arrow">
                            <i data-feather="arrow-left"></i>
                        </div>

                        <div id="sidebar-menu">

                            <ul class="sidebar-links" id="simple-bar">
                                <li class="back-btn"></li>

                                <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title link-nav" href="<?php echo e(route('admin.dashboard')); ?>">
                                        <i class="ri-home-line"></i>
                                        <span>Dashboard</span>
                                    </a>
                                </li>
                                <li class="sidebar-list">
                                    <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                                        <i class="ri-list-check-2"></i>
                                        <span>Category</span>
                                    </a>
                                    <ul class="sidebar-submenu">
                                        <li>
                                            <a href="<?php echo e(route('admin.category')); ?>">Category List</a>
                                        </li>

                                        <li>
                                            <a href="<?php echo e(route('admin.addcategory')); ?>">Add New Category</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="sidebar-list">
                                    <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                                        <i class="ri-store-3-line"></i>
                                        <span>Product</span>
                                    </a>
                                    <ul class="sidebar-submenu">
                                        <li>
                                            <a href="<?php echo e(route('products.index')); ?>">Prodcts</a>
                                        </li><?php echo csrf_field(); ?>

                                        <li>
                                            <a href="<?php echo e(route('create.product')); ?>">Add New Products</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                                        <i class="ri-archive-line"></i>
                                        <span>Orders</span>
                                    </a>
                                    <ul class="sidebar-submenu">
                                        <li>
                                            <a href="<?php echo e(route('orders.index')); ?>">Order List</a>
                                        </li>

                                    </ul>
                                </li>
                                <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title" href="javascript:void(0)">

                                          <i class="ri-settings-line"></i>
                                        <span>Reservations</span>
                                    </a>
                                    <ul class="sidebar-submenu">
                                        <li>
                                            <a href="<?php echo e(route('reservation.index')); ?>">Reservations List</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo e(route('reservation.create')); ?>">For Reservation</a>
                                        </li>

                                    </ul>
                                </li>

                                <li class="sidebar-list">
                                    <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                                        <i class="ri-price-tag-3-line"></i>
                                        <span>Coupons</span>
                                    </a>
                                    <ul class="sidebar-submenu">
                                        <li>
                                            <a href="<?php echo e(route('coupon.index')); ?>">Coupon List</a>
                                        </li>

                                        <li>
                                            <a href="<?php echo e(route('coupon.create')); ?>">Create Coupon</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="sidebar-list">
                                    <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                                        <i class="ri-price-tag-3-line"></i>
                                        <span>Gift Card</span>
                                    </a>
                                    <ul class="sidebar-submenu">
                                        <li>
                                            <a href="<?php echo e(route('giftcards.index')); ?>">Gift Card List</a>
                                        </li>

                                        <li>
                                            <a href="<?php echo e(route('giftcards.create')); ?>">Create Gift Card</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo e(route('giftcards.redeem')); ?>">Redeemed Gift Card</a>
                                        </li>


                                    </ul>
                                </li>
                                <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                                        <i class="ri-user-3-line"></i>
                                        <span>Users</span>
                                    </a>
                                    <ul class="sidebar-submenu">
                                        <li>
                                            <a href="<?php echo e(route('users.index')); ?>">All users</a>
                                        </li>
                                        
                                    </ul>
                                </li>
                                <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                                         <i class="ri-file-chart-line"></i>
                                        <span>Reports</span>
                                    </a>
                                    <ul class="sidebar-submenu">
                                        <li>
                                            <a href="<?php echo e(route('reports.index')); ?>">Sales Report</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo e(route('reports.orders')); ?>">Orders Report</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo e(route('reports.customer')); ?>">Customers Report</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title link-nav" href="<?php echo e(route('admin.product-reviews')); ?>">
                                        <i class="ri-star-line"></i>
                                        <span>Product Reviews</span>
                                    </a>
                                </li>

                                  <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                                         <i class="ri-file-chart-line"></i>
                                        <span>Contact Us</span>
                                    </a>
                                    <ul class="sidebar-submenu">
                                        <li>
                                            <a href="<?php echo e(route('admin.contactusdata')); ?>">Contact us list</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo e(route('admin.contactus')); ?>">Contact us </a>
                                        </li>

                                    </ul>
                                </li>
                                <!-- slider -->
                                <li class="sidebar-list">
                                    <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                                        <i class="ri-list-check-2"></i>
                                        <span>Home</span>
                                    </a>
                                    <ul class="sidebar-submenu">
                                        <li>
                                            <a href="<?php echo e(route('slider.index')); ?>">Slider</a>
                                        </li>

                                        <li>
                                            <a href="<?php echo e(route('homebanner.index')); ?>">Testimonial</a>
                                        </li>

                                        <li>
                                            <a href="<?php echo e(route('admin.addcategory')); ?>"></a>
                                        </li>
                                    </ul>
                                </li>
                                <!-- /slider -->
                                <li class="sidebar-list">
                                    <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">

                                         <i class="ri-list-settings-line"></i>
                                        <span>Settings</span>
                                    </a>
                                    <ul class="sidebar-submenu">
                                        <li>
                                            <a href="<?php echo e(route('settings.index')); ?>">Profile</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo e(route('settings.changepassword')); ?>">Change Password</a>
                                        </li>
                                        <li>
                                            <a href="login.php">Log Out</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title link-nav" href="<?php echo e(route('admin.termsandCondition')); ?>">
                                    <i class="ri-list-check"></i>
                                        <span>Terms &amp; Conditions</span>
                                    </a>
                                </li>
                                <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title link-nav" href="<?php echo e(route('admin.privacyPolicy')); ?>">
                                    <i class="ri-shield-line"></i>
                                        <span>Privacy Policy</span>
                                    </a>
                                </li>
                                <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title link-nav" href="<?php echo e(route('admin.refundPolicy')); ?>">
                                    <i class="ri-exchange-dollar-line"></i>
                                        <span>Refund Policy</span>
                                    </a>
                                </li>

                            </ul>
                        </div>

                        <div class="right-arrow" id="right-arrow">
                            <i data-feather="arrow-right"></i>
                        </div>
                    </nav>
                </div>
            </div>

            <!-- Page Sidebar Ends-->

            <!-- Container-fluid starts-->
            <div class="page-body">

<?php echo $__env->yieldContent('content'); ?>



</div>

                <!-- Container-fluid Ends-->

                <!-- footer start-->
                <div class="container-fluid">
                    <footer class="footer">
                        <div class="row">
                            <div class="col-md-12 footer-copyright text-center">
                                <p class="mb-0">Copyright &copy; The Curry Leaf <?php echo e(date('Y')); ?>. All Rights Reserved.</p>
                            </div>
                        </div>
                    </footer>
                </div>
                <!-- footer End-->
            </div>
            <!-- index body end -->

        </div>
        <!-- Page Body End -->
    </div>
    <!-- page-wrapper End-->

 <!-- latest jquery-->
 <script src="<?php echo e(asset('admin/js/jquery-3.6.0.min.js')); ?>"></script>

<!-- Bootstrap js-->
<script src="<?php echo e(asset('admin/js/bootstrap/bootstrap.bundle.min.js')); ?>"></script>

<!-- feather icon js-->
<script src="<?php echo e(asset('admin/js/icons/feather-icon/feather.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin/js/icons/feather-icon/feather-icon.js')); ?>"></script>

<!-- scrollbar simplebar js-->
<script src="<?php echo e(asset('admin/js/scrollbar/simplebar.js')); ?>"></script>
<script src="<?php echo e(asset('admin/js/scrollbar/custom.js')); ?>"></script>

<!-- Sidebar jquery-->
<script src="<?php echo e(asset('admin/js/config.js')); ?>"></script>
<!-- Plugins JS start-->

 <!-- tooltip init js -->
 <script src="<?php echo e(asset('admin/js/tooltip-init.js')); ?>"></script>

<!-- Plugins JS -->
<script src="<?php echo e(asset('admin/js/sidebar-menu.js')); ?>"></script>
<!-- <script src="<?php echo e(asset('admin/js/notify/bootstrap-notify.min.js')); ?>"></script> -->
<!-- <script src="<?php echo e(asset('admin/js/notify/index.js')); ?>"></script> -->

<!-- bootstrap tag-input js -->
<script src="<?php echo e(asset('admin/js/bootstrap-tagsinput.min.js')); ?>"></script>


<!-- Apexchar js -->
<script src="<?php echo e(asset('admin/js/chart/apex-chart/apex-chart1.js')); ?>"></script>
<script src="<?php echo e(asset('admin/js/chart/apex-chart/moment.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin/js/chart/apex-chart/apex-chart.js')); ?>"></script>
<script src="<?php echo e(asset('admin/js/chart/apex-chart/stock-prices.js')); ?>"></script>
<script src="<?php echo e(asset('admin/js/chart/apex-chart/chart-custom.js')); ?>"></script>


<!-- slick slider js -->
<script src="<?php echo e(asset('admin/js/slick.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin/js/custom-slick.js')); ?>"></script>

<!-- customizer js -->
<!-- <script src="admin/js/customizer.js"></script> -->

<!-- ratio js -->
<script src="<?php echo e(asset('admin/js/ratio.js')); ?>"></script>

 <!-- select2 js -->
 <script src="<?php echo e(asset('admin/js/select2.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin/js/select2-custom.js')); ?>"></script>

<!-- sidebar effect -->
<script src="<?php echo e(asset('admin/js/sidebareffect.js')); ?>"></script>

<!-- Theme js -->
<script src="<?php echo e(asset('admin/js/script.js')); ?>"></script>

 <!-- Data table js -->
 <script src="<?php echo e(asset('admin/js/jquery.dataTables.js')); ?>"></script>
 <script src="<?php echo e(asset('admin/js/custom-data-table.js')); ?>"></script>

 <?php echo $__env->yieldPushContent('js'); ?>

</body>


</html>
<?php /**PATH C:\xampp\htdocs\30Dec-curryleaf\resources\views/layouts/adminDashboard.blade.php ENDPATH**/ ?>