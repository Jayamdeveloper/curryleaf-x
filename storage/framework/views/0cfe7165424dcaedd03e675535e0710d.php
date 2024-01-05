<?php
$currentFile = $_SERVER['SCRIPT_NAME'];
$parts = Explode('/', $currentFile);
$currentFile = $parts[count($parts) - 1];
?>
<style>
    span.total-count.nav-badge {
        position: absolute;
        top: -11px;
        right: -3px;
        width: 20px;
        padding: 2px 4px 1px 3px !important;
        font-size: 12px;
        font-weight: 700;
        background-color: #f62f01;
        color: #fff !important;
        border: none !important;
    }

    header .header-bottom .customer-area {
        column-gap: 10px;
    }
</style>
<header>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <!-- header-top -->
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12 d-flex flex-wrap justify-content-between">
                    <div class="contact-box">
                        <span> <a href="tel:+9101234567890"><i class="fas fa-phone-alt"></i> +91 012345 67890</a> </span>
                        <span> <a href="mailto:info@thecurryleaf.ca"><i class="fas fa-envelope-open-text"></i>
                                info@thecurryleaf.ca</a></span>
                    </div>
                    <div class="social-box">
                        <span><a href="#"><i class="fab fa-facebook-square"></i></a></span>
                        <span><a href="#"><i class="fab fa-linkedin-in"></i></a></span>
                        <span><a href="#"><i class="fab fa-instagram"></i></a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header-bottom -->
    <div class="header-bottom">
        <div class="container position-relative">
            <div class="row d-flex align-items-center">
                <div class="col-lg-3 col-md-2 col-sm-2 col-3">
                    <div class="logo">
                        <a href="<?php echo e(route('home')); ?>">
                            <!-- <h1 class="nav-text">The Curry Leaf</h1> -->
                            <img src="<?php echo e(asset('assets/images/logo.png')); ?>" alt="logo">
                        </a>
                    </div>
                </div>
                <div class="col-lg-7 col-md-3 col-3 d-lg-block">
                    <nav id="mobile-menu">
                        <ul class="main-menu">
                            <li><a href="<?php echo e(route('menu')); ?>" <?php if ($currentFile == 'menu.php') {
                                echo 'class="current"';
                            } ?>>Menu</a></li>
                            <li><a href="<?php echo e(route('reservations')); ?>" <?php if ($currentFile == 'reservations.php') {
                                echo 'class="current"';
                            } ?>>Reservations</a></li>
                            <li><a href="<?php echo e(route('giftcards')); ?>" <?php if ($currentFile == 'gift-cards.php') {
                                echo 'class="current"';
                            } ?>>Gift Cards</a></li>
                            <li><a href="<?php echo e(route('faq')); ?>" <?php if ($currentFile == 'faq.php') {
                                echo 'class="current"';
                            } ?>>Faq</a></li>

                            <li><a href="<?php echo e(route('aboutus')); ?>" <?php if ($currentFile == 'aboutus.php') {
                                echo 'class="current"';
                            } ?>>About Us</a></li>
                            <li><a href="<?php echo e(route('contactus')); ?>" <?php if ($currentFile == 'contactus.php') {
                                echo 'class="current"';
                            } ?>>Contact Us</a></li>
                            <!-- <li><a href="#">blog <span><i class="fas fa-angle-down"></i></span></a>
                                    <ul class="submenu">
                                        <li><a href="blog.php">blog</a></li>
                                        <li><a href="blog-single.php">single blog</a></li>
                                    </ul>
                                </li> -->

                        </ul>
                    </nav>
                </div>
                <div class="col-lg-2 col-md-7 col-6">
                    <div class="customer-area">
                        <?php if(session()->has('user_email')): ?>
                            <div class="dropdown">
                                <span class="dropbtn">
                                    <a href=""><i class="fas fa-user"></i>

                                    </a>
                                </span>
                                <div class="dropdown-content">
                                    <a href="<?php echo e(route('userprofile')); ?>">My Account</a>

                                    <a href="<?php echo e(route('userlogout')); ?>" onclick="return logoutt()">Logout</a>
                                </div>
                            </div>

                            <h6 class="acc-h6">Hi <?= session()->get('user_name') ?>!</h6>
                            <span>
                                <a href="<?php echo e(route('cart.index')); ?>"><i class="fas fa-shopping-basket"></i></a>
                                <span id="cart" class="total-count nav-badge cart"></span>
                            </span>
                        <?php else: ?>
                            <div class="dropdown">
                                <span class="dropbtn pm-2">
                                    <a href=""><i class="fas fa-user"></i>

                                    </a>
                                </span>
                                <div class="dropdown-content">
                                    <a href="<?php echo e(route('login')); ?>">Login</a>


                                </div>
                            </div>

                            
                            <span>
                                <a href="<?php echo e(route('cart.index')); ?>"><i class="fas fa-shopping-basket"></i></a>
                                <span id="cart" class="total-count nav-badge cart"></span>
                            </span>
                        <?php endif; ?>

                        <!-- <a href="#" class="btn">login</a> -->
                    </div>
                </div>
            </div>
            <!-- mobile-menu -->
            <div class="mobile-menu"></div>
        </div>
    </div>
    <script>
        function logoutt() {

            history.pushState(null, null, location.href);
            history.replaceState(null, null, location.href);
            window.onpopstate = function() {
                history.go(1);
            };

        }
    </script>
</header>
<?php /**PATH C:\xampp\htdocs\30Dec-curryleaf\resources\views/layouts/header.blade.php ENDPATH**/ ?>