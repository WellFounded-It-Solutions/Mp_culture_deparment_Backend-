<?php
$session = $this->session->userdata('admin_session');
if(!$session['admin_id']){
redirect(base_url()); 
}  
?>
<!DOCTYPE html>
<html lang="en" class="default-style layout-fixed layout-navbar-fixed">
<head>
<title>ACCOUNTERS BACKEND</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
<meta name="description" content="" />
<meta name="keywords" content="">
<meta name="author" content="" />
<link rel="icon" type="image/x-icon" href="<?php echo base_url();?>assets/img/logo1.png">

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
<link rel="stylesheet" href="<?php echo base_url();?>assets/libs/flot/flot.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/libs/morris/morris.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/libs/datatables/datatables.css">
</head>
<body>

<div class="page-loader">
<div class="bg-primary"></div>
</div>


<div class="layout-wrapper layout-2">
<div class="layout-inner">

<!-- Sidebar Start -->

<?php include("sidebar_comp.php");?>

<!-- Sidebar End -->


<div class="layout-container">
<!-- Header Section Start -->
<nav class="layout-navbar navbar navbar-expand-lg align-items-lg-center bg-dark container-p-x" id="layout-navbar">

<a href="index.html" class="navbar-brand app-brand demo d-lg-none py-0 mr-4">
<span class="app-brand-logo demo">
<img src="<?php echo base_url();?>assets/img/mainlogo.png" alt="Brand Logo" class="img-responsive" width="50px">
</span>
<span class="app-brand-text demo font-weight-normal ml-2">JUSMARK</span>
</a>

<div class="layout-sidenav-toggle navbar-nav d-lg-none align-items-lg-center mr-auto">
<a class="nav-item nav-link px-0 mr-lg-4" href="javascript:">
<i class="ion ion-md-menu text-large align-middle"></i>
</a>
</div>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#layout-navbar-collapse">
<span class="navbar-toggler-icon"></span>
</button>
<div class="navbar-collapse collapse" id="layout-navbar-collapse">

<hr class="d-lg-none w-100 my-2">
<div class="navbar-nav align-items-lg-center">

<label class="nav-item navbar-text navbar-search-box p-0 active">
<i class="feather icon-search navbar-icon align-middle"></i>
<span class="navbar-search-input pl-2">
<input type="text" class="form-control navbar-text mx-2" placeholder="Search...">
</span>
</label>
</div>
<div class="navbar-nav align-items-lg-center ml-auto">
<div class="demo-navbar-notifications nav-item dropdown mr-lg-3">
    <!-- Notifications Hide -->
<!-- <a class="nav-link dropdown-toggle hide-arrow" href="#" data-toggle="dropdown">
<i class="feather icon-bell navbar-icon align-middle"></i>
<span class="badge badge-danger badge-dot indicator"></span>
<span class="d-lg-none align-middle">&nbsp; Notifications</span>
</a> -->
<div class="dropdown-menu dropdown-menu-right">
<!-- <div class="bg-primary text-center text-white font-weight-bold p-3">
 4 New Notifications
</div> -->
<div class="list-group list-group-flush">
<!-- <a href="javascript:" class="list-group-item list-group-item-action media d-flex align-items-center">
<div class="ui-icon ui-icon-sm feather icon-home bg-secondary border-0 text-white"></div>
<div class="media-body line-height-condenced ml-3">
<div class="text-dark">Login from 192.168.1.1</div>
<div class="text-light small mt-1">
Aliquam ex eros, imperdiet vulputate hendrerit et.
</div>
<div class="text-light small mt-1">12h ago</div>
</div>
</a> -->
<!-- <a href="javascript:" class="list-group-item list-group-item-action media d-flex align-items-center">
<div class="ui-icon ui-icon-sm feather icon-user-plus bg-primary border-0 text-white"></div>
<div class="media-body line-height-condenced ml-3">
<div class="text-dark">You have
<strong>4</strong> new followers</div>
<div class="text-light small mt-1">
Phasellus nunc nisl, posuere cursus pretium nec, dictum vehicula tellus.
</div>
</div>
</a> -->
<!-- <a href="javascript:" class="list-group-item list-group-item-action media d-flex align-items-center">
<div class="ui-icon ui-icon-sm feather icon-power bg-danger border-0 text-white"></div>
<div class="media-body line-height-condenced ml-3">
<div class="text-dark">Server restarted</div>
<div class="text-light small mt-1">
19h ago
</div>
</div>
</a> -->
<!-- <a href="javascript:" class="list-group-item list-group-item-action media d-flex align-items-center">
<div class="ui-icon ui-icon-sm feather icon-alert-triangle bg-warning border-0 text-dark"></div>
<div class="media-body line-height-condenced ml-3">
<div class="text-dark">99% server load</div>
<div class="text-light small mt-1">
Etiam nec fringilla magna. Donec mi metus.
</div>
<div class="text-light small mt-1">
20h ago
</div>
</div>
</a> -->
</div>
<!-- <a href="javascript:" class="d-block text-center text-light small p-2 my-1">Show all notifications</a> -->
</div>
</div>
<div class="demo-navbar-messages nav-item dropdown mr-lg-3">
    <!-- Messages Hide -->
