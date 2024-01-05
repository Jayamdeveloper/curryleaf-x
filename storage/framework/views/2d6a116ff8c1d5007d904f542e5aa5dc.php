<footer class="padding-top-0 padding-bottom-10">
    <div class="fo-shapes">
        <span class="fs-1"><img src="<?php echo e(asset('assets/images/gallery/26.png')); ?>" alt="" /></span>
    </div>
    <div class="footer-bottom padding-top-22 padding-bottom-10">
        <div class="container">
            <div class="row">

                <div class="col-lg-5 col-md-6 col-12 margin-bottom-20">
                    <a href="index.php" class="nav-footertext">The Curry Leaf</a>
                    <p class="txt-grey padding-top-10">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis enim nihil accusamus deserunt at dolorum nemo ipsum aspernatur amet vero. Animi mollitia consectetur obcaecati repudiandae reiciendis voluptates ad sapiente est.
                    </p>
                    <a href="reservations.php" class="btn-2 font-15">Book a Table&nbsp;&nbsp;<i class="fa fa-arrow-right-long"></i></a>
                </div>
                <div class="col-lg-2 col-md-6 col-12 margin-bottom-20">
                    <h3 class="txt-grey a-red padding-bottom-10 padding-top-10">Quick Links</h3>
                    <ul class="footer-li">
                        <li><a href="index.php"><i class="fa fa-angle-double-right" aria-hidden="true"></i>&nbsp;Home</a></li>
                        <li><a href="menu.php"><i class="fa fa-angle-double-right" aria-hidden="true"></i>&nbsp;Menu</a></li>
                        <li><a href="reservations.php"><i class="fa fa-angle-double-right" aria-hidden="true"></i>&nbsp;Reservations</a></li>
                        <li><a href="faq.php"><i class="fa fa-angle-double-right" aria-hidden="true"></i>&nbsp;Faq</a></li>
                        <li><a href="terms-conditions.php"><i class="fa fa-angle-double-right" aria-hidden="true"></i>&nbsp;Terms & Conditions</a></li>
                        <li><a href="refund-policy.php"><i class="fa fa-angle-double-right" aria-hidden="true"></i>&nbsp;Refund Policy</a></li>
                        <li><a href="privacy-policy.php"><i class="fa fa-angle-double-right" aria-hidden="true"></i>&nbsp;Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 col-12 margin-bottom-20">
                    <h3 class="txt-grey a-red padding-bottom-20 padding-top-10">Contact Info</h3>
                    <div class="widget">
                        <h6 class="a-red">Address</h6>
                        <p class="text-left">570 8th Ave,cityname, statename, countryname</p>
                    </div>
                    <div class="widget">
                        <h6 class="a-red">Phone Number</h6>
                        <a href="tel:+910123456789" class="text-grey">+91 01234 56789</a>
                    </div>
                    <div class="widget padding-top-15">
                        <h6 class="a-red">Email</h6>
                        <a href="mailto:info@thecurryleaf.ca" class="text-grey">info@thecurryleaf.ca</a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-12 margin-bottom-20 margin-top-60">

                    <div class="widget ">
                        <h6>Opening Hours</h6>
                        <p>
                            <span>Mon-Fri: 8am - 9pm</span> <br /><span>Sat: 9am - 5pm</span>
                            <br /><span>Sun: 10am - 5pm</span>
                        </p>
                        <a href="tel:+910123456789" class="btn-2 text-white">Make a call&nbsp;&nbsp;<i class="fa fa-arrow-right-long"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-area ">
        <p class="text-center padding-top-10 txt-grey">Copyright © 2023 The Curry Leaf | All Rights Reserved | <a href="https://jayamwebsolutions.com/web-design-company-in-chennai.php" target="_blank" rel="noopener noreferrer" class="txt-grey" title="web design company in chennai"> Design by Jayam Web Solutions</a>
            </a></p>
    </div>
</footer>

  <!-- ToTop Button -->
  <button class="scrollup"><i class="fas fa-angle-up"></i></button>

<script>
        $(function() {
            $('[data-decrease]').click(decrease);
            $('[data-increase]').click(increase);
            $('[data-value]').change(valueChange);
        });

        function decrease() {
            var value = $(this).parent().find('[data-value]').val();
            if (value > 1) {
                value--;
                $(this).parent().find('[data-value]').val(value);
            }
        }

        function increase() {
            var value = $(this).parent().find('[data-value]').val();
            if (value < 100) {
                value++;
                $(this).parent().find('[data-value]').val(value);
            }
        }

        function valueChange() {
            var value = $(this).val();
            if (value == undefined || isNaN(value) == true || value <= 0) {
                $(this).val(1);
            } else if (value >= 101) {
                $(this).val(100);
            }
        }
    </script>
