
<?php $__env->startPush('css'); ?>
<style>
        .breadcrumb-item+.breadcrumb-item::before {
            content: "/" !important;
        }

        .breadcrumb-item.active {
            color: #4d8750 !important;
        }
    </style>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>

    <!-- breadcrumb-area -->
    <div class="banner-area breadcrumb-area padding-top-30 padding-bottom-20">
        <div class="bread-shapes">
            <span class="b-shape-1 item-bounce"><img src="<?php echo e(asset('assets/images/img/5.png')); ?>" alt=""></span>
            <span class="b-shape-2"><img src="<?php echo e(asset('assets/images/img/6.png')); ?>" alt=""></span>
            <span class="b-shape-5"><img src="<?php echo e(asset('assets/images/shapes/18.png')); ?>" alt=""></span>
            <span class="b-shape-6 item-animateOne"><img src="<?php echo e(asset('assets/images/img/7.png')); ?>" alt=""></span>
        </div>
        <div class="container padding-top-120">
            <div class="row justify-content-center">
                <nav aria-label="breadcrumb">
                    <h2 class="page-title">About Us</h2>
                    <ol class="breadcrumb text-center">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">About Us</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- about us -->
    <section class="about-area about-area2 padding-top-60 padding-bottom-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12  wow fadeInLeft">
                    <div class="about-left">
                        <div class="about-l-shapes">
                            <span class="als-1"><img src="<?php echo e(asset('assets/images/shapes/2.png')); ?>" alt=""></span>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-4 d-flex align-items-end justify-content-end margin-bottom-20">
                                <div class="about-gallery-1">
                                    <img src="<?php echo e(asset('assets/images/aboutus3.jpg')); ?>" alt="aboutus3" loading="lazy">
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-8 margin-bottom-20">
                                <div class="about-gallery-2">
                                    <img src="<?php echo e(asset('assets/images/aboutus4.jpg')); ?>" alt="aboutus4" loading="lazy">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                <div class="about-gallery-3">
                                    <img src="<?php echo e(asset('assets/images/aboutus2.jpg')); ?>" alt="aboutus2" loading="lazy">
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-5 col-5 d-flex align-items-stretch ">
                                <div class="about-gallery-5 text-center">
                                    <img src="<?php echo e(asset('assets/images/aboutus1.jpg')); ?>" alt="aboutus1" loading="lazy">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12  wow fadeInRight">
                    <div class="about-right">
                        <div class="about-r-shapes">
                            <span class="as-1"><img src="<?php echo e(asset('assets/images/shapes/1.png')); ?>" alt=""></span>
                        </div>
                        <h2>Fresh Taste At A Great Price, Only For
                            <span>Hungry People.</span>
                        </h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, sequi quis, accusantium saepe ullam accusantium saepe ullam corrupti ab voluptatem sunt explicabo fuga rem voluptatibus reiciendis hic et aut voluptates voluptatem sunt explicabo fuga rem voluptatibus reiciendis hic et aut voluptates necessitatibus?</p>

                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, sequi quis, accusantium saepe ullam accusantium saepe ullam corrupti ab voluptatem sunt explicabo fuga rem voluptatibus reiciendis hic et aut voluptates voluptatem sunt explicabo fuga rem voluptatibus reiciendis hic et aut voluptates necessitatibus?</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, sequi quis, accusantium saepe ullam accusantium saepe ullam corrupti ab voluptatem sunt explicabo fuga rem voluptatibus reiciendis hic et aut voluptates voluptatem sunt explicabo fuga rem voluptatibus reiciendis hic et aut voluptates necessitatibus?</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, sequi quis, accusantium saepe ullam accusantium saepe ullam corrupti ab voluptatem sunt explicabo fuga rem voluptatibus reiciendis hic et aut voluptates necessitatibus?</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\curryleaf\resources\views/view/aboutus.blade.php ENDPATH**/ ?>