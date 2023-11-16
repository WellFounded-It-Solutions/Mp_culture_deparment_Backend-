
<!-- Sidebar Start -->
<div id="layout-sidenav" class="layout-sidenav sidenav sidenav-vertical bg-white logo-dark">

<div class="app-brand demo">
<span class="app-brand-logo demo">
<!--<img src="<?php echo base_url();?>assets/img/logo/<?php echo $admin->logo;?>" alt="Brand Logo" class="img-responsive" width="50px">-->
<img src="<?php echo base_url();?>assets/img/logo1.png" alt="Brand Logo" class="img-responsive" width="50px">
</span>
<a href="index.html" class="app-brand-text demo sidenav-text font-weight-normal ml-2">ACCOUNTERS</a>
<a href="javascript:" class="layout-sidenav-toggle sidenav-link text-large ml-auto">
<i class="ion ion-md-menu align-middle"></i>
</a>
</div>
<div class="sidenav-divider mt-0"></div>

<ul class="sidenav-inner py-1">
<?php if(empty($_SESSION['year'])){?>
<li class="sidenav-item <?php if($this->uri->segment(1)=='dashboard') { echo 'open active';}?>">
<a href="<?php echo base_url();?>home/dashboard_comp?id=<?php echo $_SESSION['company'];?>" class="sidenav-link">
<i class="sidenav-icon feather ion-md-home text-info"></i>
<div>Dashboard</div>
<!--<div class="pl-1 ml-auto">-->
<!--                     <div class="badge badge-danger">Merchant</div>-->
<!--                  </div>-->
</a>
</li>
<?php }else{?>
	<li class="sidenav-item <?php if($this->uri->segment(1)=='dashboard') { echo 'open active';}?>">
<a href="<?php echo base_url();?>home/dashboard_year?id=<?php echo $_SESSION['year'];?>" class="sidenav-link">
<i class="sidenav-icon feather ion-md-home text-info"></i>
<div>Dashboard</div>
<!--<div class="pl-1 ml-auto">-->
<!--                     <div class="badge badge-danger">Merchant</div>-->
<!--                  </div>-->
</a>
</li>
<?php }?>

<li class="sidenav-item <?php if($this->uri->segment(1)=='master') { echo 'open active';} elseif($this->uri->segment(1)=='users') { echo 'open active';} elseif($this->uri->segment(1)=='sector') { echo 'open active';} elseif($this->uri->segment(1)=='category') { echo 'open active';} elseif($this->uri->segment(1)=='subcategory') { echo 'open active';} elseif($this->uri->segment(1)=='subcategorytype') { echo 'open active';} elseif($this->uri->segment(1)=='manufacturers') { echo 'open active';} elseif($this->uri->segment(1)=='department') { echo 'open active';} elseif($this->uri->segment(1)=='designation') { echo 'open active';}?>">
<a href="" class="sidenav-link sidenav-toggle">
<i class="sidenav-icon feather icon-globe text-primary"></i>
<div>Universal Masters</div>
</a>
<ul class="sidenav-menu">
<!-- <li class="sidenav-item <?php if($this->uri->segment(1)=='master') { echo 'active';}?>">
<a href="<?php echo base_url();?>home/master" class="sidenav-link"><div>Masters Dashboard</div>
</a>
</li> -->
<li class="sidenav-item <?php if($this->uri->segment(1)=='geographics') { echo 'open active';} elseif($this->uri->segment(1)=='country') { echo 'open active';} elseif($this->uri->segment(1)=='state') { echo 'open active';} elseif($this->uri->segment(1)=='city') { echo 'open active';} elseif($this->uri->segment(1)=='area') { echo 'open active';}?>">
<a href="" class="sidenav-link sidenav-toggle">
<i class="sidenav-icon fas fa-compass text-info"></i>
<div>Geographics</div>
</a>
<ul class="sidenav-menu">

