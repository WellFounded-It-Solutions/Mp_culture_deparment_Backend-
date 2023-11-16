
<?php include("header.php");?>
<link rel="stylesheet" href="<?php echo base_url();?>assets/libs/datatables/datatables.css">

<div class="layout-content">

<div class="container-fluid flex-grow-1 container-p-y">
<h4 class="font-weight-bold py-3 mb-0">Admin User</h4>
<div class="text-muted small mt-0 mb-4 d-block breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
<li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard">Dashboard</a></li>
<li class="breadcrumb-item <?php if($this->uri->segment(1)=='users') { echo 'active';}?>"><a href="<?php echo base_url();?>home/admins"> admin</a></li>
</ol>
</div>
<div class="row">
<!--
<div class="col-sm-12">
<div class="card">
<div class="card-header">
<h5>Customers Summary</h5>
</div>
<div class="card-body">

<div class="row">
<div class="col-md-2 col-xs-6 border-right">
<h3>12</h3>
<span class="">Total Customers</span>
</div>
<div class="col-md-2 col-xs-6 border-right">
<h3>12</h3>
<span class="text-success">Active Customers</span>
</div>
<div class="col-md-2 col-xs-6 border-right">
<h3>0</h3>
<span class="text-danger">Inactive Customers</span>
</div>
<div class="col-md-2 col-xs-6 border-right">
<h3>12</h3>
<span class="text-info">Active Contacts</span>
</div>
<div class="col-md-2  col-xs-6 border-right">
<h3>0</h3>
<span class="text-danger">Inactive Contacts</span>
</div>
<div class="col-md-2 col-xs-6">
<h3>1</h3>
<span class="text-primary">Contacts Logged In Today</span>
</div>
</div>
</div>
</div>
</div>-->
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
<a href="<?php echo base_url();?>home/addadmin"><button class="btn btn-success btn-sm mb-3"><i class="feather icon-plus"></i> Add admin</button></a>
</div>
</div>
<div class="table-responsive">
<table id="report-table" class="table table-striped table-hover" data-show-export="true" data-click-to-select="true"
  data-toolbar="#toolbar"
  data-show-toggle="true"
  data-show-columns="true"
  data-url="">
<thead>
<tr>
<th></th>

<th>Action</th>
<th>Status</th>
<th>Name</th>

<th>Mobile</th>
 <th>Gender</th>
 <th>Email</th>
<th>Address</th>
<th>State</th>
<th>City</th>
<th>DOB</th>
<th>Age</th>

</tr>
</thead>
<tbody>
<?php 
$i=1;
foreach($customers as $cust)
{
?>
<tr>
<td><?php echo $i;?></td>
<td>
<a href="<?php echo base_url();?>home/editadmin/<?php echo $cust['id']; ?>" class="btn btn-info btn-sm"><i class="feather icon-edit"></i>&nbsp;Edit </a>
<a href="<?php echo base_url();?>home/deleteadmin/<?php echo $cust['id']; ?>" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Delete </a>
</td>
<td>
<?php
                          if($cust['status'] == '1') {
                           ?>
                                                    <a href="<?php echo base_url();?>home/adminstatus/<?php echo $cust['id']; ?>"><button class="btn btn-success">Active</button></a>

                                                    <?php
                          } else if($cust['status'] == '0') {
                            ?>
                                                        <a href="<?php echo base_url();?>home/adminstatus/<?php echo $cust['id']; ?>"><button class="btn btn-danger">Deactive</button></a>
                                                        <?php
                          } 
                            ?>

</td>

<td><?php echo $cust['name'];?></td>
<td><?php echo $cust['mobile'];?></td>
<td><?php echo $cust['sex'];?></td>
<td><?php echo $cust['email'];?></td>
<td><?php echo $cust['address'];?></td>
<td><?php echo $cust['state'];?></td>
<td><?php echo $cust['city'];?></td>
<td><?php echo $cust['dob'];?></td>
<td><?php echo $cust['age'];?></td>


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