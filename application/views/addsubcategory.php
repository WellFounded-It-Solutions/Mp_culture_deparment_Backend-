<?php include("header.php");?>
<link rel="stylesheet" href="<?php echo base_url();?>assets/libs/quill/typography.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/libs/quill/editor.css">

<div class="layout-content">

<div class="container-fluid flex-grow-1 container-p-y">
<h4 class="font-weight-bold py-3 mb-0">Add SubCategory</h4>
<div class="text-muted small mt-0 mb-4 d-block breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard"><i class="feather icon-home"></i></a></li>
<li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard">Dashboard</a></li>
<li class="breadcrumb-item"><a href="<?php echo base_url();?>subcategory">Sub-Categories</a></li>
<li class="breadcrumb-item <?php if($this->uri->segment(1)=='addsubcategory') { echo 'active';}?>"><a href="<?php echo base_url();?>addsubcategory">Add SubCategory</a></li>
</ol>
</div>

<div class="card mb-4">
<h6 class="card-header">Add SubCategory</h6>
<div class="card-body">
<form action="<?php echo base_url();?>add_subcategory" method="post" enctype="multipart/form-data">
<div class="form-row">

<div class="form-group col-md-6">
<label class="form-label">Subcategory</label>
<input type="text" name="subcategory" id="subcategory" class="form-control" placeholder="Subcategory Name like Oil -> Hair Oil, Mustard Oil" maxlength="100" required>
<div class="clearfix"></div>
</div>

<div class="form-group col-md-6">
<label class="floating-label">Category</label>
<select class="custom-select" name="catid" id="catid" required>
<?php foreach($category as $ct) { ?>
<option value="<?php echo $ct['id'];?>"><?php echo $ct['category'];?></option>
<?php } ?>
</select>
<div class="clearfix"></div>
</div>
</div>
<div class="form-row">
<div class="form-group col-md-12">
<label class="form-label">Description</label>

<textarea rows="10" class="form-control" name="description" id="description"></textarea>

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