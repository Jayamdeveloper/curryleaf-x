<?php $__env->startPush('css'); ?>
<style>
.custom-scrol {
    overflow-y: auto;
    height: 142px;
    padding: 20px;
    text-align: justify;
}
.testimonial-height {
    height: 220px;
    padding-block-end: 21px !important;
}

.custom-scrol::-webkit-scrollbar {
    width: 5px; /* Width of the scrollbar */
}

.custom-scrol::-webkit-scrollbar-thumb {
    background-color: #ff7c08; /* Color of the scrollbar handle */
    border-radius: 6px; /* Rounded corners of the handle */
}

.custom-scrol::-webkit-scrollbar-track {
    background-color: #f1f1f1; /* Color of the scrollbar track */
}

.custom-scrol::-webkit-scrollbar-thumb:hover {
    background-color: #555; /* Color of the handle on hover */
}

</style>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>

     <!-- Carousel -->
     <div id="demo" class="carousel slide" data-bs-ride="carousel">
        <!-- The slideshow/carousel -->
        <div class="carousel-inner">
            <?php $__currentLoopData = $slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="carousel-item active">
                <img src="<?php echo e(asset('assets/upload/home/'.$val->image)); ?>" alt="slider" class="d-block banner-img">
                <div class="carousel-caption">
                    <h5><?php echo e($val->title_1); ?></h5>
                    <h3 class="text-white"><?php echo e($val->title_2); ?></h3>
                    <p class="text-white"><?php echo e($val->content); ?></p>
                    <a href="menu-list.php" class="carouselknowmore">Know More&nbsp;<i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
    <!-- banner-area -->
    <!-- popular-dishes -->
    <section class="popular-dishes-area padding-top-40 padding-bottom-30">
        <div class="pshapes">
            <span class="ps-1 item-animateTwo"><img src="<?php echo e(asset('assets/images/shapes/11.png')); ?>" alt="" /></span>
            <span class="ps-2 item-animateTwo"><img src="<?php echo e(asset('assets/images/shapes/12.png')); ?>" alt="" /></span>
            <span class="ps-3 item-bounce"><img src="<?php echo e(asset('assets/images/shapes/13.png')); ?>" alt="" /></span>
            <span class="ps-4 item-bounce"><img src="<?php echo e(asset('assets/images/shapes/14.png')); ?>" alt="" /></span>
            <!-- <span class="ps-5"><img src="assets/images/shapes/15.png" alt="" /></span>
            <span class="ps-6"><img src="assets/images/shapes/16.png" alt="" /></span> -->
        </div>
        <div class="container">
            <nav class="
            popular-tab-nav
            d-flex
            flex-wrap
            justify-content-between
            align-items-center">
                <div class="common-title-area padding-bottom-30 wow fadeInLeft">
                    <h3>Food Items</h3>
                    <h2>Popular Dishes</h2>
                </div>

            </nav>

        </div>
        <div class="container">
            <div class="row">
                <div class="col-xxl-3 col-sm-6 col-lg-4 more-box wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__menu_item">
                        <div class="tf__menu_item_img">
                            <img src="<?php echo e(asset('assets/images/menu2_img_1.jpg')); ?>" alt="menu" class="img-fluid w-100" loading="lazy">
                        </div>
                        <div class="tf__menu_item_text">
                            <a class="category" href="menu.php">Biryani</a>
                            <a class="title" href="menu-list.php">Hyderabadi Biryani</a>
                            <p class="text-left">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque illo dolor sit amet
                            </p>

                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="price ">$165.00 <del>$90.00</del></h5>
                                <a class="tf__add_to_cart margin-bottom-10" href="menu-list.php">
                                    add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-sm-6 col-lg-4 more-box wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__menu_item">
                        <div class="tf__menu_item_img">
                            <img src="<?php echo e(asset('assets/images/menu2_img_2.jpg')); ?>" alt="menu" class="img-fluid w-100" loading="lazy">
                        </div>
                        <div class="tf__menu_item_text">
                            <a class="category" href="menu.php">Biryani</a>
                            <a class="title" href="menu-list.php">Chicken Curry</a>
                            <p class="text-left">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque illo dolor sit amet
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="price ">$105.00 <del>$100.00</del></h5>
                                <a class="tf__add_to_cart margin-bottom-10" href="menu-list.php">
                                    add to cart</a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-sm-6 col-lg-4 more-box wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__menu_item">
                        <div class="tf__menu_item_img">
                            <img src="<?php echo e(asset('assets/images/menu2_img_3.jpg')); ?>" alt="menu" class="img-fluid w-100" loading="lazy">
                        </div>
                        <div class="tf__menu_item_text">
                            <a class="category" href="menu.php">Burger</a>
                            <a class="title" href="menu-list.php">Spicy Burger</a>
                            <p class="text-left">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque illo dolor sit amet
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="price ">$125.00 <del>$90.00</del></h5>
                                <a class="tf__add_to_cart margin-bottom-10" href="menu-list.php">
                                    add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-3 col-sm-6 col-lg-4 more-box wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__menu_item">
                        <div class="tf__menu_item_img">
                            <img src="<?php echo e(asset('assets/images/menu2_img_4.jpg')); ?>" alt="menu" class="img-fluid w-100" loading="lazy">
                        </div>
                        <div class="tf__menu_item_text">
                            <a class="category" href="menu.php">Tiffin</a>
                            <a class="title" href="menu-list.php">Mini Tiffin</a>
                            <p class="text-left">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque illo dolor sit amet
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="price ">$65.00 <del>$50.00</del></h5>
                                <a class="tf__add_to_cart margin-bottom-10" href="menu-list.php">
                                    add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-sm-6 col-lg-4 more-box wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__menu_item">
                        <div class="tf__menu_item_img">
                            <img src="<?php echo e(asset('assets/images/menu2_img_5.jpg')); ?>" alt="menu" class="img-fluid w-100" loading="lazy">
                        </div>
                        <div class="tf__menu_item_text">
                            <a class="category" href="menu.php">Dessert</a>
                            <a class="title" href="menu-list.php">Browine with Icecream</a>
                            <p class="text-left">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque illo dolor sit amet
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="price ">$115.00 <del>$90.00</del></h5>
                                <a class="tf__add_to_cart margin-bottom-10" href="menu-list.php">
                                    add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-xxl-3 col-sm-6 col-lg-4 more-box wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__menu_item">
                        <div class="tf__menu_item_img">
                            <img src="images/menu2_img_6.jpg" alt="menu" class="img-fluid w-100" loading="lazy">
                        </div>
                        <div class="tf__menu_item_text">
                            <a class="category" href="menu.php">Kabab</a>
                            <a class="title" href="menu-list.php">Chicken Kabab</a>
                            <p class="text-left">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque illo dolor sit amet
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="price ">$125.00 <del>$90.00</del></h5>
                                <a class="tf__add_to_cart margin-bottom-10" href="menu-list.php">
                                    add to cart</a>
                            </div>

                        </div>
                    </div>
                </div> -->
                <!-- <div class="col-xxl-3 col-sm-6 col-lg-4 more-box">
                    <div class="tf__menu_item">
                        <div class="tf__menu_item_img">
                            <img src="images/menu2_img_7.jpg" alt="menu" class="img-fluid w-100" loading="lazy">
                        </div>
                        <div class="tf__menu_item_text">
                            <a class="category" href="menu.php">Biryani</a>
                            <a class="title" href="menu-list.php">Mutton Biryani</a>
                            <p class="text-left">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque illo dolor sit amet
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="price ">$135.00 <del>$90.00</del></h5>
                                <a class="tf__add_to_cart margin-bottom-10" href="menu-list.php">
                                    add to cart</a>
                            </div>

                        </div>
                    </div>
                </div> -->

                <!-- <div class="col-xxl-3 col-sm-6 col-lg-4 more-box">
                    <div class="tf__menu_item">
                        <div class="tf__menu_item_img">
                            <img src="images/menu2_img_8.jpg" alt="menu" class="img-fluid w-100" loading="lazy">
                        </div>
                        <div class="tf__menu_item_text">
                            <a class="category" href="menu.php">Dosa</a>
                            <a class="title" href="menu-list.php">Plain Dosa</a>
                            <p class="text-left">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque illo dolor sit amet
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="price ">$185.00 <del>$90.00</del></h5>
                                <a class="tf__add_to_cart margin-bottom-10" href="menu-list.php">
                                    add to cart</a>
                            </div>

                        </div>
                    </div>
                </div> -->
                <!-- <div class="col-xxl-3 col-sm-6 col-lg-4 more-box">
                    <div class="tf__menu_item">
                        <div class="tf__menu_item_img">
                            <img src="images/menu2_img_9.jpg" alt="menu" class="img-fluid w-100" loading="lazy">
                        </div>
                        <div class="tf__menu_item_text">
                            <a class="category" href="menu.php">Noodles</a>
                            <a class="title" href="menu-list.php">Chicken Noodles</a>
                            <p class="text-left">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque illo dolor sit amet
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="price ">$125.00 <del>$90.00</del></h5>
                                <a class="tf__add_to_cart margin-bottom-10" href="menu-list.php">
                                    add to cart</a>
                            </div>

                        </div>
                    </div>
                </div> -->
                <div class="" style="width:100%;text-align:center;justify-content:center">
                    <div class="lds-facebook">
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
            </div>

    </section>

    <center> <a href="menu-list.php" class="btn" id="loadMore">More Dishes&nbsp;&nbsp;<i class="fa fa-arrow-right-long"></i></a></center>

    <section id="promos-container" class="content-categories-images padding-top-30">
        <div class="images-left">
            <div class="category-image-full">
                <a href="#"> <img data-src="<?php echo e(asset('assets/images/tiffan.png')); ?>" class="lazy-abs loaded" data-ll-status="loaded" src="assets/images/tiffan.png"></a>
                <div class="category-text banner1-text">
                    <h2 class="text-white">Mini Tiffin</h2>
                    <h4 class="text-white">Save on Your Breakfast</h4>
                    <a href="menu-list.php" class="knowmore-btn mb-50">More Dishes&nbsp;<i class="fa fa-arrow-right-long"></i></a>
                </div>
            </div>
        </div>

        <div class="images-right">
            <div class="category-image">
                <a href="#"> <img data-src="<?php echo e(asset('assets/images/tiffan1.png')); ?>" class="lazy-abs loaded" data-ll-status="loaded" src="assets/images/tiffan1.png"></a>
                <div class="category-text">
                    <h3>Chicken Dum Briyani</h3>
                    <h4>Taste your Favourite<br> Non-Veg Dishes</h4>
                    <a href="menu-list.php" class="knowmore-btn1">More Dishes&nbsp;<i class="fa fa-arrow-right-long"></i></a>
                </div>
            </div>

            <div class="category-image" style="background:#d92525;">
                <a href="#"> <img data-src="<?php echo e(asset('assets/images/tiffan2.png')); ?>" class="lazy-abs loaded" data-ll-status="loaded" src="assets/images/tiffan2.png"></a>
                <div class="category-text">
                    <h3 class="text-white shadowq">Parotta and Chicken Curry</h3>
                    <h4 class="text-white">Hot & Spicy Chicken Curry</h4>
                    <a href="menu-list.php" class="knowmore-btn text-white">More Dishes&nbsp;<i class="fa fa-arrow-right-long"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- countdown -->
    <section class="countdown-area padding-top-0 padding-bottom-0">
        <div class="container">
            <div class="countdown-shapes">
                <span class="cs-1 item-bounce"><img src="<?php echo e(asset('assets/images/shapes/24.png')); ?>" alt="" /></span>
                <span class="cs-3 item-bounce"><img src="<?php echo e(asset('assets/images/shapes/26.png')); ?>" alt="" /></span>
                <span class="cs-4 item-animateOne"><img src="assets/images/shapes/27.png')}}" alt="" /></span>
                <span class="cs-5"><img src="<?php echo e(asset('assets/images/shapes/18.png')); ?>" alt="" /></span>
                <span class="cs-6"><img src="<?php echo e(asset('assets/images/shapes/22.png')); ?>" alt="" /></span>
                <span class="cs-7"><img src="<?php echo e(asset('assets/images/shapes/30.png')); ?>" alt="" /></span>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-5 col-sm-12 col-12 margin-bottom-20">
                    <div class="countdown-left">
                        <span class="cs-1"><img src="<?php echo e(asset('assets/images/shapes/25.png')); ?>" alt="" /></span>
                        <span class="cs-2"><img src="<?php echo e(asset('assets/images/shapes/Leaf.png')); ?>" alt="" /></span>
                        <span class="cs-3"><img src="<?php echo e(asset('assets/images/shapes/Leaf4.png')); ?>" alt="" /></span>
                        <span class="cs-5"><img src="<?php echo e(asset('assets/images/shapes/tomato.png')); ?>" alt="" /></span>
                        <span class="cs-7"><img src="<?php echo e(asset('assets/images/shapes/Leaf2.png')); ?>" alt="" /></span>
                        <span class="cs-8"><img src="<?php echo e(asset('assets/images/shapes/Leaf3.png')); ?>" alt="" /></span>
                        <img src="<?php echo e(asset('assets/images/giftcard.png')); ?>" alt="" />
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1 col-md-7 col-sm-12 col-12">
                    <div class="countdown-right">
                        <div class="common-title-area padding-bottom-20">
                            <h2>Fresh Taste At A Great Price, Only For <span>Delicious Food Lover. </span></h2>
                            <h3>feel hunger! order your favourite food.</h3>
                        </div>
                        <a href="gift-cards.php" class="btn">More Gift Cards&nbsp;<i class="fa fa-arrow-right-long"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- testimonial -->
    <section class="testimonial padding-bottom-40 padding-top-40">
        <div class="container">
            <div class="testi-shapes">
                <span class="ts-1"><img src="<?php echo e(asset('assets/images/img/31.png')); ?>" alt="" /></span>
                <span class="ts-2"><img src="<?php echo e(asset('assets/images/img/32.png')); ?>" alt="" /></span>
                <span class="ts-3 item-animateTwo"><img src="<?php echo e(asset('assets/images/shapes/7.png')); ?>" alt="" /></span>
                <span class="ts-4"><img src="<?php echo e(asset('assets/images/shapes/26.png')); ?>" alt="" /></span>
            </div>
            <div class="common-title-area text-center padding-bottom-50 wow fadeInUp">
                <h3>Testimonial</h3>
                <h2>Client <span>Feedback</span></h2>
            </div>
            <div class="testimonial-active">
                <?php $__currentLoopData = $testimonial; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $test): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="single-testimonial testimonial-height" >
                    <div class="testi-top">
                        <div class="tin-shapes">
                            <span class="tsin-1"><img src="<?php echo e(asset('assets/images/shapes/33.png')); ?>" alt="" /></span>
                        </div>
                        <div class="testi-meta">
                        <h6 class="h4"><?php echo e($test->title); ?></h6>
                        </div>
                    </div>
                    <div class="custom-scrol pt-0"><?php echo e($test->content); ?></div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>


    <!-- delivery-area -->
    <section class="delivery-area padding-top-40 padding-bottom-40">
        <div class="del-shapes">
            <span class="ds-1 item-bounce"><img src="<?php echo e(asset('assets/images/shapes/35.png')); ?>" alt="" /></span>
            <span class="ds-2"><img src="<?php echo e(asset('assets/images/shapes/34.png')); ?>" alt="" /></span>
            <span class="ds-3 item-bounce"><img src="<?php echo e(asset('assets/images/shapes/17.png')); ?>" alt="" /></span>
            <span class="ds-4 item-animateOne"><img src="<?php echo e(asset('assets/images/shapes/6.png')); ?>" alt="" /></span>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 align-self-lg-center margin-bottom-20 wow fadeInLeft">
                    <div class="delivery-left">
                        <img src="<?php echo e(asset('assets/images/delivery.png')); ?>" alt="" />
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12  wow fadeInRight">
                    <div class="delivery-right">
                        <div class="common-title-area padding-bottom-40">
                            <h3>Special Menu for Festive Seasons</h3>
                            <h2>
                                Fresh Taste at a Great Price <span> On Right Time & Place </span>
                            </h2>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam dolor sit ipsum neque perspiciatis ipsum neque perspiciatis.
                            </p>
                            <div class="order-box d-flex align-items-end">
                                <span class="order-img"><img src="<?php echo e(asset('assets/images/icons/1.png')); ?>" alt="" /></span>
                                <div class="order-content">
                                    <p>Order Now</p>
                                    <span><a href="tel:+9101234567890" class="text-grey">+91 01234 56789</a></span>
                                </div>
                                <a href="menu-list.php" class="btn">order now&nbsp;<i class="fa fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- footer area -->
    <script>
        jQuery(document).ready(function($) {
            $(function() {
                // Hide them all
                $(".more-box").hide()

                $(".more-box").slice(0, 6).show();
                $("#loadMore").on('click', function(e) {
                    e.preventDefault();

                    // If there is no hidden elements
                    if ($(".more-box:hidden").length === 0) {
                        $(".more-box").hide()
                        $(".more-box").slice(0, 3).show();
                    }

                    // If there is at least one hidden element
                    else {
                        $(".more-box:hidden").slice(0, 3).fadeIn();
                    }
                    $("#loadMore").hide();
                });

            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $(".products").slice(0, 3).show();


            window.addEventListener('scroll', () => {

                if (window.innerHeight + window.pageYOffset >= document.getElementsByClassName("blog-section")[0].offsetHeight) {
                    // show the loading animation
                    myscroll();
                }
            });


            function myscroll() {
                if ($(".products:hidden").length == 0) {
                    $("#lds-facebook").css('display', 'none');
                } else {

                    $(".lds-facebook").css('display', 'inline-block');
                    setTimeout(function() {
                        $(".lds-facebook").css('display', 'none');
                    }, 10);
                    $(".products:hidden").delay(20).slice(0, 3).slideDown();
                }

            }

        })
    </script>
    <script src="assets/js/main.js"></script>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\curryleaf\resources\views/view/index.blade.php ENDPATH**/ ?>