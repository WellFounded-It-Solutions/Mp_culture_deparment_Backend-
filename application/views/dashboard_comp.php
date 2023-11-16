
 
<?php include("header_comp.php");?>
<?php //include("content.php");?>
<div class="layout-content">

<div class="container-fluid flex-grow-1 container-p-y">
<h4 class="font-weight-bold py-3 mb-0">Dashboard (<?php echo $_SESSION['company'];?>)</h4>
<!-- <a href="<?php echo base_url();?><?php echo $_SESSION['division'];?>"><h4 class="float-right text-success"><-Back to Division</h4></a> -->
<a href="<?php echo base_url();?>division_dashboard?id=<?php echo $_SESSION['division'];?>"><h4 class="float-right text-primary"> Back to Division  </h4></a>
<h4 class="float-right text-success"> <-OR->    </h4>
  <a href="<?php echo base_url();?>home/adminlogin"><h4 class="float-right text-primary"> Back to Admin </h4></a>
<div class="text-muted small mt-0 mb-4 d-block breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard"><i class="feather icon-home"></i></a></li>
<li class="breadcrumb-item active"><a href="<?php echo base_url();?>dashboard">Comapny Dashboard</a></li>

</ol>
</div>
<h4 class="font-weight-bold py-3 mb-0"></h4>
 

<h4 class="font-weight-bold py-3 mb-0"></h4>
<?php if(empty($_SESSION['year'])){?>
  <div class="col-lg-3 col-md-6"  style="float:right">
    <label for="exampleFormControlSelect1">Select Year</label>
    <select class="form-control" id="exampleFormControlSelect1" onchange="location = this.value;">
      <option value="">-- Select --</option>

      <?php foreach($year as $data){?>
     <option value="<?php echo base_url();?>home/dashboard_year/?id=<?php echo $data['fy_year'];?>"><?php echo $data['fy_year'];?></option>
     
  <?php }?>
    </select>
  </div>
<?php }else{?>
   <div class="col-lg-3 col-md-6"  style="float:right">
    <label for="exampleFormControlSelect1">Select Year</label>
    <select class="form-control" id="exampleFormControlSelect1" onchange="location = this.value;">
      <option value="">-- Select --</option>
      <option value="<?php echo base_url();?>home/dashboard_year/?id=<?php echo "ALL";?>">All Data</option>
      <?php foreach($year as $data){?>
     <option value="<?php echo base_url();?>home/dashboard_year/?id=<?php echo $data['fy_year'];?>"><?php echo $data['fy_year'];?></option>
     
  <?php }?>
    </select>
  </div>
<?php }?>
<h4 class="font-weight-bold py-3 mb-0"></h4>
<h4 class="font-weight-bold py-3 mb-0"></h4>
<h4 class="font-weight-bold py-3 mb-0"></h4>
<div class="row">


<div class="col-lg-3 col-md-6">
<div class="card mb-4">
<div class="card-header with-elements border-bottom-0">
<a href="<?php echo base_url();?>customers" class="text-primary"><h6 class="card-header-title mb-0">Customers</h6></a>
<div class="card-header-elements ml-auto">
<div class="btn-group">
<a href="<?php echo base_url();?>customers"><button class="btn btn-primary btn-sm btn-round">Click Here to View</button></a>
</div>
</div>
</div>
<div class="card-body pt-0">
<div class="d-flex align-items-center justify-content-between">
<div class="text-center">
<a href="<?php echo base_url();?>customers" class="text-primary"><h2 class="mt-1"><?php if(isset($countcustomers)){echo $countcustomers;} else { echo "";}?></h2></a>
<div class="lnr"><a href="<?php echo base_url();?>customers" class="text-rpimary"><i class="feather icon-user bg-primary ui-rounded-icon"></i></a></div>
</div>
<p class="text-muted"><span class="badge badge-primary"><?php if(isset($countcustomers)){echo $countcustomers;} else { echo "";}?></span> Total <br/> <span class="badge badge-primary"><?php if(isset($countcustomerstoday)){echo $countcustomerstoday;} else { echo "";}?></span> Today <br/> <span class="badge badge-primary"><?php if(isset($countcustomersinactive)){echo $countcustomersinactive;} else { echo "";}?></span> Pending</p>
</div>
</div>
</div>
</div>

