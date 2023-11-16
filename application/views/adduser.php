<?php include("header.php");?>

<div class="layout-content">

<div class="container-fluid flex-grow-1 container-p-y">
<h4 class="font-weight-bold py-3 mb-0">Add User</h4>
<div class="text-muted small mt-0 mb-4 d-block breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard"><i class="feather icon-home"></i></a></li>
<li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard">Dashboard</a></li>
<li class="breadcrumb-item"><a href="<?php echo base_url();?>users">User</a></li>
<li class="breadcrumb-item <?php if($this->uri->segment(1)=='adduser') { echo 'active';}?>"><a href="<?php echo base_url();?>adduser">Add User</a></li>
</ol>
</div>

<div class="card mb-4">
<h6 class="card-header">Add User</h6>
<div class="card-body">
<form action="<?php echo base_url();?>add_user" method="post" enctype="multipart/form-data">
<div class="form-row">
<?php echo $this->session->flashdata('msg'); ?>
<div class="form-group col-md-3" hidden>
<label class="form-label">User Type</label>
<!--<select class="custom-select" name="types" id="sex">
<option value="Admin">Admin</option>
<option value="User">User</option>
</select>-->
<input type="text" name="types" id="" class="form-control" value="User">
<div class="clearfix"></div>
</div>
<div class="form-group col-md-4">
<label class="form-label">Name</label>
<input type="text" name="name" id="name" class="form-control" placeholder="Full Name" maxlength="100">
<div class="clearfix"></div>
</div>

<div class="form-group col-md-4">
<label class="form-label">Mobile</label>
<input type="number" name="mobile" id="" class="form-control" placeholder="Mobile" maxlength="60">
<span></span>
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
</div>

<div class="form-row">
  
<div class="form-group col-md-4">
<label class="form-label">Emai ID</label>
<input type="email" name="email" id="email" class="form-control" placeholder="email" maxlength="60">
<div class="clearfix"></div>
</div>  
<div class="form-group col-md-4">
<label class="form-label">Password</label>
<input type="password" name="password" id="" class="form-control" placeholder="Password" maxlength="60">
<div class="clearfix"></div>
</div> 

<div class="form-group col-md-4">
<label class="form-label">Address</label>
<input type="text" name="address" id="address" class="form-control" placeholder="1234 Main St" maxlength="200">
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
<input type="text" name="city" id="city" class="form-control" placeholder="city">
<div class="clearfix"></div>
</div>

<div class="form-group col-md-4">
<label class="form-label">DOB</label>
<input type="date" name="dob" id="" class="form-control" placeholder="dob">
<div class="clearfix"></div>
</div>

<div class="form-group col-md-4">
<label class="form-label">Age</label>
<input type="text" name="age" id="" class="form-control" placeholder="age" maxlength="6">
<div class="clearfix"></div>
</div>

</div>

<div class="form-row">


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