<?php include("header.php");?>
<link rel="stylesheet" href="<?php echo base_url();?>assets/libs/quill/typography.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/libs/quill/editor.css">

<div class="layout-content">

<div class="container-fluid flex-grow-1 container-p-y">
<h4 class="font-weight-bold py-3 mb-0">Edit Brand</h4>
<div class="text-muted small mt-0 mb-4 d-block breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard"><i class="feather icon-home"></i></a></li>
<li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard">Dashboard</a></li>
<li class="breadcrumb-item"><a href="<?php echo base_url();?>brands">Brands</a></li>
<li class="breadcrumb-item <?php if($this->uri->segment(1)=='editbrand/'.$brand->id) { echo 'active';}?>"><a href="<?php echo base_url();?>editbrand/<?php echo $brand->id;?>">Edit Brand</a></li>
</ol>
</div>

<div class="card mb-4">
<h6 class="card-header">Edit Brand</h6>
<div class="card-body">
<form action="<?php echo base_url();?>edit_brand" method="post" enctype="multipart/form-data">
<div class="form-row">
<input type="hidden" name="id" class="form-control" value="<?php echo $brand->id;?>" minlength="100">
<div class="form-group col-md-6">
<label class="form-label">Brand Name</label>
<input type="text" name="brand" id="brand" class="form-control" placeholder="Brand Name" value="<?php echo $brand->brand;?>" maxlength="100">
<div class="clearfix"></div>
</div>

<div class="form-group col-md-6">
<label class="form-label">Brand Image</label>
<div class="col"><img class="img-radius img-fluid wid-80" src="<?php echo base_url();?>assets/img/brand/<?php echo $brand->brandimage;?>" alt="Brand image"></div>
<input type="file" name="brandimage" id="brandimage" class="form-control" id="Icon" placeholder="sdf">
<div class="clearfix"></div>
</div>

</div>

<div class="form-row">

<div class="form-group col-md-12">
<label class="form-label">Description</label>


<div id="quill-toolbar">
<span class="ql-formats">
<select class="ql-font"></select>
<select class="ql-size"></select>
</span>
<span class="ql-formats">
<button class="ql-bold"></button>
<button class="ql-italic"></button>
<button class="ql-underline"></button>
<button class="ql-strike"></button>
</span>
<span class="ql-formats">
<select class="ql-color"></select>
<select class="ql-background"></select>
</span>
<span class="ql-formats">
<button class="ql-script" value="sub"></button>
<button class="ql-script" value="super"></button>
</span>
<span class="ql-formats">
<button class="ql-header" value="1"></button>
<button class="ql-header" value="2"></button>
<button class="ql-blockquote"></button>
<button class="ql-code-block"></button>
</span>
<span class="ql-formats">
<button class="ql-list" value="ordered"></button>
<button class="ql-list" value="bullet"></button>
 <button class="ql-indent" value="-1"></button>
<button class="ql-indent" value="+1"></button>
</span>
<span class="ql-formats">
<button class="ql-direction" value="rtl"></button>
<select class="ql-align"></select>
</span>
<span class="ql-formats">
<button class="ql-link"></button>
<button class="ql-image"></button>
<button class="ql-video"></button>
</span>
<span class="ql-formats">
<button class="ql-clean"></button>
</span>
</div>

<div id="Description-editor">

</div>


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