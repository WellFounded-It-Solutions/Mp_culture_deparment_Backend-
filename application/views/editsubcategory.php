<?php include("header.php");?>
<link rel="stylesheet" href="<?php echo base_url();?>assets/libs/quill/typography.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/libs/quill/editor.css">

<div class="layout-content">

<div class="container-fluid flex-grow-1 container-p-y">
<h4 class="font-weight-bold py-3 mb-0">Edit Category</h4>
<div class="text-muted small mt-0 mb-4 d-block breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard"><i class="feather icon-home"></i></a></li>
<li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard">Dashboard</a></li>
<li class="breadcrumb-item"><a href="<?php echo base_url();?>category">Categories</a></li>
<li class="breadcrumb-item <?php if($this->uri->segment(1)=='editcategory/'.$category->id) { echo 'active';}?>"><a href="<?php echo base_url();?>editcategory/<?php echo $category->id;?>">Edit Category</a></li>
</ol>
</div>

<div class="card mb-4">
<h6 class="card-header">Edit Category</h6>
<div class="card-body">
<form action="<?php echo base_url();?>edit_category" method="post" enctype="multipart/form-data">
<div class="form-row">
<input type="hidden" name="id" class="form-control" value="<?php echo $category->id;?>" minlength="100">
<div class="form-group col-md-6">
<label class="form-label">Category Name</label>
<input type="text" name="category" id="category" class="form-control" placeholder="Full Name" value="<?php echo $category->category;?>" maxlength="100" required>
<div class="clearfix"></div>
</div>

<div class="form-group col-md-6">
<label class="form-label">Description</label>

<textarea rows="10" class="form-control"><?php echo $category->description;?></textarea>

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


<button type="submit" class="btn btn-primary">Update</button>

</form>
</div>
</div>

</div>
</div>


<?php include("footer.php");?>