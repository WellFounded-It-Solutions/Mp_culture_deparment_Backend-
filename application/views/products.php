
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
<h4 class="font-weight-bold py-3 mb-0">Products</h4>
<div class="text-muted small mt-0 mb-4 d-block breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard"><i class="feather icon-home"></i></a></li>
<li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard">Dashboard</a></li>
<li class="breadcrumb-item <?php if($this->uri->segment(1)=='products') { echo 'active';}?>"><a href="<?php echo base_url();?>products">Products</a></li>
</ol>
</div>
<div class="row">

<?php include("mastercontent.php");?>




<div class="col-sm-12">
<div class="card">
<div class="card-header">
<h5>Products Summary</h5>
</div>
<div class="card-body text-center">

<div class="row">
<div class="col-md-3 col-xs-6">
<h3 class="text-info"><a href="<?php echo base_url();?>productstoday" class="text-info"><?php if(isset($countproductstoday)){echo $countproductstoday;} else { echo "";}?></a></h3>
<span class="text-info">Today Products</span>
</div>
<div class="col-md-3 col-xs-6">
<h3 class="text-success"><a href="<?php echo base_url();?>productsactive" class="text-success"><?php if(isset($countproductsactive)){echo $countproductsactive;} else { echo "";}?></a></h3>
<span class="text-success">Active Products</span>
</div>
<div class="col-md-3 col-xs-6">
<h3 class="text-danger"><a href="<?php echo base_url();?>productsinactive" class="text-danger"><?php if(isset($countproductsinactive)){echo $countproductsinactive;} else { echo "";}?></a></h3>
<span class="text-danger">Inactive Products</span>
</div>
<div class="col-md-3 col-xs-6">
<h3 class="text-dark"><a href="<?php echo base_url();?>products" class="text-dark"><?php if(isset($countproducts)){echo $countproducts;} else { echo "";}?></a></h3>
<span class="text-dark">Total Products</span>
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
<a href="<?php echo base_url();?>addproduct"><button class="btn btn-success btn-sm mb-3"><i class="feather icon-plus"></i> Add Product</button></a>
</div>
</div>
<div class="table-responsive">
<table id="report-table" class="table table-striped table-hover">
<thead>
<tr>
<th>S.No.</th>
<th>Product</th>
<th>Product Image</th>
<th>HSN Code</th>
<th>Tax</th>
<th>MRP</th>
<th>Sell Price per Unit</th>
<th>Sell Price Type</th>
<th>Out Of Stock</th>
<th>Allow Negative Stock</th>
<th>Date</th>
<th>Status</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<?php 
$i=1;
foreach($products as $cust)
{
?>
<tr>
<td><?php echo $i;?></td>
<td><a href="<?php echo base_url();?>home/product_varient_list?id=<?php echo $cust['id'];?>"><?php echo $cust['product'];?></a></td>
<td><img src="<?php echo base_url();?>assets/img/product/<?php echo $cust['productimage'];?>" class="img-fluid img-radius wid-40" alt=""></td>
<td><?php echo $cust['hsncode'];?></td>
<td><?php foreach($tax as $tx) {
if($cust['tax']==$tx['id'])
{
echo $tx['tax'];
}
}?></td>
<td><?php echo $cust['mrp'];?></td>
<td><?php echo $cust['sellpricepu'].' ';?>per<?php echo " "; foreach($unit as $ut) {
if($cust['primaryunit']==$ut['id'])
{
echo $ut['unit'];
}
}?>
<br/><?php echo $cust['sellpricesu'].' ';?>per<?php echo " "; foreach($unit as $ut) {
if($cust['secondaryunit']==$ut['id'])
{
echo $ut['unit'];
}
}?>
<br/><?php echo $cust['sellpricetu'].' ';?>per<?php echo " "; foreach($unit as $ut) {
if($cust['tertiaryunit']==$ut['id'])
{
echo $ut['unit'];
}
}?></td>
<td><?php 
if($cust['pricetype']=="1")
{
  echo "Including Tax";
}
elseif($cust['pricetype']=="2")
{
  echo "Excluding Tax";
}
?></td>
<td><?php 
if($cust['outstock']=="1")
{
  echo "Active";
}
elseif($cust['outstock']=="0")
{
  echo "Inactive";
}
?></td>
<td><?php 
if($cust['negstock']=="1")
{
  echo "Yes";
}
elseif($cust['negstock']=="0")
{
  echo "No";
}
?></td>
<td><?php echo $cust['date'];?></td>
<td>
<?php
                          if($cust['status'] == '1') {
                           ?>
                                                    <a href="<?php echo base_url();?>home/productstatus/<?php echo $cust['id']; ?>"><button class="btn btn-success">Active</button></a>

                                                    <?php
                          } else if($cust['status'] == '0') {
                            ?>
                                                        <a href="<?php echo base_url();?>home/productstatus/<?php echo $cust['id']; ?>"><button class="btn btn-danger">Deactive</button></a>
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
<a href="<?php echo base_url();?>editproduct/<?php echo $cust['id']; ?>" class="btn btn-info btn-sm"><i class="feather icon-edit"></i>&nbsp;Edit </a>
<a href="<?php echo base_url();?>deleteproduct/<?php echo $cust['id']; ?>" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Delete </a>
</td>
</tr>
<?php $i++; } ?>


</tbody>
</table>
</div>
</div>
</div>
</div>

</div>

</div>

<?php include("footer.php");?>