<li class="sidenav-item <?php if($this->uri->segment(1)=='state') { echo 'active';}?>">
<a href="<?php echo base_url();?>home/state" class="sidenav-link"><div>State</div>
</a>
</li>
<li class="sidenav-item <?php if($this->uri->segment(1)=='city') { echo 'active';}?>">
<a href="<?php echo base_url();?>home/city" class="sidenav-link"><div>City</div>
</a>
</li>
<li class="sidenav-item <?php if($this->uri->segment(1)=='area') { echo 'active';}?>">
<a href="<?php echo base_url();?>home/area" class="sidenav-link"><div>Area</div>
</a>
</li>
<li class="sidenav-item <?php if($this->uri->segment(1)=='pincode') { echo 'active';}?>">
<a href="<?php echo base_url();?>home/pincode" class="sidenav-link"><div>Pincode</div>
</a>
</li>

</ul>
</li>





<li class="sidenav-item <?php if($this->uri->segment(1)=='geographics') { echo 'open active';} elseif($this->uri->segment(1)=='country') { echo 'open active';} elseif($this->uri->segment(1)=='state') { echo 'open active';} elseif($this->uri->segment(1)=='city') { echo 'open active';} elseif($this->uri->segment(1)=='area') { echo 'open active';}?>">
<a href="" class="sidenav-link sidenav-toggle">
<i class="sidenav-icon fas fa-compass text-info"></i>
<div>Product Managment</div>
</a>
<ul class="sidenav-menu">
<li class="sidenav-item <?php if($this->uri->segment(1)=='category') { echo 'open active';}?>">
<a href="<?php echo base_url();?>home/category" class="sidenav-link">
<i class=""></i>
<div>Categories</div>
</a>
</li>

<li class="sidenav-item <?php if($this->uri->segment(1)=='subcategory') { echo 'open active';}?>">
<a href="<?php echo base_url();?>home/subcategory" class="sidenav-link">
<i class=""></i>
<div>Sub-Categories</div>
</a>
</li>

<!-- <li class="sidenav-item <?php if($this->uri->segment(1)=='subcategorytype') { echo 'open active';}?>">
<a href="<?php echo base_url();?>subcategorytype" class="sidenav-link">
<i class=""></i>
<div>Sub-Categories Types</div>
</a>
</li> -->


<li class="sidenav-item <?php if($this->uri->segment(1)=='subcategorytype') { echo 'open active';}?>">
<a href="<?php echo base_url();?>home/subcategorytype" class="sidenav-link">
<i class=""></i>
<div>Sub-Categories Types</div>
</a>
</li> 


<li class="sidenav-item <?php if($this->uri->segment(1)=='products') { echo 'open active';}?>">
<a href="<?php echo base_url();?>home/products" class="sidenav-link">
<i class=""></i>
<div>Products</div>
</a>
</li>
<li class="sidenav-item <?php if($this->uri->segment(1)=='tax') { echo 'open active';}?>">
<a href="<?php echo base_url();?>home/tax" class="sidenav-link">
<i class=""></i>
<div>Product Varient</div>
</a>
</li>


</ul>
</li>
<li class="sidenav-item <?php if($this->uri->segment(1)=='company') { echo 'open active';}?>">
<a href="<?php echo base_url();?>home/financial" class="sidenav-link">
<i class=""></i>
<div>Financial year</div>
</a>
</li>
<li class="sidenav-item <?php if($this->uri->segment(1)=='manufacturers') { echo 'open active';}?>">
<a href="<?php echo base_url();?>home/manufacturers" class="sidenav-link">
<i class=""></i>
<div>Manufacturers/Brand</div>
</a>
</li>

 





</a>
</li>
</ul>
</li>
<li class="sidenav-item <?php if($this->uri->segment(1)=='customers') { echo 'open active';} elseif($this->uri->segment(1)=='customerrole') { echo 'open active';} elseif($this->uri->segment(1)=='assigncustomerrole') { echo 'open active';}?>">
<a href="" class="sidenav-link sidenav-toggle">
<i class="sidenav-icon fas fa-user-alt text-success"></i>
<div>Vendors Management</div>
</a>
<ul class="sidenav-menu">
<li class="sidenav-item <?php if($this->uri->segment(1)=='vendors') { echo 'active';}?>">
<a href="<?php echo base_url();?>home/vendors" class="sidenav-link"><div> Vendors </div>
</a>
</li>