<div class="col-lg-3 col-md-6">
<div class="card mb-4">
<div class="card-header with-elements border-bottom-0">
<a href="<?php echo base_url();?>customers" class="text-info"><h6 class="card-header-title mb-0">Merchants</h6></a>
<div class="card-header-elements ml-auto">
<div class="btn-group">
<a href="<?php echo base_url();?>merchants" class="text-info"><button class="btn btn-info btn-sm btn-round">Click Here to View</button></a>
</div>
</div>
</div>
<div class="card-body pt-0">
<div class="d-flex align-items-center justify-content-between">
<div class="text-center">
<a href="<?php echo base_url();?>merchants" class="text-info"><h2 class="mt-1"><?php if(isset($countmerchants)){echo $countmerchants;} else { echo "";}?></h2></a>
<div class="lnr"><i class="feather icon-users bg-info ui-rounded-icon"></i></div>
</div>
<p class="text-muted"><span class="badge badge-info"><?php if(isset($countmerchants)){echo $countmerchants;} else { echo "";}?></span> Total <br/> <span class="badge badge-info"><?php if(isset($countmerchantstoday)){echo $countmerchantstoday;} else { echo "";}?></span> Today <br/> <span class="badge badge-info"><?php if(isset($countmerchantsinactive)){echo $countmerchantsinactive;} else { echo "";}?></span> Pending</p>
</div>
</div>
</div>
</div>

<div class="col-lg-3 col-md-6">
<div class="card mb-4">
<div class="card-header with-elements border-bottom-0">
<a href="<?php echo base_url();?>orders" class="text-success"><h6 class="card-header-title mb-0">Orders</h6></a>
<div class="card-header-elements ml-auto">
<div class="btn-group">
<a href="<?php echo base_url();?>orders"><button class="btn btn-success btn-sm btn-round">Click Here to View</button></a>
</div>
</div>
</div>
<div class="card-body pt-0">
<div class="d-flex align-items-center justify-content-between">
<div class="">
<a href="<?php echo base_url();?>orders" class="text-success"><h2 class="mt-1"> 0 </h2></a>
<div class="lnr"><i class="feather icon-shopping-cart bg-success ui-rounded-icon"></i></div>
</div>
<p class="text-muted"><span class="badge badge-success">0</span> Total <br/><span class="badge badge-success">0</span> Today <br/><span class="badge badge-success">0</span> Pending</p>
</div>
</div>
</div>
</div>

<div class="col-lg-3 col-md-6">
<div class="card mb-4">
<div class="card-header with-elements border-bottom-0">
<a href="<?php echo base_url();?>orders" class="text-warning"><h6 class="card-header-title mb-0">Deliveries</h6></a>
<div class="card-header-elements ml-auto">
<div class="btn-group">
<a href="<?php echo base_url();?>orders"><button class="btn btn-warning btn-sm btn-round">Click Here to View</button></a>
</div>
</div>
</div>
<div class="card-body pt-0">
<div class="d-flex align-items-center justify-content-between">
<div class="">
<a href="<?php echo base_url();?>orders" class="text-warning"><h2 class="mt-1"> 256 </h2></a>
<div class="lnr"><i class="fas fa-cart-arrow-down bg-warning ui-rounded-icon"></i></div>
</div>
<p class="text-muted"><span class="badge badge-warning">22</span> Total <br/><span class="badge badge-warning">22</span> Today <br/><span class="badge badge-warning">22</span> Pending</p>
</div>
</div>
</div>
</div>


