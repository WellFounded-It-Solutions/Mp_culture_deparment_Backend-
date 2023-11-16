
<!-- Sidebar Start -->
<div id="layout-sidenav" class="layout-sidenav sidenav sidenav-vertical bg-white logo-dark">

<div class="app-brand demo">
<span class="app-brand-logo demo">
<img src="<?php echo base_url();?>assets/img/logo/<?php echo $admin->logo;?>" alt="Brand Logo" class="img-responsive" width="50px">
</span>
<a href="index.html" class="app-brand-text demo sidenav-text font-weight-normal ml-2">NEELAM KIRANA</a>
<a href="javascript:" class="layout-sidenav-toggle sidenav-link text-large ml-auto">
<i class="ion ion-md-menu align-middle"></i>
</a>
</div>
<div class="sidenav-divider mt-0"></div>

<ul class="sidenav-inner py-1">

<li class="sidenav-item <?php if($this->uri->segment(1)=='empdashboard') { echo 'open active';}?>">
<a href="<?php echo base_url();?>empdashboard" class="sidenav-link">
<i class="sidenav-icon feather icon-home"></i>
<div>Dashboard</div>
<div class="pl-1 ml-auto">
                     <div class="badge badge-danger">Employee</div>
                  </div>
</a>
</li>


<li class="sidenav-divider mb-1"></li>
			<li class="sidenav-item  ">
               <a href="" class="sidenav-link">
                  <i class="sidenav-icon fas fa-user-alt text-danger"></i>
                  <div>My Profile</div>
               </a>
            </li>

                   <li class="sidenav-item">
               <a href="javascript:" class="sidenav-link">
                  <i class="sidenav-icon fas fa-dolly-flatbed text-warning"></i>
                  <div>Orders</div>
                </a>
            </li>
                 <li class="sidenav-item">
               <a href="javascript:" class="sidenav-link">
                  <i class="sidenav-icon feather icon-shopping-cart text-danger"></i>
                  <div>Shops</div>
               </a>
            </li>
			
            <li class="sidenav-item">
               <a href="javascript:" class="sidenav-link">
                  <i class="sidenav-icon ion ion-ios-gift text-success"></i>
                  <div>Our Offers</div>
                </a>
            </li>
			<li class="sidenav-item  ">
               <a href="enquiries.php" class="sidenav-link">
                  <i class="sidenav-icon fas fa-bell text-primary"></i>
                  <div>Enquiries</div>
               </a>
            </li>
			<li class="sidenav-item  ">
               <a href="review.php" class="sidenav-link">
                  <i class="sidenav-icon fas fa-comment-dots text-danger"></i>
                  <div>Reviews</div>
               </a>
            </li>
			
			<li class="sidenav-item  ">
               <a href="../contact.php" class="sidenav-link">
                  <i class="sidenav-icon fas fa-handshake text-warning"></i>
                  <div>Help & Support</div>
               </a>
            </li>
			
			<li class="sidenav-item  ">
               <a href="" class="sidenav-link">
                  <i class="sidenav-icon ion ion-ios-paper text-success"></i>
                  <div>Privacy Policy</div>
               </a>
            </li>
			<li class="sidenav-item">
               <a href="" class="sidenav-link">
                  <i class="sidenav-icon ion ion-md-list-box text-danger"></i>
                  <div>Terms & Condition </div>
               </a>
            </li>















</ul>
</div>
<!-- Sidebar End -->