</ul>
</li>  
<li class="sidenav-item <?php if($this->uri->segment(1)=='purchaseorders') { echo 'open active';} ?>">
<a href="" class="sidenav-link sidenav-toggle">
<i class="sidenav-icon ion ion-md-clipboard text-warning"></i>
<div>Purchase </div>
</a>
<ul class="sidenav-menu">
<li class="sidenav-item <?php if($this->uri->segment(1)=='purchaseorders') { echo 'active';}?>">
<a href="<?php echo base_url();?>home/purchaseorders" class="sidenav-link"><div>Purchase Orders</div>
</a>
</li>

</ul>
</li>
<!-- <li class="sidenav-item">
<a href="" class="sidenav-link sidenav-toggle">
<i class="sidenav-icon ion ion-ios-paper text-success"></i>
<div>Stock/Inventory</div>
</a>
<ul class="sidenav-menu">
<li class="sidenav-item <?php if($this->uri->segment(1)=='inventory') { echo 'active';}?>">
<a href="<?php echo base_url();?>home/inventory" class="sidenav-link"><div>Add Godown</div>
</a>
</li>


</ul>
</li> -->
<li class="sidenav-item <?php if($this->uri->segment(1)=='godown') { echo 'open active';}?>">
         <a href="javascript:" class="sidenav-link sidenav-toggle">
                  <i class="sidenav-icon fas fa-boxes text-danger "></i>
                  <div>Stock/Inventory</div>
               </a>
               <ul class="sidenav-menu">
              <!-- <li class="sidenav-item <?php if($this->uri->segment(1)=='stock') { echo 'open active';}?>">
                  <a href="<?php echo base_url();?>stock" class="sidenav-link">
                  <i class=""></i>
                  <div>Stock</div>
                  </a>
               </li> -->
               <li class="sidenav-item <?php if($this->uri->segment(1)=='godown') { echo 'open active';}?>">
                  <a href="<?php echo base_url();?>home/godown" class="sidenav-link">
                  <i class=""></i>
                  <div>Godown</div>
                  </a>
               </li>
               </ul>
            </li>
            <li class="sidenav-item <?php if($this->uri->segment(1)=='salorders') { echo 'open active';} ?>">
<a href="" class="sidenav-link sidenav-toggle">
<i class="sidenav-icon fas fa-dolly-flatbed text-warning "></i>
<div>Sale/Billing </div>
</a>
<ul class="sidenav-menu">
<li class="sidenav-item <?php if($this->uri->segment(1)=='saleorders') { echo 'active';}?>">
<a href="<?php echo base_url();?>home/saleorders" class="sidenav-link"><div>Sale Orders</div>
</a>
</li>

</ul>
</li>
<li class="sidenav-item <?php if($this->uri->segment(1)=='deliverypartners') { echo 'active';} ?>">
<a href="<?php echo base_url();?>home/deliverypartners" class="sidenav-link">
<i class="sidenav-icon feather icon-shopping-cart text-danger"></i>
<div>Supply/Delivery</div>
</a>
</li>
<li class="sidenav-item <?php if($this->uri->segment(1)=='customers') { echo 'open active';} elseif($this->uri->segment(1)=='customerrole') { echo 'open active';} elseif($this->uri->segment(1)=='assigncustomerrole') { echo 'open active';}?>">
<a href="" class="sidenav-link sidenav-toggle">
<i class="sidenav-icon fas fa-user-alt text-success"></i>
<div>Customers</div>
</a>
<ul class="sidenav-menu">
<li class="sidenav-item <?php if($this->uri->segment(1)=='customers') { echo 'active';}?>">
<a href="<?php echo base_url();?>home/customers" class="sidenav-link"><div> Customers </div>
</a>
</li>
<!-- <li class="sidenav-item <?php if($this->uri->segment(1)=='customerrole') { echo 'active';}?>">
<a href="<?php echo base_url();?>home/customerrole" class="sidenav-link"><div> Customer Role </div>
</a>
</li> -->
</ul>
</li>  