<div class="col-lg-5">
<div class="row">
<div class="col-md-6">
<div class="card mb-4">
<div class="card-body">
<div class="d-flex align-items-center justify-content-between">
<div class="">
<a href="<?php echo base_url();?>category"><h2 class="mb-2"><?php if(isset($countcategory)){echo $countcategory;} else { echo "";}?></h2></a>
<a href="<?php echo base_url();?>category"><p class="text-muted mb-0"><span class="badge badge-primary">Categories</span></p></a>
</div>
<div class="lnr lnr-leaf display-4 text-primary"></div>
</div>
</div>
 </div>
</div>
<div class="col-md-6">
<div class="card mb-4">
<div class="card-body">
<div class="d-flex align-items-center justify-content-between">
<div class="">
<a href="<?php echo base_url();?>products" class="text-success"><h2 class="mb-2"><?php if(isset($countproducts)){echo $countproducts;} else { echo "";}?></h2></a>
<a href="<?php echo base_url();?>products"><p class="text-muted mb-0"><span class="badge badge-success">Products</span></p></a>
</div>
<div class="lnr lnr-chart-bars display-4 text-success"></div>
</div>
</div>
</div>
</div>
<div class="col-md-6">
<div class="card mb-4">
<div class="card-body">
<div class="d-flex align-items-center justify-content-between">
<div class="">
<a href="<?php echo base_url();?>manufacturers" class="text-warning"><h2 class="mb-2"><?php if(isset($countmanufacturers)){echo $countmanufacturers;} else { echo "";}?></h2></a>
<a href="<?php echo base_url();?>manufacturers"><p class="text-muted mb-0"><span class="badge badge-warning">manufacturers</span></p></a>
</div>
<div class="lnr lnr-leaf display-4 text-warning"></div>
</div>
</div>
</div>
</div>
<div class="col-md-6">
<div class="card mb-4">
<div class="card-body">
<div class="d-flex align-items-center justify-content-between">
<div class="">
<a href="<?php echo base_url();?>vendors" class="text-info"><h2 class="mb-2"><?php if(isset($countvendors)){echo $countvendors;} else { echo "";}?></h2></a>
<a href="<?php echo base_url();?>vendors"><p class="text-muted mb-0"><span class="badge badge-info">Vendors</span></p></a>
</div>
<div class="lnr lnr-leaf display-4 text-info"></div>
</div>
</div>
</div>
</div>
<div class="col-md-6">
<div class="card mb-4">
<div class="card-body">
<div class="d-flex align-items-center justify-content-between">
<div class="">
<a href="<?php echo base_url();?>employees" class="text-danger"><h2 class="mb-2"><?php if(isset($countemployees)){echo $countemployees;} else { echo "";}?></h2></a>
<a href="<?php echo base_url();?>employees"><p class="text-muted mb-0"><span class="badge badge-danger">Employees</span></p></a>
</div>
<div class="lnr lnr-chart-bars display-4 text-danger"></div>
</div>
</div>
</div>
</div>

<div class="col-md-6">
<div class="card mb-4">
<div class="card-body">
<div class="d-flex align-items-center justify-content-between">
<div class="">
<a href="<?php echo base_url();?>deliveryboys" class="text-warning"><h2 class="mb-2"><?php if(isset($countdeliveryboys)){echo $countdeliveryboys;} else { echo "0";}?></h2></a>
<a href="<?php echo base_url();?>deliveryboys"><p class="text-muted mb-0"><span class="badge badge-warning">Delivery Boys</span></p></a>
</div>
<div class="lnr lnr-chart-bars display-4 text-warning"></div>
</div>
</div>
</div>
</div>
<div class="col-md-6">
<div class="card mb-4">
<div class="card-body">
<div class="d-flex align-items-center justify-content-between">
<div class="">
<h2 class="mb-2">158</h2>
<p class="text-muted mb-0"><span class="badge badge-warning">Stock</span></p>
</div>
<div class="lnr lnr-cart display-4 text-warning"></div>
</div>
</div>
</div>
</div>
<div class="col-md-6">
<div class="card mb-4">
<div class="card-body">
<div class="d-flex align-items-center justify-content-between">
<div class="">
<h2 class="mb-2">158</h2>
<p class="text-muted mb-0"><span class="badge badge-warning">Sale</span></p>
</div>
<div class="lnr lnr-cart display-4 text-warning"></div>
</div>
</div>
</div>
</div>

