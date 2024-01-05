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

        .btn {
            padding: 5px 14px;
            font-size: 15.2px;
            color: #4d8750;
            border-color: #4d8750;
            background: transparent;
            font-family: 'Barlow', sans-serif !important;
        }

        .btn:focus,
        .btn:hover {
            background: #4d8750;
            color: #fff;
            border-color: #4d8750;
        }

        .quantity {
            justify-content: center;
        }

        .clr-green {
            font-weight: 600;
            font-family: 'Barlow', sans-serif !important;
            color: #535353;
        }

        .orders-txt {
            font-weight: 600;
            font-size: 21px;
            color: #2a435d !important;
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
    <!-- checkout-area -->
    <!-- breadcrumb-area -->
    <div class="banner-area breadcrumb-area padding-top-10 padding-bottom-0">
        <div class="container padding-top-120">
            <div class="row justify-content-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-left margin-bottom-5">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Account Information</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- profile-area -->
    <section class="profile-area padding-top-60 padding-bottom-60">
        <div class="container">
            <div class="row align-items-start">
                <!-- tab-buttons -->
                <div class="col-md-3 col-lg-3">
<?php echo $__env->make('layouts.side-menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
                <!-- tab-content -->
                <div class="col-md-9 col-lg-9">
                    <div class="row">
                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                            <h5 class="orders-txt margin-top-10">Account Information</h5>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 ">
                            <form action="<?php echo e(route('profileedit')); ?>" action="post">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="id" value="<?php echo e($user->id); ?>">
                                <input type="submit" class="btn float-right" value="Edit"> </a>
                            </form>

                        </div>
                    </div>
                    <div class="row padding-top-20">
                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 ">
                            <p class="mb-20 barlow-text"><span class="clr-green">First Name &nbsp; : &nbsp;</span> <?php echo e($user->fname); ?> </p>
                            <p class="mb-20 barlow-text"><span class="clr-green">E-mail Address &nbsp; : &nbsp;</span> <?php echo e($user->email); ?></p>
                            <p class="mb-20 barlow-text"><span class="clr-green">Phone Number &nbsp; : &nbsp;</span> <?php echo e($user->phone); ?></p>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 ">
                            <p class="mb-20 barlow-text"><span class="clr-green">Last Name &nbsp; : &nbsp;</span> <?php echo e($user->lname); ?></p>
                            <p class="mb-20 barlow-text"><span class="clr-green">Date of Birth &nbsp; : &nbsp;</span> <?php echo e($user->dob); ?></p>
                            <p class="mb-20 barlow-text"><span class="clr-green">Gender &nbsp; : &nbsp;</span> <?php echo e($user->gender); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\30Dec-curryleaf\resources\views/profile/profile.blade.php ENDPATH**/ ?>