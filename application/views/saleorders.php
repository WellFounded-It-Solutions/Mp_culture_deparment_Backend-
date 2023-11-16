
<?php 
if(($_SESSION['division']) && ($_SESSION['company']) &&  ($_SESSION['year'])){
 include("header_comp.php");
}elseif(($_SESSION['division'])  && ($_SESSION['company'])){
include("header_comp.php");
}elseif($_SESSION['division']){
include("header_div.php");
}else{
include("header.php");
}?>
<link rel="stylesheet" href="<?php echo base_url();?>assets/libs/datatables/datatables.css">

<div class="layout-content">

<div class="container-fluid flex-grow-1 container-p-y">
<h4 class="font-weight-bold py-3 mb-0">Sale Orders</h4>
<div class="text-muted small mt-0 mb-4 d-block breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
<li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard">Dashboard</a></li>
<li class="breadcrumb-item <?php if($this->uri->segment(1)=='saleorders') { echo 'active';}?>"><a href="<?php echo base_url();?>saleorders">Sale Orders</a></li>
</ol>
</div>
<div class="row">

<div class="col-sm-12">
<div class="card">
<div class="card-header">
<h5>Sale Orders Details</h5>
</div>
<div class="card-body text-center">

<div class="row">
<div class="col-md-3 col-xs-6">
<h3 class="text-info"><a href="<?php echo base_url();?>saleorderstoday" class="text-info"><?php if(isset($countsaleorderstoday)){echo $countsaleorderstoday;} else { echo "";}?></a></h3>
<span class="text-info">All Sales</span>
</div>
<div class="col-md-3 col-xs-6">
<h3 class="text-success"><a href="<?php echo base_url();?>saleordersactive" class="text-success"><?php if(isset($countsaleordersactive)){echo $countsaleordersactive;} else { echo "";}?></a></h3>
<span class="text-success">All Sales Amount</span>
</div>
<div class="col-md-3 col-xs-6">
<h3 class="text-danger"><a href="<?php echo base_url();?>saleordersinactive" class="text-danger"><?php if(isset($countsaleordersinactive)){echo $countsaleordersinactive;} else { echo "";}?></a></h3>
<span class="text-danger">All Sales Return</span>
</div>
<!-- <div class="col-md-3 col-xs-6">
<h3 class="text-dark"><a href="<?php echo base_url();?>saleorders" class="text-dark"><?php if(isset($countsaleorders)){echo $countsaleorders;} else { echo "";}?></a></h3>
<span class="text-dark">Order Discount</span>
</div> -->


</div>
</div>
</div> 
</div>

<div class="col-sm-12">
<div class="card">
<div class="card-header">
<h5>Sale Orders Summary</h5>
</div>
<div class="card-body text-center">

<div class="row">
<div class="col-md-3 col-xs-6">
<h3 class="text-info"><a href="<?php echo base_url();?>saleorderstoday" class="text-info"><?php if(isset($countsaleorderstoday)){echo $countsaleorderstoday;} else { echo "";}?></a></h3>
<span class="text-info">Today Sale Orders</span>
</div>
<div class="col-md-3 col-xs-6">
<h3 class="text-success"><a href="<?php echo base_url();?>saleordersactive" class="text-success"><?php if(isset($countsaleordersactive)){echo $countsaleordersactive;} else { echo "";}?></a></h3>
<span class="text-success">Active Sale Orders</span>
</div>
<div class="col-md-3 col-xs-6">
<h3 class="text-danger"><a href="<?php echo base_url();?>saleordersinactive" class="text-danger"><?php if(isset($countsaleordersinactive)){echo $countsaleordersinactive;} else { echo "";}?></a></h3>
<span class="text-danger">Inactive Sale Orders</span>
</div>
<div class="col-md-3 col-xs-6">
<h3 class="text-dark"><a href="<?php echo base_url();?>saleorders" class="text-dark"><?php if(isset($countsaleorders)){echo $countsaleorders;} else { echo "";}?></a></h3>
<span class="text-dark">Total Sale Orders</span>
</div>


</div>
</div>
</div> 
</div>
<div class="col-sm-12">
<div class="card">
<div class="card-body">
<div class="row align-items-center m-l-0">
<div class="col-sm-6">
<?php if($this->session->flashdata('msg')){ ?>
            <div class="text-green">
                <h5 class="text-left text-success">
                    <?php echo $this->session->flashdata('msg'); ?>
                    </h5>
            </div>
            <?php } ?>
</div>
<div class="col-sm-6 text-right">
<a href="<?php echo base_url();?>addsaleorder"><button class="btn btn-success btn-sm mb-3"><i class="feather icon-plus"></i> Add Sale Order</button></a>
</div>
</div>
<div class="table-responsive">
<table id="report-table" class="table table-striped table-hover">
<thead>
<tr>
<th>S.No.</th>
<th>Order ID</th>
<th>Date</th>
<th>Vendor Name</th>
<th>Vendor Contact No</th>
<th>Vendor Area</th>
<th>Customer Name</th>
<th>Customer Contact No</th>
<th>Customer Area</th>
<th>Products</th> 
<th>Unit Price</th>
<th>Quantity</th>
<th>Total Amount</th>
<th>Paid</th>
<th>Paid Amount</th>
<th>Pending</th>
<th>Status</th> 
<th>Action</th>
</tr>
</thead>
<tbody>
<?php 
/*$i=1;
foreach($saleorders as $cust)
{
?>
<tr>
<td><?php echo $i;?></td>
<td><?php echo $cust['name'];?>
<!-- <small class="d-block">
<a href="#!">View</a> |
<a href="#!">Contacts</a> |
<a href="#!" class="text-danger">Delete </a>
</small> -->
</td>
<td><?php echo $cust['email'];?></td>
<td><?php echo $cust['mobile'];?></td>
<td><?php echo $cust['date'];?></td>
<td>
<?php
                          if($cust['status'] == '1') {
                           ?>
                                                    <a href="<?php echo base_url();?>home/employeestatus/<?php echo $cust['id']; ?>"><button class="btn btn-success">Active</button></a>

                                                    <?php
                          } else if($cust['status'] == '0') {
                            ?>
                                                        <a href="<?php echo base_url();?>home/employeestatus/<?php echo $cust['id']; ?>"><button class="btn btn-danger">Deactive</button></a>
                                                        <?php
                          } 
                            ?>
<!-- <label class="switcher">
<input type="checkbox" class="switcher-input">
<span class="switcher-indicator">
<span class="switcher-yes"></span>
<span class="switcher-no"></span>
</span>
<span class="switcher-label"></span>
</label> -->
</td>
<td>
<a href="<?php echo base_url();?>editemployee/<?php echo $cust['id']; ?>" class="btn btn-info btn-sm"><i class="feather icon-edit"></i>&nbsp;Edit </a>
<a href="<?php echo base_url();?>deleteemployee/<?php echo $cust['id']; ?>" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Delete </a>
</td>
</tr>
<?php $i++; }  */?>


</tbody>
</table>
</div>
</div>
</div>
</div>

</div>

</div>

<?php include("footer.php");?>