<li class="sidenav-item <?php if($this->uri->segment(1)=='employees') { echo 'open active';} elseif($this->uri->segment(1)=='department') { echo 'open active';}  elseif($this->uri->segment(1)=='designation') { echo 'open active';} elseif($this->uri->segment(1)=='employeerole') { echo 'open active';} elseif($this->uri->segment(1)=='assignemployeerole') { echo 'open active';}  ?>">
<a href="" class="sidenav-link sidenav-toggle">
<i class="sidenav-icon fas fa-user-circle text-danger"></i>
<div>Employees</div>
</a>
<ul class="sidenav-menu">
<li class="sidenav-item <?php if($this->uri->segment(1)=='manubar') { echo 'active';}?>">
<a href="<?php echo base_url();?>home/manubar" class="sidenav-link"><div> Menu Bar </div>
</a>
</li>
<!--<li class="sidenav-item <?php if($this->uri->segment(1)=='serviceallocate') { echo 'active';}?>">
<a href="<?php echo base_url();?>serviceallocate" class="sidenav-link"><div> Service Allocated </div>
</a>
</li>-->
<li class="sidenav-item <?php if($this->uri->segment(1)=='employees') { echo 'active';}?>">
<a href="<?php echo base_url();?>home/employees" class="sidenav-link"><div> Employees </div>
</a>
</li>
<li class="sidenav-item <?php if($this->uri->segment(1)=='godown') { echo 'open active';}?>">
                  <a href="<?php echo base_url();?>home/adv_salary" class="sidenav-link">
                  <i class=""></i>
                  <div>Advance Salary</div>
                  </a>
               </li>
<li class="sidenav-item <?php if($this->uri->segment(1)=='employeerole') { echo 'active';}?>">
<a href="<?php echo base_url();?>home/employeerole" class="sidenav-link"><div> Employee Role </div>
</a>
</li>
<li class="sidenav-item <?php if($this->uri->segment(1)=='department') { echo 'active';}?>">
<a href="<?php echo base_url();?>home/department" class="sidenav-link"><div> Department </div>
</a>
</li>
<li class="sidenav-item <?php if($this->uri->segment(1)=='designation') { echo 'active';}?>">
<a href="<?php echo base_url();?>home/designation" class="sidenav-link"><div> Designation </div>
</a>
</li>


</ul>
</li>
<li class="sidenav-item <?php if($this->uri->segment(1)=='godown') { echo 'open active';}?>">
         <a href="javascript:" class="sidenav-link sidenav-toggle">
                  <i class="sidenav-icon fas fa-boxes text-danger "></i>
                  <div>Accounts</div>
               </a>
               <ul class="sidenav-menu">
              <!-- <li class="sidenav-item <?php if($this->uri->segment(1)=='stock') { echo 'open active';}?>">
                  <a href="<?php echo base_url();?>stock" class="sidenav-link">
                  <i class=""></i>
                  <div>Stock</div>
                  </a>
               </li> -->
               <li class="sidenav-item <?php if($this->uri->segment(1)=='godown') { echo 'open active';}?>">
                  <a href="<?php echo base_url();?>home/income" class="sidenav-link">
                  <i class=""></i>
                  <div>Income</div>
                  </a>
               </li>
                <li class="sidenav-item <?php if($this->uri->segment(1)=='godown') { echo 'open active';}?>">
                  <a href="<?php echo base_url();?>home/expense" class="sidenav-link">
                  <i class=""></i>
                  <div>Expense</div>
                  </a>
               </li>
                
                <li class="sidenav-item <?php if($this->uri->segment(1)=='godown') { echo 'open active';}?>">
                  <a href="<?php echo base_url();?>home/account_master" class="sidenav-link">
                  <i class=""></i>
                  <div>Account masters</div>
                  </a>
               </li>
               </ul>
            </li>
<li class="sidenav-item <?php if($this->uri->segment(1)=='salorders') { echo 'open active';} ?>">
<a href="" class="sidenav-link sidenav-toggle">
<i class="sidenav-icon fas fa-dolly-flatbed text-warning "></i>
<div>Reports</div>
</a>
<ul class="sidenav-menu">
<!-- <li class="sidenav-item <?php if($this->uri->segment(1)=='saleorders') { echo 'active';}?>">
<a href="<?php echo base_url();?>home/saleorders" class="sidenav-link"><div>Reports</div>
</a>
</li> -->
 <li class="sidenav-item">
                     <a href="<?php echo base_url();?>home/payment_records" class="sidenav-link">
                        <div> Payment Report</div>
                     </a>
                  </li>

