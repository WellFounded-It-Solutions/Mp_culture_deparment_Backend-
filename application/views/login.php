<!DOCTYPE html>
<html lang="en" class="default-style layout-fixed layout-navbar-fixed">
<head>
<title>Admin</title>
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
<body>
<div class="page-loader">
<div class="bg-primary"></div>
</div>
<style>
    .img-fluid {
    max-width: 160% !important;
    height: auto;
    margin-left: -18px;
}
</style>

<div class="authentication-wrapper authentication-2 ui-bg-cover ui-bg-overlay-container px-4" style="background-image: url('');">
<div class="ui-bg-overlay bg-dark opacity-25"></div>
<div class="authentication-inner py-5">
<div class="card">
<div class="p-4 p-sm-5">

<div class="d-flex justify-content-center align-items-center pb-2 mb-4">
<div class="ui-w-60">
<div class="w-100 position-relative">
<img src="https://jusmarktech.in/Culture/img/core-img/ashish%20ji.png" alt="Brand Logo" class="img-fluid" tyle="max-width: 160% !important;margin-left: -18px;">
<div class="clearfix"></div>
</div>
</div>
</div>

<h5 class="text-center text-muted font-weight-normal mb-4">Login to Your Account</h5>

                  
					
<form action="<?php echo base_url();?>home/login" id="loginForm" method="post">
<div class="form-group">
<label class="form-label">Email</label>
<input type="email" name="email" id="email" class="form-control">
<div class="clearfix"></div>
</div>
<div class="form-group">
<label class="form-label d-flex justify-content-between align-items-end">
<span>Password</span>
<!-- <a href="" class="d-block small">Forgot password?</a> --> <!-- Akhtar Hide Code -->
</label>
<input type="password" name="password" id="password" class="form-control">
<div class="clearfix"></div>
</div>
<div class="d-flex justify-content-between align-items-center">
<small>
<label class="form-check form-check-inline">
<input class="form-check-input" type="checkbox" onclick="myFunction()">
<span class="form-check-label">Show Password</span>
</label>
</small>
</div>
<div class="d-flex justify-content-between align-items-center m-0">
<label class="custom-control custom-checkbox m-0">
<input type="checkbox" class="custom-control-input" id="remember_me" value="remember-me">
<span class="custom-control-label">Remember me</span>
</label>
<button type="submit" class="btn btn-primary">Sign In</button>
</div>
</form>

</div>
<div class="card-footer py-3 px-4 px-sm-5">
<div class="text-center text-muted">
Don't have an account yet?
<a href="<?php echo base_url();?>home/login_detail">Sign Up</a>
</div>
</div> 
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
