
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
<h4 class="font-weight-bold py-3 mb-0">Delivery Partners</h4>
<div class="text-muted small mt-0 mb-4 d-block breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
<li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard">Dashboard</a></li>
<li class="breadcrumb-item <?php if($this->uri->segment(1)=='deliverypartners') { echo 'active';}?>"><a href="<?php echo base_url();?>deliverypartners">Delivery Partners</a></li>
</ol>
</div>
<div class="row">

<div class="col-sm-12">
<div class="card">
<div class="card-header">
<h5>Delivery Partners Summary</h5>
</div>
<div class="card-body text-center">

<div class="row">
<div class="col-md-3 col-xs-6">
<h3 class="text-info"><a href="<?php echo base_url();?>deliverypartnerstoday" class="text-info"><?php if(isset($countdeliverypartnerstoday)){echo $countdeliverypartnerstoday;} else { echo "";}?></a></h3>
<span class="text-info">Today Delivery Partners</span>
</div>
<div class="col-md-3 col-xs-6">
<h3 class="text-success"><a href="<?php echo base_url();?>deliverypartnersactive" class="text-success"><?php if(isset($countdeliverypartnersactive)){echo $countdeliverypartnersactive;} else { echo "";}?></a></h3>
<span class="text-success">Active Delivery Partners</span>
</div>
<div class="col-md-3 col-xs-6">
<h3 class="text-danger"><a href="<?php echo base_url();?>deliverypartnersinactive" class="text-danger"><?php if(isset($countdeliverypartnersinactive)){echo $countdeliverypartnersinactive;} else { echo "";}?></a></h3>
<span class="text-danger">Inactive Delivery Partners</span>
</div>
<div class="col-md-3 col-xs-6">
<h3 class="text-dark"><a href="<?php echo base_url();?>deliverypartners" class="text-dark"><?php if(isset($countdeliverypartners)){echo $countdeliverypartners;} else { echo "";}?></a></h3>
<span class="text-dark">Total Delivery Partners</span>
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
<a href="<?php echo base_url();?>adddeliverypartner"><button class="btn btn-success btn-sm mb-3"><i class="feather icon-plus"></i> Add Delivery Partner</button></a>
</div>
</div>
<div class="table-responsive">
<table id="report-table" class="table table-striped table-hover">
<thead>
<tr>
<th></th>
<th>Name</th>
<th>Email</th>
<th>Mobile</th>
<!-- <th>Groups</th> -->
<th>Date</th>
<th>Status</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<?php 
$i=1;
foreach($deliverypartners as $cust)
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
                                                    <a href="<?php echo base_url();?>home/deliverypartnerstatus/<?php echo $cust['id']; ?>"><button class="btn btn-success">Active</button></a>

                                                    <?php
                          } else if($cust['status'] == '0') {
                            ?>
                                                        <a href="<?php echo base_url();?>home/deliverypartnerstatus/<?php echo $cust['id']; ?>"><button class="btn btn-danger">Deactive</button></a>
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
<a href="<?php echo base_url();?>editdeliverypartner/<?php echo $cust['id']; ?>" class="btn btn-info btn-sm"><i class="feather icon-edit"></i>&nbsp;Edit </a>
<a href="<?php echo base_url();?>deletedeliverypartner/<?php echo $cust['id']; ?>" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Delete </a>
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