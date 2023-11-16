<?php include("header.php");?>
<link rel="stylesheet" href="<?php echo base_url();?>assets/libs/quill/typography.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/libs/quill/editor.css">

<div class="layout-content">

<div class="container-fluid flex-grow-1 container-p-y">
<h4 class="font-weight-bold py-3 mb-0">Add Shop</h4>
<div class="text-muted small mt-0 mb-4 d-block breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard"><i class="feather icon-home"></i></a></li>
<li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard">Dashboard</a></li>
<li class="breadcrumb-item"><a href="<?php echo base_url();?>shops">Shops</a></li>
<li class="breadcrumb-item <?php if($this->uri->segment(1)=='editshop/'.$shop->id) { echo 'active';}?>"><a href="<?php echo base_url();?>editshop/<?php echo $shop->id;?>">Edit Shop</a></li>
</ol>
</div>

<div class="card mb-4">
<h6 class="card-header">Edit Shop</h6>
<div class="card-body">
<form action="<?php echo base_url();?>edit_shop" method="post" enctype="multipart/form-data">

<div class="form-row">
<input type="hidden" name="id" class="form-control" value="<?php echo $shop->id;?>" minlength="100">
<div class="form-group col-md-6">
<label class="form-label">Shop Name</label>
<input type="text" name="shop" id="shop" class="form-control" placeholder="Shop Name" value="<?php echo $shop->shop;?>" maxlength="100">
<div class="clearfix"></div>
</div>

<div class="form-group col-md-6">
<label class="form-label">Shop Image</label>
<div class="col"><img class="img-radius img-fluid wid-80" src="<?php echo base_url();?>assets/img/shop/<?php echo $shop->shopimage;?>" alt="Brand image"></div>
<input type="file" name="shopimage" id="shopimage" class="form-control" id="Icon" placeholder="sdf">
<div class="clearfix"></div>
</div>

</div>

<div class="form-row">

<div class="form-group col-md-6">
<label class="form-label">Manager</label>
<input type="text" name="manager" id="manager" class="form-control" placeholder="Manager Name" value="<?php echo $shop->manager;?>" maxlength="100">
<div class="clearfix"></div>
</div>

<div class="form-group col-md-6">
<label class="form-label">Contact No</label>
<input type="text" name="contact" id="contact" class="form-control" placeholder="Contact No" value="<?php echo $shop->contact;?>" maxlength="100">
<div class="clearfix"></div>
</div>

</div>

<div class="form-row">

<div class="form-group col-md-4">
<label class="form-label">State</label>
<select class="custom-select" name="state" id="state">
<option>Select State</option>
<option value="Madhya Pradesh">Madhya Pradesh</option>
<option value="Andhra Pradesh">Andhra Pradesh</option>
<option value="Uttar Pradesh">Uttar Pradesh</option>
</select>
<div class="clearfix"></div>
</div>

<div class="form-group col-md-4">
<label class="form-label">City</label>
<select class="custom-select" name="city" id="city">
<option>Select City</option>
<option value="Bhopal">Bhopal</option>
<option value="Betul">Betul</option>
<option value="Indore">Indore</option>
</select>
<div class="clearfix"></div>
</div>

<div class="form-group col-md-4">
<label class="form-label">Pin Code</label>
<input type="text" name="pincode" id="pincode" class="form-control" placeholder="Pincode" value="<?php echo $shop->pincode;?>" maxlength="6">
<div class="clearfix"></div>
</div>

</div>

<div class="form-row">

<div class="form-group col-md-12">
<label class="form-label">Address</label>
<input type="text" name="address" id="address" class="form-control" placeholder="1234 Main St" value="<?php echo $shop->address;?>" maxlength="200">
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