<script>
    var shoppingCart = (function() {

        cart = [];

        // Constructor
        function Item(name, price, count) {
            this.name = name;
            this.price = price;
            this.count = count;
        }
        // Save cart
        function saveCart() {
            sessionStorage.setItem('shoppingCart', JSON.stringify(cart));
        }

        // Load cart
        function loadCart() {
            cart = JSON.parse(sessionStorage.getItem('shoppingCart'));
        }
        if (sessionStorage.getItem("shoppingCart") != null) {
            loadCart();
        }

        var obj = {};

        // Add to cart
        obj.addItemToCart = function(name, price, count) {
            for (var item in cart) {
                if (cart[item].name === name) {
                    cart[item].count++;
                    saveCart();
                    return;
                }
            }

            var item = new Item(name, price, count);
            cart.push(item);
            saveCart();
        }
        // Set count from item
        obj.setCountForItem = function(name, count) {
            for (var i in cart) {
                if (cart[i].name === name) {
                    cart[i].count = count;
                    break;
                }
            }
        };
        // Remove item from cart
        obj.removeItemFromCart = function(name) {
            for (var item in cart) {
                if (cart[item].name === name) {
                    cart[item].count--;
                    if (cart[item].count === 0) {
                        cart.splice(item, 1);
                    }
                    break;
                }
            }
            saveCart();
        }

        // Remove all items from cart
        obj.removeItemFromCartAll = function(name) {
            for (var item in cart) {
                if (cart[item].name === name) {
                    cart.splice(item, 1);
                    break;
                }
            }
            saveCart();
        }

        // Clear cart
        obj.clearCart = function() {
            cart = [];
            saveCart();
        }

        // Count cart 
        obj.totalCount = function() {
            var totalCount = 0;
            for (var item in cart) {
                totalCount += cart[item].count;
            }
            return totalCount;
        }

        // Total cart
        obj.totalCart = function() {
            var totalCart = 0;
            for (var item in cart) {
                totalCart += cart[item].price * cart[item].count;
            }
            return Number(totalCart.toFixed(2));
        }

        // List cart
        obj.listCart = function() {
            var cartCopy = [];
            for (i in cart) {
                item = cart[i];
                itemCopy = {};
                for (p in item) {
                    itemCopy[p] = item[p];

                }
                itemCopy.total = Number(item.price * item.count).toFixed(2);
                cartCopy.push(itemCopy)
            }
            return cartCopy;
        }

        return obj;
    })();

    // Add item
    $('.add-to-cart').click(function(event) {
        event.preventDefault();
        var name = $(this).data('name');
        var price = Number($(this).data('price'));
        shoppingCart.addItemToCart(name, price, 1); // Pass the image parameter
        displayCart();
    });

    // Clear items
    $('.clear-cart').click(function() {
        shoppingCart.clearCart();
        displayCart();
    });

    var proimage = ("assets/images/noodles.jpg");
    var proimage = ("assets/images/pizza.jpg");

    function displayCart() {
        var cartArray = shoppingCart.listCart();
        var output = "<thead><tr><th class='table-one-th'>Product Image</th><th class='table-one-th'>Product Name</th><th class='table-one-th'>Price</th><th class='table-one-th'>Quantity</th><th class='table-one-th '>Total</th><th class='table-one-th'>Action</th></tr></thead>";

        for (var i in cartArray) {
            output += "<tr>" +
                "<td class='pro-img'> <img class='' src=' " + proimage + "'> </td>" +
                "<td>" + cartArray[i].name + "</td>" +
                "<td>₹ " + cartArray[i].price + "</td>" +
                "<td class='nopad-td'><div class='input-group w-50 '><button class='minus-item input-group-addon btn btn-primary' data-name=" + cartArray[i].name + ">-</button>" +
                "<input type='number' class='item-count form-control align-td' data-name='" + cartArray[i].name + "' value='" + cartArray[i].count + "'>" +
                "<button class='plus-item btn btn-primary input-group-addon' data-name=" + cartArray[i].name + ">+</button></div></td>" +
                "<td>" + cartArray[i].total + "</td>" +
                "<td><button class='delete-item btn btn-danger' data-name=" + cartArray[i].name + ">X</button></td>" +
                " = " +
                
                "</tr>";
        }
        $('.show-cart').html(output);
        $('.total-cart').html(shoppingCart.totalCart());
        $('.total-count').html(shoppingCart.totalCount());
    }

    // Delete item button

    $('.show-cart').on("click", ".delete-item", function(event) {
        var name = $(this).data('name')
        shoppingCart.removeItemFromCartAll(name);
        displayCart();
    })


    // -1
    $('.show-cart').on("click", ".minus-item", function(event) {
        var name = $(this).data('name')
        shoppingCart.removeItemFromCart(name);
        displayCart();
    })
    // +1
    $('.show-cart').on("click", ".plus-item", function(event) {
        var name = $(this).data('name')
        shoppingCart.addItemToCart(name);
        displayCart();
    })

    // Item count input
    $('.show-cart').on("change", ".item-count", function(event) {
        var name = $(this).data('name');
        var count = Number($(this).val());
        shoppingCart.setCountForItem(name, count);
        displayCart();
    });

    displayCart();
</script>
<!-- Javascript Files -->
<!-- <script src="assets/js/vendor/jquery-2.2.4.min.js"></script> -->
<script src="assets/js/vendor/bootstrap.min.js"></script>
<script src="assets/js/vendor/jquery.meanmenu.min.js"></script>
<script src="assets/js/vendor/jquery.magnific-popup.min.js"></script>
<script src="assets/js/vendor/slick.min.js"></script>
<script src="assets/js/vendor/counterup.min.js"></script>
<script src="assets/js/vendor/countdown.js"></script>
<script src="assets/js/vendor/waypoints.min.js"></script>
<script src="assets/js/vendor/jquery-ui.js"></script>
<script src="assets/js/vendor/isotope.pkgd.min.js"></script>
<script src="assets/js/vendor/easing.min.js"></script>
<script src="assets/js/vendor/wow.min.js"></script>

<!-- <div class="whatsappp animated1 bounce"><a href="https://api.whatsapp.com/send?phone=910123456789" class="" target="_blank">
        <img src="whatsapp.png"></a>
</div> --><?php /**PATH C:\xampp\htdocs\30Dec-curryleaf\resources\views/layouts/footer.blade.php ENDPATH**/ ?>