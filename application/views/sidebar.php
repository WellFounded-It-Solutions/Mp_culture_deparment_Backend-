<!-- Sidebar Start -->
<div id="layout-sidenav" class="layout-sidenav sidenav sidenav-vertical bg-white logo-dark">
   <div class="app-brand demo">
      <span class="app-brand-logo demo">
         <!--<img src="<?php echo base_url();?>assets/img/logo/<?php echo $admin->logo;?>" alt="Brand Logo" class="img-responsive" width="50px">-->
         <center><img src="https://jusmarktech.in/Culture/img/core-img/ashish%20ji.png" alt="Brand Logo" class="img-responsive" width="80px" style="margin-left: 32px"></center>
      </span>
      <a href="" class="app-brand-text demo sidenav-text font-weight-normal ml-2"></a>
      <a href="javascript:" class="layout-sidenav-toggle sidenav-link text-large ml-auto">
      <i class="ion ion-md-menu align-middle"></i>
      </a>
   </div>
   <div class="sidenav-divider mt-0"></div>
   <div class="side-bar-name text-center">
      <h3>Super Admin Dashboard</h3>
   </div>
   <ul class="sidenav-inner py-1">
      <?php if($session['roles']=='Admin') {?>
      <li class="sidenav-item <?php if($this->uri->segment(1)=='dashboard') { echo 'open active';}?>">
         <a href="<?php echo base_url();?>home/dashboard" class="sidenav-link">
            <i class="sidenav-icon feather ion-md-home text-info"></i>
            <div>Dashboard</div>
         </a>
      </li>
    


      <li class="sidenav-item <?php if($this->uri->segment(1)=='dashboard') { echo 'open active';}?>">
         <a href="<?php echo base_url();?>home/programs" class="sidenav-link">
        <i class="sidenav-icon feather icon-grid text-info"></i>
            <div>Programs</div>
         </a>
      </li>
      <li class="sidenav-item <?php if($this->uri->segment(1)=='dashboard') { echo 'open active';}?>">
         <a href="<?php echo base_url();?>home/datalist" class="sidenav-link">
         <i class="sidenav-icon feather icon-user text-info"></i>
            <div>Artists</div>
         </a>
      </li>
      <li class="sidenav-item <?php if($this->uri->segment(1)=='dashboard') { echo 'open active';}?>">
         <a href="<?php echo base_url();?>home/audience" class="sidenav-link">
         <i class="sidenav-icon feather icon-users text-info"></i>
            <div>Users ( Audience)</div>
         </a>
      </li>
      <li class="sidenav-item <?php if($this->uri->segment(1)=='dashboard') { echo 'open active';}?>">
         <a href="<?php echo base_url();?>home/academies" class="sidenav-link">
         <i class="sidenav-icon feather icon-book text-info"></i>
            <div>Academies</div>
         </a>
      </li>
      <li class="sidenav-item <?php if($this->uri->segment(1)=='dashboard') { echo 'open active';}?>">
         <a href="<?php echo base_url();?>home/venue" class="sidenav-link">
         <i class="sidenav-icon feather icon-map-pin text-info"></i>
            <div>Venue</div>
         </a>
      </li>
      <li class="sidenav-item <?php if($this->uri->segment(1)=='dashboard') { echo 'open active';}?>">
         <a href="<?php echo base_url();?>home/smsmodule" class="sidenav-link">
         <i class="sidenav-icon feather icon-message-circle text-info"></i>
            <div>SMS</div>
         </a>
      </li>
      <li class="sidenav-item <?php if($this->uri->segment(1)=='dashboard') { echo 'open active';}?>">
         <a href="<?php echo base_url();?>home/dashboard" class="sidenav-link">
         <i class="sidenav-icon feather icon-mail text-info"></i>
            <div>Emails </div>
         </a>
      </li> 




      <hr>
      <li class="sidenav-item <?php if($this->uri->segment(1)=='dashboard') { echo 'open active';}?>">
         <a href="<?php echo base_url();?>home/academie_dashboard" class="sidenav-link">
            <i class="sidenav-icon feather ion-md-home text-info"></i>
            <div>Academie Dashboard</div>
         </a>
      </li>

      <li class="sidenav-item <?php if($this->uri->segment(1)=='dashboard') { echo 'open active';}?>">
         <a href="<?php echo base_url();?>home/literature" class="sidenav-link">
        <i class="sidenav-icon feather icon-book text-info"></i>
            <div>Literature</div>
         </a>
      </li>
      <li class="sidenav-item <?php if($this->uri->segment(1)=='dashboard') { echo 'open active';}?>">
         <a href="<?php echo base_url();?>home/images" class="sidenav-link">
        <i class="sidenav-icon feather icon-image text-info"></i>
            <div>Images</div>
         </a>
      </li>
      <li class="sidenav-item <?php if($this->uri->segment(1)=='dashboard') { echo 'open active';}?>">
         <a href="<?php echo base_url();?>home/videos" class="sidenav-link">
        <i class="sidenav-icon feather icon-book text-info"></i>
            <div>Videos</div>
         </a>
      </li>
      <li class="sidenav-item <?php if($this->uri->segment(1)=='dashboard') { echo 'open active';}?>">
         <a href="<?php echo base_url();?>home/audios" class="sidenav-link">
        <i class="sidenav-icon feather icon-headphones text-info"></i>
            <div>Audios</div>
         </a>
      </li>

      <?php }else if($session['roles']=='User') {?>
      <li class="sidenav-item <?php if($this->uri->segment(1)=='datalist') { echo 'open active';}?>">
         <a href="<?php echo base_url();?>home/datalist" class="sidenav-link">
            <i class="sidenav-icon fas fa-tty text-success"></i>
            <div>Artist Profile</div>
         </a>
      </li>
      <?php } ?>
   </ul>
   </li>  
   </ul>
</div>
<!-- Sidebar End -->