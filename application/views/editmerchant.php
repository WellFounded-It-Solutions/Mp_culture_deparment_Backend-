<?php include("header.php");?>

<div class="layout-content">

<div class="container-fluid flex-grow-1 container-p-y">
<h4 class="font-weight-bold py-3 mb-0">Add Merchant</h4>
<div class="text-muted small mt-0 mb-4 d-block breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard"><i class="feather icon-home"></i></a></li>
<li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard">Dashboard</a></li>
<li class="breadcrumb-item"><a href="<?php echo base_url();?>merchants">Merchant</a></li>
<li class="breadcrumb-item <?php if($this->uri->segment(1)=='editmerchant/'.$merchant->id) { echo 'active';}?>"><a href="<?php echo base_url();?>editmerchant/<?php echo $merchant->id;?>">Edit Merchant</a></li>
</ol>
</div>

<div class="card mb-4">
<h6 class="card-header">Edit Merchant</h6>
<div class="card-body">
<form action="<?php echo base_url();?>add_merchant" method="post" enctype="multipart/form-data">
<div class="form-row">
<input type="hidden" name="id" class="form-control" value="<?php echo $merchant->id;?>" minlength="100">
<div class="form-group col-md-6">
<label class="form-label">Name</label>
<input type="text" name="name" id="name" class="form-control" placeholder="Full Name" value="<?php echo $merchant->name;?>" maxlength="100">
<div class="clearfix"></div>
</div>

<div class="form-group col-md-6">
<label class="form-label">Email</label>
<input type="email" name="email" id="email" class="form-control" placeholder="Email" value="<?php echo $merchant->email;?>" maxlength="60">
<div class="clearfix"></div>
</div>

</div>

<div class="form-row">
    
<div class="form-group col-md-6">
<label class="form-label">Sex</label>
<select class="custom-select" name="sex" id="sex">
<option value="Male">Male</option>
<option value="Female">Female</option>
</select>
<div class="clearfix"></div>
</div>

<div class="form-group col-md-6">
<label class="form-label">Date of Birth</label>
<input type="date" name="dob" id="dob" class="form-control" value="<?php echo $merchant->dob;?>" placeholder="Date of Birth">
<div class="clearfix"></div>
</div>

</div>

<div class="form-row">

<div class="form-group col-md-6">
<label class="form-label">State</label>
<select class="custom-select" name="state" id="state">
<option>Select State</option>
<option value="Madhya Pradesh">Madhya Pradesh</option>
<option value="Andhra Pradesh">Andhra Pradesh</option>
<option value="Uttar Pradesh">Uttar Pradesh</option>
</select>
<div class="clearfix"></div>
</div>

<div class="form-group col-md-6">
<label class="form-label">City</label>
<select class="custom-select" name="city" id="city">
<option>Select City</option>
<option value="Bhopal">Bhopal</option>
<option value="Betul">Betul</option>
<option value="Indore">Indore</option>
</select>
<div class="clearfix"></div>
</div>

</div>

<div class="form-row">

<div class="form-group col-md-6">
<label class="form-label">Mobile</label>
<input type="text" name="mobile" id="mobile" class="form-control" placeholder="Mobile" value="<?php echo $merchant->mobile;?>" maxlength="10">
<div class="clearfix"></div>
</div>

<div class="form-group col-md-6">
<label class="form-label">Pin Code</label>
<input type="text" name="pincode" id="pincode" class="form-control" placeholder="Pincode" value="<?php echo $merchant->pincode;?>" maxlength="6">
<div class="clearfix"></div>
</div>

</div>

<div class="form-row">

<div class="form-group col-md-12">
<label class="form-label">Home Address</label>
<input type="text" name="address" id="address" class="form-control" placeholder="1234 Main St" value="<?php echo $merchant->address;?>" maxlength="200">
<div class="clearfix"></div>
</div>

</div>

<div class="form-row">

<div class="form-group col-md-6">
<label class="form-label">Shop Name</label>
<input type="text" name="shopname" id="shopname" class="form-control" placeholder="Shop Name" value="<?php echo $merchant->shopname;?>" maxlength="200">
<div class="clearfix"></div>
</div>

<div class="form-group col-md-6">
<label class="form-label">Shop Owner Name</label>
<input type="text" name="shopowner" id="shopowner" class="form-control" placeholder="Shop Owner Name" value="<?php echo $merchant->shopowner;?>" maxlength="200">
<div class="clearfix"></div>
</div>

</div>

<div class="form-row">

<div class="form-group col-md-12">
<label class="form-label">Shop Address</label>
<input type="text" name="shopaddress" id="shopaddress" class="form-control" placeholder="Shop Address" value="<?php echo $merchant->shopaddress;?>" maxlength="200">
<div class="clearfix"></div>
</div>

</div>


<div class="form-row">

<div class="form-group col-md-6">
<div class="col"><img class="img-radius img-fluid wid-80" src="<?php echo base_url();?>assets/img/user/<?php echo $merchant->profileimage;?>" alt="Profile image"></div>
<label class="form-label">Profile Image</label>
<input type="file" name="profileimage" id="profileimage" class="form-control" id="Icon" placeholder="sdf">
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

