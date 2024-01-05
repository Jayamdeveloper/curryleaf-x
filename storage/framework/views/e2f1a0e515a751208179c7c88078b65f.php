<?php $__env->startPush('css'); ?>
    <style>
        header {
            border-bottom: 1px solid #ebebebb0;
        }

        :where(.container1, form, .input-field, .head-span) {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .container1 {
            background: #fff;
            padding: 7px 65px;
            border-radius: 12px;
            row-gap: 20px;
        }

        .container1 .head-span {
            height: 65px;
            width: 65px;
            background: #ff7c08;
            color: #fff;
            font-size: 2.5rem;
            border-radius: 50%;
        }

        .container1 h4 {
            font-size: 14px;
            color: #333;
            font-weight: 500;
        }

        form .input-field {
            flex-direction: row;
            column-gap: 10px;
        }

        .input-field input {
            height: 45px;
            width: 42px;
            border-radius: 6px;
            outline: none;
            font-size: 1.125rem;
            text-align: center;
            border: 1px solid #ddd;
        }

        .input-field input:focus {
            box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);
        }

        .input-field input::-webkit-inner-spin-button,
        .input-field input::-webkit-outer-spin-button {
            display: none;
        }

        form button {
            margin-top: 25px;
            width: 100%;
            color: #fff;
            font-size: 1rem;
            border: none;
            padding: 9px 0;
            cursor: pointer;
            border-radius: 6px;
            pointer-events: none;
            background: #6e93f7;
            transition: all 0.2s ease;
        }

        form button.active {
            background: #4070f4;
            pointer-events: auto;
        }

        form button:hover {
            background: #0e4bf1;
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
    <section class="border-top about-area about-area2 writeto-us login-area padding-top-140 signup-area padding-bottom-60">
        <div class="form-shapes">
            <span class="fs1 item-animateOne"><img src="assets/images/shapes/1.png" alt=""></span>
            <span class="fs2 item-bounce"><img src="assets/images/shapes/12.png" alt=""></span>
            <span class="fs3"><img src="assets/images/shapes/13.png" alt=""></span>
            <span class="fs4 item-bounce"><img src="assets/images/shapes/26.png" alt=""></span>
        </div>
        <?php if(session('message')): ?>
        <div class="alert alert-danger">
            <?php echo e(session('message')); ?>

        </div>
    <?php endif; ?>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4 col-md-12 wow fadeInUp">
                    <div class="contact-form-area login-form-area signup-form-area">
                        <h3>OTP Verification</h3>
                        <p>Please check your inbox, The Email Id<b> <?=session()->get('e')?></b>    received!</p>
                        <div class="container1">
                            <div class="head-span">
                                <i class="fa fa-check-circle" aria-hidden="true"></i>
                            </div>
                            <h4>Enter OTP Code</h4>
                            <span style="color:red">Time left : <span style="color:red" id="timer"></span></span>
                            <form action="<?php echo e(route('otpverifycheck')); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <div class="input-field" autofocus>

                                    <input type="text" maxLength="1" name="otp[]" id="digit1" oninput="moveToNext(this, 'digit2')" onkeydown="handleBackspace(this, 'digit1')" />
                                    <input type="text" maxLength="1" name="otp[]" id="digit2" oninput="moveToNext(this, 'digit3')" onkeydown="handleBackspace(this, 'digit1')"  />
                                    <input type="text" maxLength="1" name="otp[]" id="digit3" oninput="moveToNext(this, 'digit4')" onkeydown="handleBackspace(this, 'digit2')" />
                                    <input type="text" maxLength="1" name="otp[]" id="digit4" oninput="moveToNext(this, 'null')" onkeydown="handleBackspace(this, 'digit3')"  />
                                    <input type="hidden" id="exirytime" value="<?=session()->get('expiry')?>"/>
                                    <input type="hidden" id="currenttime" value="<?=now()?>"/>
                                </div>
                                <input type="submit" name="submit" class="btn" value="Verify OTP">
                            </form>
                            <form action="<?php echo e(route('login.verify')); ?>" method="post" autocomplete="off">
                                <?php echo csrf_field(); ?>
                                
                                <input type="hidden" name="email" value="<?=session()->get('e')?>"/>
                                <input type="submit" value="Resend OTP"></input>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php $__env->stopSection(); ?>


    <!-- ToTop Button -->
    <button class="scrollup"><i class="fas fa-angle-up"></i></button>
    <script>
        window.onload = function(){
var etime=document.getElementById('exirytime').value;
var ctime=document.getElementById('currenttime').value;
var cTime = ctime.substr(14, 2);
var eTime = etime.substr(14, 2);
var cs = ctime.substr(17, 2);
var es = etime.substr(17, 2);
var ch = ctime.substr(11, 2);
var eh = etime.substr(11, 2);
var countsec=es-cs;
var countown=eTime-cTime;
if(eh-ch==1){
    countown=5;
}

            document.getElementById('timer').innerHTML =
            countown + ":" + countsec;
startTimer();


function startTimer() {
  var presentTime = document.getElementById('timer').innerHTML;
  var timeArray = presentTime.split(/[:]+/);
  var m = timeArray[0];
  var s = checkSecond((timeArray[1] - 1));

  if(m<=0){

document.getElementById('timer').innerHTML ="Time expired please resend OTP or login after some times";

}
  if(s==59){m=m-1}
  if(m<0){
    return
  }


  document.getElementById('timer').innerHTML =
    m + ":" + s;
  console.log(m)
  setTimeout(startTimer, 1000);



}

function checkSecond(sec) {
  if (sec < 10 && sec >= 0) {sec = "0" + sec}; // add zero in front of numbers < 10
  if (sec < 0) {sec = "59"};
  return sec;
}
}

    </script>
    <script>

function moveToNext(currentInput, nextInputId) {

            const maxLength = parseInt(currentInput.getAttribute('maxlength'));
            const currentLength = currentInput.value.length;

            if (currentLength >= maxLength) {
                if (nextInputId) {
                    document.getElementById(nextInputId).focus();
                }
            }
        }

        function handleBackspace(currentInput, prevInputId) {
            // Handle backspace key
            if (event.key === 'Backspace' && currentInput.value.length === 0) {
                // Move focus to the previous input field
                document.getElementById(prevInputId).focus();
            }
        }
    </script>
    <!-- Javascript Files -->


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\30Dec-curryleaf\resources\views/auth/otp-verify.blade.php ENDPATH**/ ?>