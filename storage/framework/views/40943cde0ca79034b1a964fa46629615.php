<?php
$currentFile = $_SERVER["SCRIPT_NAME"];
$parts = Explode('/', $currentFile);
$currentFile = $parts[count($parts) - 1];
?>
<div class="profile-tabs nav flex-column nav-pills me-3" role="tablist" aria-orientation="vertical">
    <a href="<?php echo e(route('profile.orders')); ?>" class="nav-link <?php if ($currentFile == "orders.php") {
                                                echo 'active';
                                            } ?>">
        <i class="fa-solid fa-cart-plus"></i>&nbsp;
        Orders
    </a>
    <!-- <a href="wishlist.php" class="nav-link  <?php //if (($currentFile == "wishlist.php")) {
                                                    //echo 'active';
                                                    // } 
                                                    ?>">
        <i class="fa-solid fa-heart"></i>&nbsp;
        Wishlist
    </a> -->
    <a href="<?php echo e(route('profile.index')); ?>" class="nav-link  <?php if (($currentFile == "profile.php") || ($currentFile == "edit-profile.php")) {
                                                echo 'active';
                                            } ?>">
        <i class="fa-regular fa-user"></i>&nbsp;
        Account Details
    </a>
    <a href="<?php echo e(route('profile.address')); ?>" class="nav-link  <?php if (($currentFile == "address.php") || ($currentFile == "add-address.php")) {
                                                echo 'active';
                                            } ?>">
        <i class="fa-solid fa-location-dot"></i>&nbsp;
        Address Book
    </a>
    <!-- <a href="change-password.php" class="nav-link text-start">
        <i class="fa-regular fa-user"></i>
        Change Password
    </a> -->
</div><?php /**PATH C:\xampp\htdocs\30Dec-curryleaf\resources\views/layouts/side-menu.blade.php ENDPATH**/ ?>