<!-- <a class="nav-link dropdown-toggle hide-arrow" href="#" data-toggle="dropdown">
<i class="feather icon-mail navbar-icon align-middle"></i>
<span class="badge badge-success badge-dot indicator"></span>
<span class="d-lg-none align-middle">&nbsp; Messages</span>
</a> -->
<div class="dropdown-menu dropdown-menu-right">
<!-- <div class="bg-primary text-center text-white font-weight-bold p-3">
4 New Messages
</div> -->
<div class="list-group list-group-flush">
<!-- <a href="javascript:" class="list-group-item list-group-item-action media d-flex align-items-center">
<img src="assets/img/avatars/6-small.png" class="d-block ui-w-40 rounded-circle" alt>
<div class="media-body ml-3">
<div class="text-dark line-height-condenced">Lorem ipsum dolor consectetuer elit.</div>
<div class="text-light small mt-1">
Josephin Doe &nbsp;·&nbsp; 58m ago
</div>
</div>
</a> -->
<!-- <a href="javascript:" class="list-group-item list-group-item-action media d-flex align-items-center">
<img src="assets/img/avatars/4-small.png" class="d-block ui-w-40 rounded-circle" alt>
<div class="media-body ml-3">
<div class="text-dark line-height-condenced">Lorem ipsum dolor sit amet, consectetuer.</div>
<div class="text-light small mt-1">
Lary Doe &nbsp;·&nbsp; 1h ago
</div>
</div>
</a> -->
<!-- <a href="javascript:" class="list-group-item list-group-item-action media d-flex align-items-center">
<img src="assets/img/avatars/5-small.png" class="d-block ui-w-40 rounded-circle" alt>
<div class="media-body ml-3">
<div class="text-dark line-height-condenced">Lorem ipsum dolor sit amet elit.</div>
<div class="text-light small mt-1">
Alice &nbsp;·&nbsp; 2h ago
</div>
</div>
</a> -->
<!-- <a href="javascript:" class="list-group-item list-group-item-action media d-flex align-items-center">
<img src="assets/img/avatars/11-small.png" class="d-block ui-w-40 rounded-circle" alt>
<div class="media-body ml-3">
<div class="text-dark line-height-condenced">Lorem ipsum dolor sit amet consectetuer amet elit dolor sit.</div>
<div class="text-light small mt-1">
Suzen &nbsp;·&nbsp; 5h ago
</div>
</div>
 </a> -->
</div>
<!-- <a href="javascript:" class="d-block text-center text-light small p-2 my-1">Show all messages</a> -->
</div>
</div>
<!-- Divider Hide -->
<!-- <div class="nav-item d-none d-lg-block text-big font-weight-light line-height-1 opacity-25 mr-3 ml-1">|</div> -->
<div class="demo-navbar-user nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
<span class="d-inline-flex flex-lg-row-reverse align-items-center align-middle">
<img src="<?php echo base_url();?>/assets/img/user/<?php echo $session['admin_img'];?>" alt class="d-block ui-w-30 rounded-circle">
<span class="px-1 mr-lg-2 ml-2 ml-lg-0"><?php //echo $session['admin_name'];?>Admin</span>
</span>
</a>
<div class="dropdown-menu dropdown-menu-right">
<a href="<?php echo base_url();?>admin" class="dropdown-item">
<i class="feather icon-user text-muted"></i> &nbsp; My profile</a>
<!-- <a href="javascript:" class="dropdown-item">
<i class="feather icon-mail text-muted"></i> &nbsp; Messages</a>
<a href="javascript:" class="dropdown-item">
<i class="feather icon-settings text-muted"></i> &nbsp; Account settings</a> -->
<div class="dropdown-divider"></div>

<a href="<?php echo base_url();?>logout" class="dropdown-item">
<i class="feather icon-power text-danger"></i> &nbsp; Log Out</a>
</div>
</div>
</div>
</div>
</nav>
<!-- Header Section End -->