<div class="col-sm-12">
<div class="card d-flex w-100 mb-4">
<div class="row no-gutters row-bordered row-border-light h-100">
<div class="d-flex col-md-6 align-items-center">
<div class="card-body">
<div class="row align-items-center mb-3">
<div class="col-auto">
<i class="lnr lnr-users text-primary display-4"></i>
</div>
<div class="col">
<h6 class="mb-0 text-muted">Unique <span class="text-primary">Visitors</span></h6>
 <h4 class="mt-3 mb-0">652<i class="ion ion-md-arrow-round-down ml-3 text-danger"></i></h4>
</div>
</div>
<p class="mb-0 text-muted">36% From Last 6 Months</p>
</div>
</div>
<div class="d-flex col-md-6 align-items-center">
<div class="card-body">
<div class="row align-items-center mb-3">
<div class="col-auto">
<i class="lnr lnr-magic-wand text-primary display-4"></i>
</div>
<div class="col">
<h6 class="mb-0 text-muted">Monthly <span class="text-primary">Earnings</span></h6>
<h4 class="mt-3 mb-0">5963<i class="ion ion-md-arrow-round-up ml-3 text-success"></i></h4>
</div>
</div>
<p class="mb-0 text-muted">36% From Last 6 Months</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-7">

<div id="accordion2">
<div class="card mb-2">
<div class="card-header">
<a class="d-flex justify-content-between text-dark" data-toggle="collapse" aria-expanded="true" href="#accordion2-1">Latest Orders<div class="collapse-icon"></div></a>
</div>
<div id="accordion2-1" class="collapse show" data-parent="#accordion2">
<div class="card-body">
<div class="table-responsive">
<table class="table table-hover table-borderless">
<thead>
<tr>
<th>Order ID</th>
<th>Date</th>
<th>Customer Name</th>
<th>Email</th>
<th>Mobile</th>
<th>Area</th>
<th>Products</th>
<th>Quantity</th>
<th>Total Price</th>
<th>Status</th>
</tr>
</thead>
<tbody>
<tr>
<td>101</td>
<td>19-01-21</td>
<td>Mahesh Verma</td>
<td>mahesh@gmail.com</td>
<td>7894456123</td>
<td>MP Nagar</td>
<td>Hair Oil, Shampoo, Soap</td>
<td>3</td>
<td>350</td>
<td>New</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
<div class="card mb-2">
<div class="card-header">
<a class="collapsed d-flex justify-content-between text-dark" data-toggle="collapse" href="#accordion2-2">Latest Merchants<div class="collapse-icon"></div></a>
</div>
<div id="accordion2-2" class="collapse" data-parent="#accordion2">
<div class="card-body">
<div class="table-responsive">
<table class="table table-hover table-borderless">
<thead>
<tr>
<th>Merchant ID</th>
<th>Date</th>
<th>Merchant Name</th>
<th>Email</th>
<th>Mobile</th>
<th>Company Name</th>
<th>GST No</th>
<th>Area</th>
<th>Status</th>
</tr>
</thead>
<tbody>
<tr>
<td>101</td>
<td>19-01-21</td>
<td>Mahesh Verma</td>
<td>mahesh@gmail.com</td>
<td>7894567744</td>
<td>Mahesh Kirana</td>
<td>M34343</td>
<td>Arera Colony</td>
<td>New</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
<div class="card mb-2">
<div class="card-header">
<a class="collapsed d-flex justify-content-between text-dark" data-toggle="collapse" href="#accordion2-3">Latest Customers<div class="collapse-icon"></div></a>
</div>
<div id="accordion2-3" class="collapse" data-parent="#accordion2">
<div class="card-body">
<div class="table-responsive">
<table class="table table-hover table-borderless">
<thead>
<tr>
<th>Customer ID</th>
<th>Order ID</th>
<th>Product</th>
<th>Quantity</th>
<th>Price</th>
<th>Date</th>
<th>Status</th>
</tr>
</thead>
<tbody>
<tr>
<td>John Deo</td>
<td>#81412314</td>
<td>Hair Oil, Bread</td>
<td>2</td>
<td>200</td>
<td>19-01-21</td>
<td>New</td>
</tr>

