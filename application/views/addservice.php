<?php include("header.php");?>
<link rel="stylesheet" href="<?php echo base_url();?>assets/libs/quill/typography.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/libs/quill/editor.css">

<div class="layout-content">

<div class="container-fluid flex-grow-1 container-p-y">
<h4 class="font-weight-bold py-3 mb-0">Add Service</h4>
<div class="text-muted small mt-0 mb-4 d-block breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard"><i class="feather icon-home"></i></a></li>
<li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard">Dashboard</a></li>
<li class="breadcrumb-item"><a href="<?php echo base_url();?>services">Services</a></li>
<li class="breadcrumb-item <?php if($this->uri->segment(1)=='addservice') { echo 'active';}?>"><a href="<?php echo base_url();?>addservice">Add Service</a></li>
</ol>
</div>

<div class="card mb-4">
<h6 class="card-header">Add Service</h6>
<div class="card-body">
<form action="<?php echo base_url();?>add_service" method="post" enctype="multipart/form-data">
<div class="form-row">

<div class="form-group col-md-6">
<label class="form-label">Service Name</label>
<input type="text" name="service" id="service" class="form-control" placeholder="Service Name" maxlength="100">
<div class="clearfix"></div>
</div>

<div class="form-group col-md-6">
<label class="form-label">Service Image</label>
<input type="file" name="serviceimage" id="serviceimage" class="form-control" id="Icon" placeholder="sdf">
<div class="clearfix"></div>
</div>

</div>





<!-- <div class="form-row">

<div class="form-group col-md-6">
<label class="form-label">Group</label>
<select class="custom-select" name="groups" id="groups">
<option>Select Group</option>
<div class="clearfix"></div>
</select>
</div>

</div> -->


<button type="submit" class="btn btn-primary">Save</button>

</form>
</div>
</div>

</div>
</div>


<?php include("footer.php");?>