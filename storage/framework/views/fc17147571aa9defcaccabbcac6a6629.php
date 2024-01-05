<?php $__env->startPush('css'); ?>
    <style>
        header {
            border-bottom: 1px solid #ebebebb0;
        }

        a.form-link {
            color: #ff7c08;
            font-family: 'Barlow', sans-serif !important;
            font-weight: 600;
        }

        a.form-link:hover {
            color: #595959;
        }

        span.txt-style {
            font-family: 'Barlow', sans-serif !important;
            font-weight: 500;
            color: #595959;
        }

        .btn-new {
            background: #ff7c08;
            padding: 12px 40px 12px 40px;
            border: 1px solid #ff7c08;
            color: #fff;
            font-size: 16px !important;
            font-family: 'Barlow', sans-serif !important;
            font-weight: 600;
            text-transform: capitalize;
            display: inline-block;
            margin-top: 10px;
            border-radius: 30px;
            transition: 0.3s;
        }

        .btn-new:hover {
            background-color: transparent;
            color: #ff7c08;
        }

        @media only screen and (max-width: 820px) {
            .form-w {
                width: 100% !important;
                margin-top: 37px;
                margin-bottom: -42px;
            }
        }

        .padding-bottom-60 {
            padding-bottom: 35px;
        }

        .padding-top-140 {
            padding-top: 155px;
        }
    </style>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>

    <?php if(session('success')): ?>
        Swal.fire('Success', '<?php echo e(session('success')); ?>', 'success');
    <?php elseif(session('error')): ?>
        Swal.fire('Error', '<?php echo e(session('error')); ?>', 'error');
    <?php endif; ?>

    <section class="border-top about-area about-area2 writeto-us login-area padding-top-140 signup-area padding-bottom-60">
        <div class="form-shapes">
            <span class="fs1 item-animateOne"><img src="assets/images/shapes/1.png" alt=""></span>
            <span class="fs2 item-bounce"><img src="assets/images/shapes/12.png" alt=""></span>
            <span class="fs3"><img src="assets/images/shapes/13.png" alt=""></span>
            <span class="fs4 item-bounce"><img src="assets/images/shapes/26.png" alt=""></span>
        </div>
        <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>
<?php if(session('message')): ?>
<script>
    Swal.fire({
        position: "center",
        icon: "success",
        title: message,
        showConfirmButton: false,
        timer: 4000
    });
</script>
<?php endif; ?>
<script>
    <?php if(session('success')): ?>
        Swal.fire('Success', '<?php echo e(session('success')); ?>', 'success');
    <?php elseif(session('error')): ?>
        Swal.fire('Error', '<?php echo e(session('error')); ?>', 'error');
    <?php endif; ?>
