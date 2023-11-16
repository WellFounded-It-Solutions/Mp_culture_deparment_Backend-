<?php include("header.php");?>
<div class="layout-content">

<div class="container-fluid flex-grow-1 container-p-y">
<h4 class="font-weight-bold py-3 mb-0">Subcategory</h4>
<div class="text-muted small mt-0 mb-4 d-block breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard"><i class="feather icon-home"></i></a></li>
<li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard">Dashboard</a></li>
<li class="breadcrumb-item <?php if($this->uri->segment(1)=='subcategory') { echo 'active';}?>"><a href="<?php echo base_url();?>subcategory">Sub-Categories</a></li>
</ol>
</div>
<div class="row">

<div class="col-md-12">
<div class="card">
<div class="card-header">
<h5>Categories</h5>
</div>
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
<button class="btn btn-success btn-sm mb-3 btn-round" data-toggle="modal" data-target="#modal-add"><i class="feather icon-plus"></i> Add Subcategory</button>
</div>
</div>
<div class="table-responsive">
<table id="report-table" class="table table-striped table-hover">
<thead>
<tr>
<th>S.No.</th>
<th>Subcategory</th>
<th>Category</th>
<th>Date</th>
<th>Status</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<?php 
$i=1;
foreach($subcategory as $cust)
{
?>
<tr>
<td><?php echo $i;?></td>
<td><?php echo $cust['subcategory'];?>
<td><?php 
foreach($category as $cat){
    if($cat['id']==$cust['catid'])
    {
        echo $cat['category'];
    }
}
?>
<td><?php echo $cust['description'];?></td>
<td><?php echo $cust['date'];?></td>
<td>
<?php
                          if($cust['status'] == '1') {
                           ?>
                                                    <a href="<?php echo base_url();?>home/subcategorystatus/<?php echo $cust['id']; ?>"><button class="btn btn-success">Active</button></a>

                                                    <?php
                          } else if($cust['status'] == '0') {
                            ?>
                                                        <a href="<?php echo base_url();?>home/subcategorystatus/<?php echo $cust['id']; ?>"><button class="btn btn-danger">Deactive</button></a>
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
<a href="<?php echo base_url();?>editsubcategory/<?php echo $cust['id']; ?>" class="btn btn-info btn-sm"><i class="feather icon-edit"></i>&nbsp;Edit </a>
<a href="<?php echo base_url();?>deletesubcategory/<?php echo $cust['id']; ?>" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Delete </a>
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



<!-- Add subcategory -->
<div class="modal fade" id="modal-add" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Add subcategory</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<form action="<?php echo base_url();?>add_subcategory" method="post" enctype="multipart/form-data">
<div class="row">
<div class="col-sm-6">
<div class="form-group">
<label class="floating-label">Subcategory</label>
<input type="text" name="subcategory" id="subcategory" class="form-control" placeholder="Subcategory Name like Oil -> Hair Oil, Mustard Oil" maxlength="100" required>
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<label class="floating-label">Category</label>
<select class="custom-select" name="catid" id="catid" required>
<?php foreach($category as $ct) { ?>
<option value="<?php echo $ct['id'];?>"><?php echo $ct['category'];?></option>
<?php } ?>
</select>
</div>
</div>
<div class="col-sm-12">
<div class="form-group">
<label class="floating-label">Description</label>
<textarea class="form-control" rows="10"></textarea>
</div>
</div>
<div class="col-sm-12">
<button class="btn btn-primary" type="submit">Submit</button>
<button class="btn btn-danger" data-dismiss="modal">Exit</button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>


<!-- Edit subcategory -->
<div class="modal fade" id="modal-add" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Edit subcategory</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<form action="<?php echo base_url();?>add_subcategory" method="post" enctype="multipart/form-data">
<div class="row">
<div class="col-sm-6">
<div class="form-group">
<label class="floating-label">subcategory</label>
<input type="text" name="subcategory" id="subcategory" class="form-control" placeholder="Full Name" maxlength="100" required>
</div>
</div>
<div class="col-sm-12">
<div class="form-group">
<label class="floating-label">Description</label>
<textarea class="form-control" rows="10"></textarea>
</div>
</div>
<div class="col-sm-12">
<button class="btn btn-primary" type="submit">Submit</button>
<button class="btn btn-danger" data-dismiss="modal">Exit</button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>

<?php include("footer.php");?>




