
<!-- Sidebar Start -->
<div id="layout-sidenav" class="layout-sidenav sidenav sidenav-vertical bg-white logo-dark">

<div class="app-brand demo">
<span class="app-brand-logo demo">
<img src="<?php echo base_url();?>assets/img/mainlogo.png" alt="Brand Logo" class="img-responsive" width="50px">
</span>
<a href="index.html" class="app-brand-text demo sidenav-text font-weight-normal ml-2">JUSMARK</a>
<a href="javascript:" class="layout-sidenav-toggle sidenav-link text-large ml-auto">
<i class="ion ion-md-menu align-middle"></i>
</a>
</div>
<div class="sidenav-divider mt-0"></div>

<ul class="sidenav-inner py-1">

<li class="sidenav-item <?php if($this->uri->segment(1)=='dashboard') { echo 'open active';}?>">
<a href="<?php echo base_url();?>dashboard" class="sidenav-link">
<i class="sidenav-icon feather icon-home"></i>
<div>Dashboard</div>
</a>
</li>

<!-- <li class="sidenav-divider mb-1"></li>
<li class="sidenav-header small font-weight-semibold">Masters Section</li> -->


<li class="sidenav-header small font-weight-semibold">Categories Section</li>
<li class="sidenav-item <?php if($this->uri->segment(1)=='category') { echo 'open active';}?>">
<a href="<?php echo base_url();?>category" class="sidenav-link">
<i class=""></i>
<div>Categories</div>
</a>
</li>

<li class="sidenav-divider mb-1"></li>
<li class="sidenav-header small font-weight-semibold">Sub-Categories Section</li>
<li class="sidenav-item <?php if($this->uri->segment(1)=='subcategory') { echo 'open active';}?>">
<a href="<?php echo base_url();?>subcategory" class="sidenav-link">
<i class=""></i>
<div>Sub-Categories</div>
</a>
</li>

<li class="sidenav-divider mb-1"></li>
<li class="sidenav-header small font-weight-semibold">Units Section</li>
<li class="sidenav-item <?php if($this->uri->segment(1)=='unit') { echo 'open active';}?>">
<a href="<?php echo base_url();?>unit" class="sidenav-link">
<i class=""></i>
<div>Units</div>
</a>
</li>

<li class="sidenav-divider mb-1"></li>
<li class="sidenav-header small font-weight-semibold">Tax Section</li>
<li class="sidenav-item <?php if($this->uri->segment(1)=='tax') { echo 'open active';}?>">
<a href="<?php echo base_url();?>tax" class="sidenav-link">
<i class=""></i>
<div>Tax</div>
</a>
</li>


<li class="sidenav-divider mb-1"></li>
<li class="sidenav-header small font-weight-semibold">Products Section</li>
<li class="sidenav-item <?php if($this->uri->segment(1)=='products') { echo 'open active';} elseif($this->uri->segment(1)=='addproduct') { echo 'open active';}?>">
<a href="javascript:" class="sidenav-link sidenav-toggle">
<i class=""></i>
<div>Products</div>
</a>
<ul class="sidenav-menu">
<li class="sidenav-item <?php if($this->uri->segment(1)=='products') { echo 'active';}?>">
<a href="<?php echo base_url();?>products" class="sidenav-link"><div>All Products</div>
</a>
</li>
<li class="sidenav-item <?php if($this->uri->segment(1)=='addproduct') { echo 'active';}?>">
<a href="<?php echo base_url();?>addproduct" class="sidenav-link"><div>Add Product</div>
</a>
</li>
</ul>
</li>




<li class="sidenav-divider mb-1"></li>
<li class="sidenav-header small font-weight-semibold">Manufacturers Section</li>
<li class="sidenav-item <?php if($this->uri->segment(1)=='manufacturers') { echo 'open active';}?>">
<a href="<?php echo base_url();?>manufacturers" class="sidenav-link">
<i class=""></i>
<div>Manufacturers</div>
</a>
</li>


<li class="sidenav-divider mb-1"></li>
<li class="sidenav-header small font-weight-semibold">Vendors Section</li>
<li class="sidenav-item <?php if($this->uri->segment(1)=='vendors') { echo 'open active';} elseif($this->uri->segment(1)=='addvendor') { echo 'open active';}?>">
<a href="javascript:" class="sidenav-link sidenav-toggle">
<i class=""></i>
<div>Vendors</div>
</a>
<ul class="sidenav-menu">
<li class="sidenav-item <?php if($this->uri->segment(1)=='vendors') { echo 'active';}?>">
<a href="<?php echo base_url();?>vendors" class="sidenav-link"><div>All Vendors</div>
</a>
</li>
<li class="sidenav-item <?php if($this->uri->segment(1)=='addvendor') { echo 'active';}?>">
<a href="<?php echo base_url();?>addvendor" class="sidenav-link"><div>Add Vendor</div>
</a>
</li>
</ul>
</li>










</ul>
</div>
<!-- Sidebar End -->