</tbody>
</table>
</div>
</div>
</div>
</div>



</div>
</div>
<!-- <div class="col-lg-3 col-md-6">
<div class="card mb-4">
<div class="card-header with-elements border-bottom-0">
<h6 class="card-header-title mb-0">Orders</h6>
<div class="card-header-elements ml-auto">
<div class="btn-group">
<a href="<?php echo base_url();?>products"><button class="btn btn-primary btn-sm btn-round">Click Here to View</button></a>
</div>
</div>
</div>
<div class="card-body pt-0">
<div class="d-flex align-items-center justify-content-between">
<div class="">
<h2 class="my-2"> 256 </h2>
<p class="text-muted"><span class="badge badge-primary">22</span> Total <span class="badge badge-primary my-2">22</span> Today <span class="badge badge-primary my-2">22</span> Pending</p>
</div>
<div class="lnr"><i class="feather icon-user bg-primary ui-rounded-icon"></i></div>
</div>
</div>
</div>
</div>

<div class="col-lg-3 col-md-6">
<div class="card mb-4">
<div class="card-header with-elements border-bottom-0">
<h6 class="card-header-title mb-0">Categories</h6>
<div class="card-header-elements ml-auto">
<div class="btn-group">
<a href="<?php echo base_url();?>products"><button class="btn btn-primary btn-sm btn-round">Click Here to View</button></a>
</div>
</div>
</div>
<div class="card-body pt-0">
<div class="d-flex align-items-center justify-content-between">
<div class="">
<h2 class="my-2"> 256 </h2>
<p class="text-muted"><span class="badge badge-primary">22</span> Total <span class="badge badge-primary my-2">22</span> Today <span class="badge badge-primary my-2">22</span> Pending</p>
</div>
<div class="lnr"><i class="feather icon-user bg-primary ui-rounded-icon"></i></div>
</div>
</div>
</div>
</div>

<div class="col-lg-3 col-md-6">
<div class="card mb-4">
<div class="card-header with-elements border-bottom-0">
<h6 class="card-header-title mb-0">Products</h6>
<div class="card-header-elements ml-auto">
<div class="btn-group">
<a href="<?php echo base_url();?>products"><button class="btn btn-primary btn-sm btn-round">Click Here to View</button></a>
</div>
</div>
</div>
<div class="card-body pt-0">
<div class="d-flex align-items-center justify-content-between">
<div class="">
<h2 class="my-2"> 256 </h2>
<p class="text-muted"><span class="badge badge-primary">22</span> Total <span class="badge badge-primary my-2">22</span> Today <span class="badge badge-primary my-2">22</span> Pending</p>
</div>
<div class="lnr"><i class="feather icon-user bg-primary ui-rounded-icon"></i></div>
</div>
</div>
</div>
</div>

<div class="col-lg-3 col-md-6">
<div class="card mb-4">
<div class="card-header with-elements border-bottom-0">
<h6 class="card-header-title mb-0">Stock</h6>
<div class="card-header-elements ml-auto">
<div class="btn-group">
<a href="<?php echo base_url();?>products"><button class="btn btn-primary btn-sm btn-round">Click Here to View</button></a>
</div>
</div>
</div>
<div class="card-body pt-0">
<div class="d-flex align-items-center justify-content-between">
<div class="">
<h2 class="my-2"> 256 </h2>
<p class="text-muted"><span class="badge badge-primary">22</span> Total <span class="badge badge-primary my-2">22</span> Today <span class="badge badge-primary my-2">22</span> Pending</p>
</div>
<div class="lnr"><i class="feather icon-user bg-primary ui-rounded-icon"></i></div>
</div>
</div>
</div>
</div> -->


