
<?php $__env->startSection('content'); ?>

<?php $__env->startPush('css'); ?>
<style>
        .breadcrumb-item+.breadcrumb-item::before {
            content: "/" !important;
        }

        .breadcrumb-item.active {
            color: #4d8750 !important;
        }

        .writeto-us .contact-form-area h3 {
            font-size: 26px;
        }

        .writeto-us .contact-form-area form input {
            color: #857676;
        }

        .ui-state-highlight,
        .ui-widget-content .ui-state-highlight,
        .ui-widget-header .ui-state-highlight {
            text-align: center !important;
            border: 1px solid #291e1e !important;
            background: #de1616 !important;
            color: #ffffff !important;
        }

        input[type="radio"] {
            background: red;
        }

        .writeto-us .contact-form-area {
            background: transparent;
            box-shadow: none;
            padding: 10px;
        }
    </style>
<?php $__env->stopPush(); ?>
<!--=============================
        RESERVATION START
    ==============================-->
    <section class="tf__reservation about-area about-area2 writeto-us login-area padding-top-0 signup-area padding-bottom-40">
        <div class="form-shapes bread-shapes">

            <span class="b-shape-1 item-bounce"><img src="assets/images/img/5.png" alt=""></span>
            <span class="fs1 item-animateOne"><img src="assets/images/shapes/1.png" alt=""></span>
            <span class="fs2 item-bounce"><img src="assets/images/shapes/12.png" alt=""></span>
            <span class="fs3"><img src="assets/images/shapes/13.png" alt=""></span>
            <span class="fs4 item-bounce"><img src="assets/images/shapes/26.png" alt=""></span>
        </div>
        <div class="container">
            <div class="col-lg-10 offset-lg-1 col-md-12 wow fadeInUp">
                <div class="tf__reservation_bg" style="background: url(assets/images/reservation_bg.jpg);">
                    <div class="row">
                        <div class="col-xl-7 ms-auto">
                            <div class="tf__reservation_form wow fadeInRight" data-wow-duration="1s">
                                <h2 class="text-white">book a table</h2>
                                <div class="contact-form-area login-form-area signup-form-area">
                                    <form action="" method="post" name="form" autocomplete="off">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                <div class="tf__reservation_input_single">
                                                    <label for="date">Select Date&nbsp; *</label>
                                                    <input type="text" id="datepicker" placeholder="Select Date" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                <div class="tf__reservation_input_single">
                                                    <label>Select Time&nbsp; *</label>
                                                    <select required style="padding:12px 20px;border-radius: 10px;">
                                                        <option value="">Select Time</option>
                                                        <option value="">08.00 am to 09.00 am</option>
                                                        <option value="">10.00 am to 11.00 am</option>
                                                        <option value="">12.00 pm to 01.00 pm</option>
                                                        <option value="">02.00 pm to 03.00 pm</option>
                                                        <option value="">04.00 pm to 05.00 pm</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="tf__reservation_input_single">
                                                    <label>Number of Person&nbsp; *</label>
                                                    <input type="text" name="person" required placeholder="No.of.person" onkeypress="return onlyNumberKey(event)">
                                                </div>
                                            </div>
                                            <h5 class="text-white padding-bottom-20"><b>Enter Guest Details</b></h5>
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                <div class="tf__reservation_input_single">
                                                    <label>&nbsp;Guest Name *</label>
                                                    <input type="text" name="person" required placeholder="Guest Name">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                <div class="tf__reservation_input_single">
                                                    <label>&nbsp;Phone Number *</label>
                                                    <input type="text" name="person" required placeholder="Phone Number" onkeypress="return onlyNumberKey1(event)">
                                                </div>
                                            </div>
                                            <div class="col-xl-12 padding-top-10">
                                                <button type="submit" class="common_btn">confirm</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
        RESERVATION END
    ==============================-->

<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
<script>
        function onlyNumberKey(evt) {

            // Only ASCII character in that range allowed
            var ASCIICode = (evt.which) ? evt.which : evt.keyCode
            if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
                return false;
            return true;
        }

        function onlyNumberKey1(evt) {

            // Only ASCII character in that range allowed
            var ASCIICode = (evt.which) ? evt.which : evt.keyCode
            if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
                return false;
            return true;
        }
    </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\curryleaf\resources\views/view/reservations.blade.php ENDPATH**/ ?>