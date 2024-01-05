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

        .btn {
            color: #282252;
            background: transparent;
            border-color: #282252;
        }

        .btn-submit {
            border: 1px solid #ff7c08 !important;
            background-color: #ff7c08;
            color: #fff;
            font-size: 17px !important;
            font-weight: 700;
            width: 100px !important;
        }

        .btn-submit:hover {
            background-color: transparent;
            color: #ff7c08;
        }

        .single-info {
            padding: 9px 18px;
        }
    </style>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
<script>
    <?php if(session('success')): ?>
        Swal.fire('Success', '<?php echo e(session('success')); ?>', 'success');
    <?php elseif(session('error')): ?>
        Swal.fire('Error', '<?php echo e(session('error')); ?>', 'error');
    <?php endif; ?>
</script>
    <!-- breadcrumb-area -->
    <div class="banner-area breadcrumb-area padding-top-30 padding-bottom-10">
        <div class="bread-shapes">
            <span class="b-shape-1 item-bounce"><img src="assets/images/img/5.png" alt=""></span>
            <span class="b-shape-2"><img src="assets/images/img/6.png" alt=""></span>
            <span class="b-shape-5"><img src="assets/images/shapes/18.png" alt=""></span>
            <span class="b-shape-6 item-animateOne"><img src="assets/images/img/7.png" alt=""></span>
        </div>
        <div class="container padding-top-120">
            <div class="row justify-content-center">
                <nav aria-label="breadcrumb">
                    <h2 class="page-title">Contact Us</h2>
                    <ol class="breadcrumb text-center">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- contact-form-area -->
    <section class="about-area about-area2 writeto-us padding-top-60 padding-bottom-60">

        <div class="form-shapes">
            <span class="fs1 item-animateOne"><img src="assets/images/shapes/1.png" alt=""></span>
            <span class="fs2 item-bounce"><img src="assets/images/shapes/12.png" alt=""></span>
            <span class="fs3"><img src="assets/images/shapes/13.png" alt=""></span>
            <span class="fs4 item-bounce"><img src="assets/images/shapes/26.png" alt=""></span>
        </div>

        <div class="container">

            <div class="row">

                <div class="col-lg-5 col-md-4 col-xs-12 col-sm-12 wow fadeInUp">
                    <div class="single-info d-flex flex-sm-row flex-md-column flex-lg-row align-items-center">
                        <div class="info-img">
                            <img src="assets/images/c2.png" alt="">
                        </div>
                        <div class="info-content text-center text-lg-left">
                            <h5 class="text-left h5">Address</h5>
                            <p class="text-left">570 8th Ave,cityname, statename, countryname</p>
                        </div>
                    </div>
                    <div class="single-info d-flex flex-sm-row flex-md-column flex-lg-row align-items-center">
                        <div class="info-img">
                            <img src="assets/images/c1.png" alt="">
                        </div>
                        <div class="info-content text-center text-lg-left">
                            <h5 class="text-left mb-10 h5">Phone</h5>
                            <a href="tel:+910123456789" class="text-gray">+91 01234 56789</a>

                        </div>
                    </div>

                    <div class="single-info d-flex flex-sm-row flex-md-column flex-lg-row align-items-center">
                        <div class="info-img">
                            <img src="assets/images/c3.png" alt="">
                        </div>
                        <div class="info-content text-center text-lg-left">
                            <h5 class="text-left mb-10 h5">Email Us</h5>
                            <a href="mailto:info@thecurryleaf.ca" class="text-gray">info@thecurryleaf.ca</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 wow fadeInUp">

                    <div class="contact-form-area py-4 px-4">
                        <h3>Write to us</h3>
                        <form action="<?php echo e(route('userMessage')); ?>" method="post" autocomplete="off">
<?php echo csrf_field(); ?>
                            <div class="row">

                                <div class="col-lg-6">
                                    <input type="text" name="name" placeholder="Your Name *" required>
                                </div>

                                <div class="col-lg-6">
                                    <input type="text" name="phone" placeholder="Phone Number *" required onkeypress="return onlyNumberKey(event)">
                                </div>
                                <div class="col-lg-12">
                                    <input type="email" name="email" placeholder="Email *" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                                </div>

                                <div class="col-lg-12 mb-2">
                                    <textarea name="message" placeholder="Your Message " required></textarea>
                                </div>

                                <div class="col-lg-12 d-flex align-items-center justify-content-center">
                                    <input type="submit" name="submit" class="btn-submit " value="Submit">
                                </div>
                            </div>

                        </form>
                    </div>

                </div>

            </div>

        </div>
    </section>



    <!-- map area -->
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d497511.23106089944!2d79.87933151977576!3d13.047985945577162!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5265ea4f7d3361%3A0x6e61a70b6863d433!2sChennai%2C%20Tamil%20Nadu!5e0!3m2!1sen!2sin!4v1700915117157!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

<?php $__env->stopSection(); ?>
<?php $__env->startPush('js'); ?>
    <!-- ToTop Button -->

    <script>
        function onlyNumberKey(evt) {

            // Only ASCII character in that range allowed
            var ASCIICode = (evt.which) ? evt.which : evt.keyCode
            if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
                return false;
            return true;
        }
    </script>
<?php $__env->stopPush(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\curryleaf\resources\views/view/contactus.blade.php ENDPATH**/ ?>