<div class="col-xl-6">
<div class="card mb-4">
<div class="card-header with-elements">
<h6 class="card-header-title mb-0">Statistics</h6>
<div class="card-header-elements ml-auto">
<div class="btn-group">
<button type="button" class="btn btn-sm btn-default icon-btn borderless btn-round md-btn-flat dropdown-toggle hide-arrow" data-toggle="dropdown"><i class="ion ion-ios-more"></i></button>
<div class="dropdown-menu dropdown-menu-right">
<a href="javascript:" class="dropdown-item"><i class="feather icon-maximize text-muted"></i> &nbsp; Full Screen</a>
<a href="javascript:" class="dropdown-item"><i class="feather icon-refresh-cw text-muted"></i> &nbsp; Reload</a>
<a href="javascript:" class="dropdown-item"><i class="feather icon-trash text-muted"></i> &nbsp; Remove</a>
</div>
 </div>
</div>
</div>
<div class="card-body py-0">
<div id="chart-bar-moris" style="height:195px"></div>
</div>
<div class="card-footer pt-0 pb-0">
<div class="row row-bordered row-border-light">
<div class="col-sm-3 py-3">
<div class="d-flex align-items-center">
<div class="ui-legend bg-primary" style="width:20px;height:20px"></div>
<div class="ml-3">
<p class="text-muted small mb-1">Order</p>
<h5 class="mb-0">$590,47</h5>
</div>
</div>
</div>
<div class="col-sm-3 py-3">
<div class="d-flex align-items-center">
<div class="ui-legend bg-success" style="width:20px;height:20px"></div>
<div class="ml-3">
<p class="text-muted small mb-1">Stock</p>
<h5 class="mb-0">486 Qt</h5>
</div>
</div>
</div>
<div class="col-sm-3 py-3">
<div class="d-flex align-items-center">
<div class="ui-legend bg-danger" style="width:20px;height:20px"></div>
<div class="ml-3">
<p class="text-muted small mb-1">Profit</p>
<h5 class="mb-0">$486,49</h5>
</div>
</div>
</div>
<div class="col-sm-3 py-3">
<div class="d-flex align-items-center">
<div class="ui-legend bg-warning" style="width:20px;height:20px"></div>
<div class="ml-3">
<p class="text-muted small mb-1">Sale</p>
<h5 class="mb-0">540 Kg</h5>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-6">
<div class="card mb-4">
<div class="card-header with-elements">
<h6 class="card-header-title mb-0">Sale Order</h6>
<div class="card-header-elements ml-auto">
<label class="text m-0">
<span class="text-light text-tiny font-weight-semibold align-middle">SHOW STATS</span>
<span class="switcher switcher-sm d-inline-block align-middle mr-0 ml-2">
<input type="checkbox" class="switcher-input" checked>
<span class="switcher-indicator">
<span class="switcher-yes"></span>
<span class="switcher-no"></span>
</span>
</span>
</label>
</div>
</div>
<div class="row no-gutters row-bordered">
<div class="col-md-7 col-lg-12 col-xl-7">
<div class="card-body">
<div id="chart-pie" style="height:220px"></div>
</div>
</div>
<div class="col-md-5 col-lg-12 col-xl-5">
<div class="card-body">
<div class="pb-4">
Order
<div class="float-right">
<span class="text-muted small">$590,47</span><i class="feather icon-arrow-down text-danger"></i>
</div>
<div class="progress mt-1" style="height:6px;">
<div class="progress-bar bg-primary" style="width: 45%;"></div>
</div>
</div>
<div class="pb-4">
Stock
<div class="float-right">
<span class="text-muted small">486 Qt</span><i class="feather icon-arrow-up text-success"></i>
</div>
<div class="progress mt-1" style="height:6px;">
<div class="progress-bar bg-success" style="width: 90%;"></div>
</div>
</div>
<div class="pb-4">
Profit
<div class="float-right">
<span class="text-muted small">$486,490.00</span><i class="feather icon-arrow-up text-success"></i>
</div>
<div class="progress mt-1" style="height:6px;">
<div class="progress-bar bg-danger" style="width: 30%;"></div>
</div>
</div>
<div class="pb-4">
Sale
<div class="float-right">
<span class="text-muted small">540 Kg</span><i class="feather icon-arrow-down text-danger"></i>
</div>
<div class="progress mt-1" style="height:6px;">
<div class="progress-bar bg-warning" style="width: 55%;"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>








