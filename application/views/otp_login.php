<?php session_start();
 $mob= $_SESSION['mobile'];
// echo $_SESSION['mobl']=$mob;
 ?>
<!DOCTYPE html>
<html lang="en" class="default-style layout-fixed layout-navbar-fixed">
<head>
<title>User Login</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
<meta name="description" content="" />
<meta name="keywords" content="">
<meta name="author" content="" />
<link rel="icon" type="image/x-icon" href="https://jusmarktech.in/Culture/img/core-img/ashish%20ji.png">

<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

<link rel="stylesheet" href="<?php echo base_url();?>assets/fonts/fontawesome.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/fonts/ionicons.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/fonts/linearicons.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/fonts/open-iconic.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/fonts/pe-icon-7-stroke.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/fonts/feather.css">

<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-material.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/shreerang-material.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/uikit.css">

<link rel="stylesheet" href="<?php echo base_url();?>assets/libs/perfect-scrollbar/perfect-scrollbar.css">

<link rel="stylesheet" href="<?php echo base_url();?>assets/css/pages/authentication.css">
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
</head>
<style>
    .inputs1{
   padding-left: 14px !important;
   font-size: xx-large;
}


.inputs {
  margin: 0.5rem;
  padding: 0.5rem;
  max-width: 2rem;
  text-align: center;
}


input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
  -webkit-appearance: none; 
  margin: 0; 
}
</style>
<body>
<div class="page-loader">
        <div class="bg-primary"></div>
    </div>
    <!-- [ Preloader ] End -->

    <!-- [ Content ] Start -->
    <div class="authentication-wrapper authentication-2 ui-bg-cover ui-bg-overlay-container px-4">
        <div class="ui-bg-overlay bg-dark opacity-25"></div>

        <div class="authentication-inner py-5">

            <div class="card">
                <div class="p-4 p-sm-5">
                    <!-- [ Logo ] Start -->
                    <div class="d-flex justify-content-center align-items-center pb-2 mb-4">
                        <div class="ui-w-60">
                            <div class="w-100 position-relative">
                                <img src="https://jusmarktech.in/Culture/img/core-img/ashish%20ji.png" alt=" Logo" class="" style="max-width: 160%;margin-left: -18px;">
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <!-- [ Logo ] End --

                    <h5 class="text-center text-muted font-weight-normal mb-4">Create an Account</h5>

                    <!-- Form -->
                     <?php echo $this->session->flashdata('otp'); ?>
                    <form action="<?php echo base_url();?>home/otp_login" method="post">
       
<div class="d-flex justify-content-center align-items-center container">
        <div class="card py-5 px-3">
            <h5 class="m-0">Please Enter the one time password
 </h5><span class="mobile-text">to verify your account <b class="text-danger">A code has been sent to *******9897 </b></span>
 <span>OTP Code:1234</span>
            <div class="d-flex flex-row mt-5">
                <input type="hidden" name="nob" value="<?php echo $mob; ?>">
                  <input id="otp-first" class="inputs" type="number"  name="otp1" min="0" max="9" step="1" aria-label="first digit" />
  <input id="otp-second" type="number" class="inputs" min="0" max="9"  name="otp2" step="1" aria-label="second digit" />
  <input id="otp-third" type="number" class="inputs" min="0" max="9" step="1"  name="otp3"  aria-label="third digit" />
  <input id="otp-fourth" type="number" class="inputs" min="0" max="9" step="1" name="otp4" aria-label="fourth digit" />
                <!--<input type="text" name="otp1" maxlength="1" class="form-control inputs" autofocus="" maxlength="1" style="border: solid gray 1px;">
                <input type="text" maxlength="1" name="otp2" class="form-control inputs" maxlength="1" style="border: solid gray 1px;">
                <input type="text" maxlength="1" name="otp3" class="form-control inputs" style="border: solid gray 1px;">
                <input type="text" maxlength="1" name="otp4"  class="form-control inputs" style="border: solid gray 1px;">-->
            </div>
          
        </div>
    </div>
                        <input type="submit" name="submit" class="btn btn-primary btn-block mt-4" value="Validate">
                      <!---  <div class="text-light small mt-4">
                            By clicking "Sign Up", you agree to our
                            <a href="javascript:void(0)">terms of service and privacy policy</a>. We’ll occasionally send you account related emails.
                        </div>-->
                    </form>
                    <!-- [ Form ] End -->

                </div>
              <!--  <div class="card-footer py-3 px-4 px-sm-5">
                    <div class="text-center text-muted">
                        Already have an account?
                        <a href="pages_authentication_login-v2.html">Sign In</a>
                    </div>
                </div>-->
            </div>

        </div>
    </div>

<script>

function myFunction() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
<script>
console.clear();
let inputs = document.querySelectorAll("input");
let values = Array(4);
let clipData;
inputs[0].focus();

inputs.forEach((tag, index) => {
  tag.addEventListener('keyup', (event) => {
    if(event.code === "Backspace" && hasNoValue(index)) {
      if(index > 0) inputs[index - 1].focus();
    }
    
    //else if any input move focus to next or out
    else if (tag.value !== "") {
      (index < inputs.length - 1) ? inputs[index + 1].focus() : tag.blur();
    }
    
    //add val to array to track prev vals
    values[index] = event.target.value;
  });
  
  tag.addEventListener('input', () => {
    //replace digit if already exists
    if(tag.value > 10) {
      tag.value = tag.value % 10;
    }
  });
  
  tag.addEventListener('paste', (event) => {
    event.preventDefault();
    clipData = event.clipboardData.getData("text/plain").split('');
    filldata(index);
  })
})

function filldata(index) {
  for(let i = index; i < inputs.length; i++) {
    inputs[i].value = clipData.shift();
  }
}

function hasNoValue(index) {
  if(values[index] || values[index] === 0) 
    return false;
  
  return true;
}
            $(document).ready(function(){

                if (localStorage.chkbx && localStorage.chkbx != '') {
                    $('#remember_me').attr('checked', 'checked');
                    $('#email').val(localStorage.email);
                    $('#password').val(localStorage.pass);
                } else {
                    $('#remember_me').removeAttr('checked');
                    $('#email').val('');
                    $('#password').val('');
                }

                $('#remember_me').click(function() {

                    if ($('#remember_me').is(':checked')) {
                        // save username and password
                        localStorage.email = $('#email').val();
                        localStorage.pass = $('#password').val();
                        localStorage.chkbx = $('#remember_me').val();
                    } else {
                        localStorage.email = '';
                        localStorage.pass = '';
                        localStorage.chkbx = '';
                    }
                });
            });

        </script>


<script src="<?php echo base_url();?>assets/js/pace.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery-3.3.1.min.js"></script>
<script src="<?php echo base_url();?>assets/libs/popper/popper.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
<script src="<?php echo base_url();?>assets/js/sidenav.js"></script>
<script src="<?php echo base_url();?>assets/js/layout-helpers.js"></script>
<script src="<?php echo base_url();?>assets/js/material-ripple.js"></script>

<script src="<?php echo base_url();?>assets/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

<!-- <script src="<?php echo base_url();?>assets/js/demo.js"> -->
</script><script src="<?php echo base_url();?>assets/js/analytics.js"></script>
</body>


</html>
