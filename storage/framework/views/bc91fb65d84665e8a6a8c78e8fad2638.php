
<?php $__env->startPush('css'); ?>
<style>
       .breadcrumb-item+.breadcrumb-item::before {
            content: "/" !important;
        }

        .breadcrumb-item.active {
            color: #4d8750 !important;
        }

        header {
            border-bottom: 1px solid #ebebebb0;
        }

        .checkout-area .cshapes .cs-2 {
            left: 30%;
        }

        .shopping-cart .shopping-shapes span.pss5 {
            left: 0;
        }

        .shopping-cart .shopping-shapes span.pss2 {
            left: 10%;
        }

        .btn {
            padding: 5px 14px;
            font-size: 15.2px;
            color: #4d8750;
            border-color: #4d8750;
            background: transparent;
            font-family: 'Barlow', sans-serif !important;
        }

        .btn1 {
            color: White !important;
        }

        .btn:focus,
        .btn:hover {
            background: #4d8750;
            color: #fff;
            border-color: #4d8750;
        }

        th.table-one-th {
            background-color: #3f3c3c;
            color: #fff;
            font-size: 16px;
            font-weight: 400;
            text-align: center;
            padding: 10px 29px 10px 10px;
        }

        .item-count {
            right: 0px;
            top: 10px;
            font-size: 14px;
            border-radius: 100px;
            background: #fff;
            width: 20px;
            height: 21px;
            text-align: center;
            color: #ff7c08;
            position: absolute;
            padding: 18px 0px 15px 0px;
        }

        .remove {
            background: #ff7c08;
            width: 25px;
            height: 25px;
            display: block;
            line-height: 25px;
            text-align: center;
            border-radius: 50%;
            opacity: .5;
            transition: .3s;
            transform: rotate(44deg);
        }

        td.pro-img {
            padding: 16px !important;
            width: 12%;
        }

        td.nopad-td {
            border: 1px solid #e6e6e6 !important;
        }

        button.delete-item.btn.btn-danger {
            border: 1px solid red;
            color: red;
        }

        button.delete-item.btn.btn-danger:hover {
            background-color: red;
            color: #fff;
        }

        @media only screen and (max-width: 600px) {
            td.nopad-td {
                padding: 0px !important;
            }

            .input-group {
                margin-top: 11px;
                width: 100% !important;
            }

            .shopping-cart table tbody tr td {
                padding: 21px 16px;

            }

            button.delete-item.btn.btn-danger {
                margin-top: 0px;
            }
        }

        @media only screen and (max-width: 992px) {
            td.nopad-td {
                padding: 0px 13px !important;
            }

            .input-group {
                margin-top: 11px;
                width: 100% !important;
            }

            .shopping-cart table tbody tr td {
                padding: 21px 16px;

            }

            button.delete-item.btn.btn-danger {
                margin-top: 0px;
            }

            .input-group>.form-control,
            .input-group>.form-floating,
            .input-group>.form-select {

                width: 0px;
            }
        }
    </style>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>

        <!-- checkout-area -->
    <!-- breadcrumb-area -->
    <div class="banner-area breadcrumb-area padding-top-10 padding-bottom-0">
        <div class="container padding-top-120">
            <div class="row justify-content-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-left margin-bottom-5">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Cart</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- shopping-cart -->
    <div class="portfolio-info shopping-cart padding-top-40 padding-bottom-30">
        <div class="shopping-shapes">
            <span class="ps1"><img src="assets/images/shapes/12.png" alt=""></span>
            <span class="pss2 item-bounce"><img src="assets/images/shapes/26.png" alt=""></span>
            <span class="ps3 item-bounce"><img src="assets/images/shapes/7.png" alt=""></span>
            <span class="ps4"><img src="assets/images/img/32.png" alt=""></span>
        </div>
        <div class="container">
            <form action="#">
                <div style="overflow-x:auto;">

                    <table class="show-cart table">

                    </table>

                </div>
                <button href="#" class="btn float-right">Update Cart</button>
                <button class="clear-cart btn btn-danger">Clear Cart</button>
                <!-- lower table -->

                <div class="row margin-top-60">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12"></div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="lower-table">
                            <h6>Proceed to Checkout</h6>
                            <div class="lower-table-info">
                                <!-- <ul class="d-flex justify-content-between">
                                    <li class="sub">Subtotal</li>
                                    <li>$40</li>
                                </ul>
                                <hr> -->
                                <ul class="d-flex justify-content-between">
                                    <li>Total price</li>
                                    <li>₹ <span class="total-cart"></span></li>
                                </ul>
                                <a href="checkout.php" class="btn">Proceed to checkout</a>
                            </div>
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\curryleaf\resources\views/view/cart.blade.php ENDPATH**/ ?>