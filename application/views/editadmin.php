<?php include("header.php");?>

<div class="layout-content">

<div class="container-fluid flex-grow-1 container-p-y">
<h4 class="font-weight-bold py-3 mb-0">Edit Admin user</h4>
<div class="text-muted small mt-0 mb-4 d-block breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard"><i class="feather icon-home"></i></a></li>
<li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard">Dashboard</a></li>
<li class="breadcrumb-item"><a href="<?php echo base_url();?>home/admins">Admin</a></li>
<li class="breadcrumb-item "><a href="#">Edit User</a></li>
</ol>
</div>

<div class="card mb-4">
<h6 class="card-header">Edit Admin</h6>
<div class="card-body">
<form action="<?php echo base_url();?>home/edit_admin" method="post" enctype="multipart/form-data">
<div class="form-row">
<input type="hidden" name="id" class="form-control" value="<?php echo $customer->id;?>" minlength="100">
<!--<div class="form-group col-md-3">
<label class="form-label">User Type</label>
<select class="custom-select" name="types" id="sex">
<option value="Admin" <?php if($customer->roles=='Admin'){echo "selected";}?>>Admin</option>
<option value="User" <?php if($customer->roles=='User'){echo "selected";}?>>User</option>
</select>
<div class="clearfix"></div>
</div>-->

<div class="form-group col-md-4">
<label class="form-label">Name</label>
<input type="text" name="name" id="name" class="form-control" placeholder="Full Name" value="<?php echo $customer->name;?>">
<div class="clearfix"></div>
</div>

<div class="form-group col-md-4">
<label class="form-label">Mobile</label>
<input type="mobile" name="mobile"  class="form-control" placeholder="mobile" value="<?php echo $customer->mobile;?>">
<div class="clearfix"></div>
</div>

    
<div class="form-group col-md-4">
<label class="form-label">Gender</label>
<select class="custom-select" name="sex" id="sex">
<option value="Male">Male</option>
<option value="Female">Female</option>
</select>
<div class="clearfix"></div>
</div>
<div class="form-group col-md-4">
<label class="form-label">Email</label>
<input type="email" name="email" id="email" class="form-control" placeholder="Email" value="<?php echo $customer->email;?>" minlength="60">
<div class="clearfix"></div>
</div>

<div class="form-group col-md-4">
<label class="form-label">Password</label>
<input type="password" name="password"  class="form-control" placeholder="password" value="<?php echo $customer->password;?>" minlength="60">
<div class="clearfix"></div>
</div>
<div class="form-group col-md-4">
<label class="form-label">Address</label>
<input type="text" name="address" id="address" class="form-control" placeholder="Address" value="<?php echo $customer->address;?>">
<div class="clearfix"></div>
</div>



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
<input type="text" name="city" class="form-control" value="<?php echo $customer->city;?>" placeholder="Enter city" >
<div class="clearfix"></div>
</div>
<div class="form-group col-md-4">
<label class="form-label">Date of Birth</label>
<input type="date" name="dob" class="form-control" value="<?php echo $customer->dob;?>">
<div class="clearfix"></div>
</div>

<div class="form-group col-md-4">
<label class="form-label">Age</label>
<input type="text" name="age" id="age" class="form-control" value="<?php echo $customer->age;?>">
<div class="clearfix"></div>
</div>


</div>




<button type="submit" class="btn btn-primary">Update</button>

</form>
</div>
</div>

</div>
</div>


<?php include("footer.php");?>

