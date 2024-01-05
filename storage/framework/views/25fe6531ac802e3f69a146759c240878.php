<?php $__env->startPush('css'); ?>
    <style>
        .breadcrumb-item+.breadcrumb-item::before {
            content: "/" !important;
        }

        h2 {
            font-weight: 600;
            color: #2a435d !important;
            font-size: 30px;
        }

        .breadcrumb-item.active {
            color: #4d8750 !important;
        }

        .accordion .accordion-item button[aria-expanded='true'] {
            border-bottom: 1px solid #eceff7;
        }

        .accordion-button:not(.collapsed) {
            background-color: #eef2cf;
        }

        .accordion-button:focus {
            box-shadow: none !important;
        }

    </style>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
    <!-- breadcrumb-area -->
    <div class="banner-area breadcrumb-area padding-top-30 padding-bottom-20">
        <div class="bread-shapes">
            <span class="b-shape-1 item-bounce"><img src="assets/images/img/5.png" alt=""></span>
            <span class="b-shape-2"><img src="assets/images/img/6.png" alt=""></span>
            <span class="b-shape-5"><img src="assets/images/shapes/18.png" alt=""></span>
            <span class="b-shape-6 item-animateOne"><img src="assets/images/img/7.png" alt=""></span>
        </div>
        <div class="container padding-top-120">
            <div class="row justify-content-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb text-center">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Faq</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- about us -->
    <section class="about-area about-area2 padding-top-60 padding-bottom-60">
        <div class="container">
            <h2>Frequently Asked Questions</h2><br>

            <div class="accordion" id="accordionExample">
                <?php $i = 1; ?>
                <?php $__currentLoopData = $faqall; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button <?php echo $i==1?'':'collapsed'?>" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse<?php echo e($i); ?>" aria-expanded="<?php echo $i==1?'true':'false'?>" aria-controls="collapse<?php echo e($i); ?>">
                               <b> <?php echo e($faq->question); ?></b>
                            </button>

                        </h2>

                        <div id="collapse<?php echo e($i); ?>" class="accordion-collapse collapse <?php echo $i==1?'show':''?>" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <?php echo e($faq->answer); ?>

                            </div>
                        </div>
                    </div>
                    <?php $i++;?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\curryleaf\resources\views/view/faq.blade.php ENDPATH**/ ?>