<!--<div class="col-xl-2 col-md-6">
<div class="card bg-pattern-3-dark mb-4">
<div class="card-body text-center">
<a href="<?php echo base_url();?>users"><i class="feather icon-user bg-primary ui-rounded-icon"></i></a>
<a href="<?php echo base_url();?>users"><h2><?php if(isset($countusers)){echo $countusers;} else { echo "";}?></h2></a>
<a href="<?php echo base_url();?>users"><h4>Users</h4></a>
<a href="<?php echo base_url();?>users"><button class="btn btn-primary btn-sm btn-round">Click Here to View</button></a>
</div>
</div>
</div>

<div class="col-xl-2 col-md-6">
<div class="card bg-pattern-3-dark mb-4">
<div class="card-body text-center">
<a href="<?php echo base_url();?>merchants"><i class="feather icon-user bg-primary ui-rounded-icon"></i></a>
<a href="<?php echo base_url();?>merchants"><h2><?php if(isset($countmerchants)){echo $countmerchants;} else { echo "";}?></h2></a>
<a href="<?php echo base_url();?>merchants"><h4>Merchants</h4></a>
<a href="<?php echo base_url();?>merchants"><button class="btn btn-primary btn-sm btn-round">Click Here to View</button></a>
</div>
</div>
</div>

<div class="col-xl-2 col-md-6">
<div class="card bg-pattern-3-dark mb-4">
<div class="card-body text-center">
<a href="<?php echo base_url();?>customers"><i class="feather icon-user bg-primary ui-rounded-icon"></i></a>
<a href="<?php echo base_url();?>customers"><h2><?php if(isset($countcustomers)){echo $countcustomers;} else { echo "";}?></h2></a>
<a href="<?php echo base_url();?>customers"><h4>Customers</h4></a>
<a href="<?php echo base_url();?>customers"><button class="btn btn-primary btn-sm btn-round">Click Here to View</button></a>
</div>
</div>
</div>

<div class="col-xl-2 col-md-6">
<div class="card bg-pattern-3-dark mb-4">
<div class="card-body text-center">
<a href="<?php echo base_url();?>employees"><i class="feather icon-user bg-primary ui-rounded-icon"></i></a>
<a href="<?php echo base_url();?>employees"><h2><?php if(isset($countemployees)){echo $countemployees;} else { echo "";}?></h2></a>
<a href="<?php echo base_url();?>employees"><h4>Employees</h4></a>
<a href="<?php echo base_url();?>employees"><button class="btn btn-primary btn-sm btn-round">Click Here to View</button></a>
</div>
</div>
</div>

<div class="col-xl-2 col-md-6">
<div class="card bg-pattern-3-dark mb-4">
<div class="card-body text-center">
<a href="<?php echo base_url();?>deliveryboys"><i class="feather icon-user bg-primary ui-rounded-icon"></i></a>
<a href="<?php echo base_url();?>deliveryboys"><h2><?php if(isset($countdeliveryboys)){echo $countdeliveryboys;} else { echo "";}?></h2></a>
<a href="<?php echo base_url();?>deliveryboys"><h4>Delivery Boys</h4></a>
<a href="<?php echo base_url();?>deliveryboys"><button class="btn btn-primary btn-sm btn-round">Click Here to View</button></a>
</div>
</div>
</div>

<div class="col-xl-2 col-md-6">
<div class="card bg-pattern-3-dark mb-4">
<div class="card-body text-center">
<a href="<?php echo base_url();?>subscribers"><i class="feather icon-user bg-primary ui-rounded-icon"></i></a>
<a href="<?php echo base_url();?>subscribers"><h2><?php if(isset($countsubscribers)){echo $countsubscribers;} else { echo "";}?></h2></a>
<a href="<?php echo base_url();?>subscribers"><h4>Subscribers</h4></a>
<a href="<?php echo base_url();?>subscribers"><button class="btn btn-primary btn-sm btn-round">Click Here to View</button></a>
</div>
</div>
</div> -->