</ul>
</li>
<li class="sidenav-item <?php if($this->uri->segment(1)=='setting') { echo 'open active';}?>">
<a href="<?php echo base_url();?>home/setting" class="sidenav-link">
    <i class="sidenav-icon fas fa-tty text-success"></i>
    <div>Setting</div>
</a>
</li>






<!--<li class="sidenav-item <?php if($this->uri->segment(1)=='customers') { echo 'active';} ?>">-->
<!--<a href="<?php echo base_url();?>home/products" class="sidenav-link">-->
<!--<i class="sidenav-icon fas fa-user-alt text-success"></i>-->
<!--<div>Products</div>-->
<!--</a>-->
<!--</li>-->


<!-- <li class="sidenav-item <?php if($this->uri->segment(1)=='customers') { echo 'active';} ?>">
<a href="<?php echo base_url();?>home/customers" class="sidenav-link">
<i class="sidenav-icon fas fa-user-alt text-success"></i>
<div>Customers</div>
</a>
</li> -->

<li class="sidenav-item <?php if($this->uri->segment(1)=='customers') { echo 'active';} ?>">
<a href="#" class="sidenav-link">
<i class="sidenav-icon fas fa-user-alt text-success"></i>
<div>Vehicle<span style="color:red">(comming soon)</span></div>
</a>
</li>
<li class="sidenav-item">
<a href="" class="sidenav-link sidenav-toggle">
<i class="sidenav-icon ion ion-ios-paper text-success"></i>
<div>Quotation/Estimate <span style="color:red">(comming soon)</span></div>
</a>
<ul class="sidenav-menu">
<li class="sidenav-item <?php if($this->uri->segment(1)=='inventory') { echo 'active';}?>">
<a href="#" class="sidenav-link"><div>Quotation/Estimate </div>
</a>
</li>


</ul>
</li>
<li class="sidenav-item">
<a href="" class="sidenav-link sidenav-toggle">
<i class="sidenav-icon ion ion-ios-paper text-success"></i>
<div>Finance  <span style="color:red">(comming soon)</span></div>
</a>
<ul class="sidenav-menu">
<!-- <li class="sidenav-item <?php if($this->uri->segment(1)=='inventory') { echo 'active';}?>">
<a href="#" class="sidenav-link"><div>Finance  </div>
</a>
</li> -->


</ul>
</li>
<li class="sidenav-item">
<a href="" class="sidenav-link sidenav-toggle">
<i class="sidenav-icon ion ion-ios-paper text-success"></i>
<div>Stores/Sites  <span style="color:red">(comming soon)</span></div>
</a>
<ul class="sidenav-menu">



</ul>
</li>
<li class="sidenav-item">
<a href="" class="sidenav-link sidenav-toggle">
<i class="sidenav-icon ion ion-ios-paper text-success"></i>
<div>POS <span style="color:red">(comming soon)</span></div>
</a>
<ul class="sidenav-menu">



</ul>
</li>
<li class="sidenav-item">
<a href="" class="sidenav-link sidenav-toggle">
<i class="sidenav-icon ion ion-ios-paper text-success"></i>
<div>Job Work  <span style="color:red">(comming soon)</span></div>
</a>
<ul class="sidenav-menu">



</ul>
</li>
<li class="sidenav-item">
<a href="" class="sidenav-link sidenav-toggle">
<i class="sidenav-icon ion ion-ios-paper text-success"></i>
<div>Asset Management <span style="color:red">(comming soon)</span></div>
</a>
<ul class="sidenav-menu">



</ul>
</li>
<!--<li class="sidenav-item">-->
<!--<a href="" class="sidenav-link sidenav-toggle">-->
<!--<i class="sidenav-icon ion ion-ios-paper text-success"></i>-->
<!--<div>Expense Head <span style="color:red">(comming soon)</span></div>-->
<!--</a>-->
<!--<ul class="sidenav-menu">-->



<!--</ul>-->
<!--</li>-->
<li class="sidenav-item">
<a href="" class="sidenav-link sidenav-toggle">
<i class="sidenav-icon ion ion-ios-paper text-success"></i>
<div>Production<span style="color:red">(comming soon)</span></div>
</a>
<ul class="sidenav-menu">



</ul>
</li>
















</ul>
</div>
<!-- Sidebar End -->