</script>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-3 form-w w-50 col-md-12 wow fadeInUp">
                    <div class="contact-form-area login-form-area signup-form-area">
                        <h3>Register Your Account</h3>

                        <form action="<?php echo e(route('otpverify')); ?>" method="post" autocomplete="off">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="FirstName" class="form-label">First Name <span class="text-danger">
                                                *</span></label>
                                        <input type="text" name="fname" id="fname"  onblur="return nameval(this.value);" placeholder="Enter your first name"  class="form-control"
                                            required>
                                            <div id="fnameempty" style="color:red"></div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="LastName"  class="form-label">Last Name </label>
                                        <input type="text" name="lname" id="lname"  onblur="return nameval2(this.value);" placeholder="Enter your last name" class="form-control"
                                            required>
                                            <div id="lnameempty" style="color:red"></div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="EmailAddress" class="form-label">Email Address <span
                                                class="text-danger"> *</span></label>
                                        <input type="email" placeholder="Enter your email address" name="email" class="form-control"
                                            id="email" aria-describedby="emailHelp" required>
                                            <div id="emailempty" style="color:red"></div>
                                    </div>

                                </div>
                                
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="PhoneNumber" class="form-label">Phone Number <span class="text-danger">
                                                *</span></label>
                                        <input type="text" placeholder="Enter your phone number" class="form-control"
                                            id="phone" name="phone" aria-describedby="emailHelp" minlength="10" maxlength="11" onkeypress="return onlyNumberKey1(event)" required>
                                            <div id="phoneempty" style="color:red"></div>
                                        </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="DateofBirth" class="form-label">Date of Birth <span class="text-danger">
                                                *</span></label>
                                        <input type="date" name="dob"class="form-control" id="dob"
                                            aria-describedby="emailHelp" onblur="return dobvali();" required>
                                            <div id="dobempty" style="color:red"></div>
                                    </div>
                                </div>

                                <div class="col-md-12  mb-3">
                                    <label class="form-check-label ps-2" for="flexRadioDefault1">Gender <span
                                            class="text-danger"> *</span></label>

                                    <div class="d-flex mt-2">
                                        <div class="form-check d-flex align-items-baseline">
                                            <input type="radio" name="gender" value="Male" required>
                                            <label class="form-check-label ps-2 text-secondary" for="flexRadioDefault1">
                                                Male
                                            </label>
                                        </div>

                                        <div class="form-check d-flex align-items-baseline">
                                            <input type="radio" name="gender" value="Female" required>
                                            <label class="form-check-label ps-2 text-secondary" for="flexRadioDefault1">
                                                Female
                                            </label>
                                        </div>

                                        <div class="form-check d-flex align-items-baseline">
                                            <input type="radio" name="gender" value="Transgender" required>
                                            <label class="form-check-label ps-2 text-secondary" for="flexRadioDefault1">
                                                Transgender
                                            </label>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="col-md-12">
                                <div class="login-btn">
                                    <button type="submit" onclick="return emptycheck()" class="btn-new w-100">Register</button>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="mt-4">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <span class="txt-style">Already have an account ?</span>
                                        </div>
                                        <a href="<?php echo e('Login'); ?>" class="form-link ps-2">Login</a>
                                    </div>
                                </div>
                            </div>

                        </form>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        function emptycheck(){

            if(document.getElementById("fname").value==""){
                document.getElementById("fnameempty").innerHTML="This field is required";
            }else{
                document.getElementById("lnameempty").innerHTML="";
            }
            if(document.getElementById("lname").value==""){
                document.getElementById("lnameempty").innerHTML="This field is required";
            }else{
                document.getElementById("lnameempty").innerHTML="";
            }
            if(document.getElementById("phone").value==""){
                document.getElementById("phoneempty").innerHTML="This field is required";
            }else{
                document.getElementById("phoneempty").innerHTML="";
            }
            if(document.getElementById("email").value==""){
                document.getElementById("emailempty").innerHTML="This field is required";
            }else{
                document.getElementById("emailempty").innerHTML="";
            }
            if(document.getElementById("dob").value==""){
                document.getElementById("dobempty").innerHTML="This field is required";
            }  else{
                document.getElementById("dobempty").innerHTML="";
            }
            if(document.getElementById("password").value==""){
                document.getElementById("passwordempty").innerHTML="This field is required";
            }else{
                document.getElementById("passwordempty").innerHTML="";
            }
        }
        function onlyNumberKey1(evt) {
            if(document.getElementById("phone").value!=""){
                document.getElementById("phoneempty").innerHTML="";
            }
            // Only ASCII character in that range allowed
            var ASCIICode = (evt.which) ? evt.which : evt.keyCode
            if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
                return false;
            return true;

        }
        function dobvali(){
            if(document.getElementById("dob").value!=""){
                var DOB=document.getElementById("dob").value;
                var today = new Date();
    var birthDate = new Date(DOB);
    var age = today.getFullYear() - birthDate.getFullYear();
    var m = today.getMonth() - birthDate.getMonth();
    if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
        age--;
    }
if(age<18){
    Swal.fire({
  icon: "error",
  title: "Oops...",
  text: "You must be olderthen 18year!",
});
    document.getElementById("dobempty").innerHTML="You must be olderthen 18year!";
    document.getElementById("dob").value="";
}else{
    document.getElementById("dobempty").innerHTML="";
}
            }

}
function nameval(name) {
            var alpha = /^[a-zA-Z\s-, ]+$/;
            if (name != "") {
                if (!name.match(alpha)) {

                    document.getElementById("fnameempty").innerHTML = "Invalid name.";
                    document.getElementById("fname").value = "";
                    return false;
                } else {
                    document.getElementById("fnameempty").innerHTML = "";
                    return true;
                }
            }else{
            document.getElementById("fnameempty").innerHTML = "";
        }
        }
        function nameval2(name) {
            var alpha = /^[a-zA-Z\s-, ]+$/;
            if (name != "") {
                if (!name.match(alpha)) {

                    document.getElementById("lnameempty").innerHTML = "Invalid name.";
                    document.getElementById("flname").value = "";
                    return false;
                } else {
                    document.getElementById("lnameempty").innerHTML = "";
                    return true;
                }
            }else{
            document.getElementById("lnameempty").innerHTML = "";
        }
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\30Dec-curryleaf\resources\views/profile/signup.blade.php ENDPATH**/ ?>