<!-- <div class="col-xl-3 col-md-6">
<div class="card  mb-4">
<div class="card-body text-center">
<a href="<?php echo base_url();?>banners"><i class="feather icon-user bg-primary ui-rounded-icon"></i></a>
<a href="<?php echo base_url();?>banners"><h4 class="mt-2"><span class="text-primary"><?php if(isset($countbanners)){echo $countbanners;} else { echo "";}?></span> Banners</h4></a>
<br/>
<a href="<?php echo base_url();?>banners"><button class="btn btn-primary btn-sm btn-round">Click Here to View</button></a>
</div>
</div>
</div> -->
<!-- <div class="col-xl-3 col-md-6">
<div class="card  mb-4">
<div class="card-body text-center">
<a href="<?php echo base_url();?>shops"><i class="feather icon-user bg-primary ui-rounded-icon"></i></a>
<a href="<?php echo base_url();?>shops"><h4 class="mt-2"><span class="text-primary"><?php if(isset($countshops)){echo $countshops;} else { echo "";}?></span> Shops</h4></a>
<br/>
<a href="<?php echo base_url();?>shops"><button class="btn btn-primary btn-sm btn-round">Click Here to View</button></a>
</div>
</div>
</div> -->
<!--<div class="col-xl-2 col-md-6">
<div class="card bg-pattern-3-dark mb-4">
<div class="card-body text-center">
<a href="<?php echo base_url();?>categories"><i class="feather icon-user bg-primary ui-rounded-icon"></i></a>
<a href="<?php echo base_url();?>categories"><h2><?php if(isset($countcategory)){echo $countcategory;} else { echo "";}?></h2></a>
<a href="<?php echo base_url();?>categories"><h4>Categories</h4></a>
<a href="<?php echo base_url();?>categories"><button class="btn btn-primary btn-sm btn-round">Click Here to View</button></a>
</div>
</div>
</div>

<div class="col-xl-2 col-md-6">
<div class="card  mb-4">
<div class="card-body text-center">
<a href="<?php echo base_url();?>products"><i class="feather icon-user bg-primary ui-rounded-icon"></i></a>
<a href="<?php echo base_url();?>products"><h2><?php if(isset($countproducts)){echo $countproducts;} else { echo "";}?></h2></a>
<a href="<?php echo base_url();?>products"><h4>Products</h4></a>
<a href="<?php echo base_url();?>products"><button class="btn btn-primary btn-sm btn-round">Click Here to View</button></a>
</div>
</div>
</div>

<div class="col-xl-2 col-md-6">
<div class="card  mb-4">
<div class="card-body text-center">
<a href="<?php echo base_url();?>products"><i class="feather icon-user bg-primary ui-rounded-icon"></i></a>
<a href="<?php echo base_url();?>products"><h2><?php //if(isset($countproducts)){echo $countproducts;} else { echo "";}?> 114</h2></a>
<a href="<?php echo base_url();?>products"><h4>Orders</h4></a>
<a href="<?php echo base_url();?>products"><button class="btn btn-primary btn-sm btn-round">Click Here to View</button></a>
</div>
</div>
</div> -->



<!-- <div class="col-xl-3 col-md-6">
<div class="card  mb-4">
<div class="card-body text-center">
<i class="feather icon-user bg-primary ui-rounded-icon"></i>
<h4 class="mt-2"><span class="text-primary"><?php // if(isset($countpayments)){echo $countpayments;} else { echo "";}?></span> Payments</h4>
<br/>
<a href="<?php //echo base_url();?>payments"><button class="btn btn-primary btn-sm btn-round">Click Here to View</button></a>
</div>
</div>
</div> -->




</div>

</div>
</div>

<?php include("footer.php");?>


