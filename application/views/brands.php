
<?php include("header.php");?>
<link rel="stylesheet" href="<?php echo base_url();?>assets/libs/datatables/datatables.css">

<div class="layout-content">

<div class="container-fluid flex-grow-1 container-p-y">
<h4 class="font-weight-bold py-3 mb-0">Brands</h4>
<div class="text-muted small mt-0 mb-4 d-block breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
<li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard">Dashboard</a></li>
<li class="breadcrumb-item <?php if($this->uri->segment(1)=='brands') { echo 'active';}?>"><a href="<?php echo base_url();?>brands">Brands</a></li>
</ol>
</div>
<div class="row">


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
<a href="<?php echo base_url();?>addbrand"><button class="btn btn-success btn-sm mb-3"><i class="feather icon-plus"></i> Add Brand</button></a>
</div>
</div>
<div class="table-responsive">
<table id="report-table" class="table table-striped table-hover">
<thead>
<tr>
<th></th>
<th>Brand</th>
<th>Date</th>
<th>Status</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<?php 
$i=1;
foreach($brands as $cust)
{
?>
<tr>
<td><?php echo $i;?></td>
<td><?php echo $cust['brand'];?>
<!-- <small class="d-block">
<a href="#!">View</a> |
<a href="#!">Contacts</a> |
<a href="#!" class="text-danger">Delete </a>
</small> -->
</td>
<td><?php echo $cust['date'];?></td>
<td>
<?php
                          if($cust['status'] == '1') {
                           ?>
                                                    <a href="<?php echo base_url();?>home/brandstatus/<?php echo $cust['id']; ?>"><button class="btn btn-success">Active</button></a>

                                                    <?php
                          } else if($cust['status'] == '0') {
                            ?>
                                                        <a href="<?php echo base_url();?>home/brandstatus/<?php echo $cust['id']; ?>"><button class="btn btn-danger">Deactive</button></a>
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
<a href="<?php echo base_url();?>editbrand/<?php echo $cust['id']; ?>" class="btn btn-info btn-sm"><i class="feather icon-edit"></i>&nbsp;Edit </a>
<a href="<?php echo base_url();?>deletebrand/<?php echo $cust['id']; ?>" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Delete </a>
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