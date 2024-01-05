
<?php $__env->startPush('css'); ?>
<style>
        .breadcrumb-item+.breadcrumb-item::before {
            content: "/" !important;
        }

        .breadcrumb-item.active {
            color: #4d8750 !important;
        }

        h3 {
            font-size: 20px;
            margin-bottom: 10px;
        }
        .image img {
            width: 100%;
            height: 220px;
            display: block;
            object-fit: cover;
        }
    </style>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>

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
                    <h2 class="page-title">Menu Category</h2>
                    <ol class="breadcrumb text-center">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Menu Category</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>


    <!-- Start Dishes Area -->
    <section class="dishes-area padding-top-60 padding-bottom-40">
        <div class="container">

            <div class="row">
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                    <div class="dishes-item">
                        <div class="image">
                            <a href="<?php echo e(route('menu.list',['category' => $category->name ])); ?>">
                                <img src="<?php echo e(asset('admin/upload/category/'.$category->image)); ?>" alt="image">
                            </a>
                        </div>

                        <div class="content">
                            <h3>
                                <a href="<?php echo e(route('menu.list',['category' => $category->name ])); ?>" class="a-red txt-shadow"><?php echo e($category->name); ?></a>
                            </h3>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
        </div>
    </section>
    <!-- End Dishes Area -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\curryleaf\resources\views/view/menu.blade.php ENDPATH**/ ?>