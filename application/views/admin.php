<?php include("header.php");?>

<div class="container-fluid flex-grow-1 container-p-y">
<h4 class="font-weight-bold py-3 mb-0">Admin Profile</h4>
<div class="text-muted small mt-0 mb-4 d-block breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard"><i class="feather icon-home"></i></a></li>
<li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard">Dashboard</a></li>
<li class="breadcrumb-item"><a href="<?php echo base_url();?>admin">Admin</a></li>
</ol>
</div>


<div class="card overflow-hidden">
<div class="row no-gutters row-bordered row-border-light">

<div class="col-md-3 pt-0">
<div class="list-group list-group-flush account-settings-links">
<a class="list-group-item list-group-item-action active" data-toggle="list" href="#account-general">General & Company / Firm / Shop Info</a>
<a class="list-group-item list-group-item-action" data-toggle="list" href="#account-change-password">Change password</a>
<!-- <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-info">Company / Firm Info</a> -->
<a class="list-group-item list-group-item-action" data-toggle="list" href="#account-social-links">Social links</a>

</div>
</div>

<div class="col-md-9">
<div class="tab-content">



<div class="tab-pane fade show active" id="account-general">
<div class="card-body media align-items-center">
<form action="<?php echo base_url();?>home/adminprofile" method="post" enctype="multipart/form-data">

<input type="hidden" name="id" class="form-control" value="<?php echo $admin->id;?>">

<div class="form-group">
<img src="<?php echo base_url();?>assets/img/user/<?php echo $admin->profileimage;?>" alt="" class="d-block ui-w-80">
</div>
<div class="form-group">
<div class="media-body ml-4">
<label class="btn btn-outline-primary">
Upload your photo
<input type="file" name="profileimage" class="account-settings-fileinput">
</label>
<div class="text-light small mt-1">Allowed JPG, GIF or PNG. Max size of 800K</div>
</div>
</div>
</div>
<hr class="border-light m-0">
<div class="card-body">
<div class="row">

<div class="form-group col-md-6">
<label class="form-label">Name</label>
<input type="text" class="form-control" name="name" value="<?php echo $admin->name;?>" maxlength="100">
<div class="clearfix"></div>
</div>

<div class="form-group col-md-6">
<label class="form-label">E-mail</label>
<input type="email" class="form-control" name="email" value="<?php echo $admin->email;?>" maxlength="100">
<!-- <div class="alert alert-warning mt-3">
Your email is not confirmed. Please check your inbox.
<br>
<a href="javascript:void(0)">Resend confirmation</a>
</div> -->
</div>
</div>

<div class="row">

<div class="form-group col-md-6">
<label class="form-label">Username</label>
<input type="text" class="form-control mb-1" name="username" value="<?php echo $admin->username;?>" maxlength="50" required>
<div class="clearfix"></div>
</div>


<div class="form-group col-md-6">
<label class="form-label">Mobile</label>
<input type="number" class="form-control" name="mobile" value="<?php echo $admin->mobile;?>" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==10) return false;" required>
<div class="clearfix"></div>
</div>

</div>

<div class="row">

<div class="form-group col-md-6">
<label class="form-label">Company / Firm  Name</label>
<input type="text" class="form-control" name="companyname" value="<?php echo $admin->companyname;?>" maxlength="100">
<div class="clearfix"></div>
</div>

<div class="form-group col-md-6">
<label class="form-label">Company / Firm Owner Name</label>
<input type="text" class="form-control" name="companyownername" value="<?php echo $admin->companyownername;?>" maxlength="100">
<div class="clearfix"></div>
</div>

</div>

<div class="row">

<div class="form-group col-md-12">
<label class="form-label">Company / Firm Address</label>
<input type="text" class="form-control" name="companyaddress" value="<?php echo $admin->companyaddress;?>" maxlength="200">
<div class="clearfix"></div>
</div>

</div>
<div class="row">
<div class="form-group">
<img src="<?php echo base_url();?>assets/img/logo/<?php echo $admin->logo;?>" alt="" class="d-block ui-w-80">
</div>
<div class="form-group">
<div class="media-body ml-4">
<label class="btn btn-outline-primary">
Upload your company / firm logo
<input type="file" name="logo" class="account-settings-fileinput">
</label>
<div class="text-light small mt-1">Allowed JPG, GIF or PNG. Max size of 800K</div>
</div>
</div>
</div>

<div class="text-right mt-3">
<button type="submit" class="btn btn-primary">Save changes</button>&nbsp;
<a href="<?php base_url('dashboard');?>"><button type="button" class="btn btn-default">Cancel</button></a>
</div>
</form>
</div>
</div>

<div class="tab-pane fade" id="account-change-password">
<div class="card-body pb-2">
<form action="<?php echo base_url();?>changepassword" method="post" enctype="multipart/form-data">
<input type="hidden" name="id" class="form-control" value="<?php echo $admin->id;?>">
<div class="form-group">
<label class="form-label">Current password</label>
<input name="oldpassword" type="password" class="form-control" value="<?php echo $admin->password;?>" maxlength="6">
<div class="clearfix"></div>
</div>
<div class="form-group">
<label class="form-label">New password</label>
<input name="newpassword" type="password" class="form-control" maxlength="6">
<div class="clearfix"></div>
</div>
<div class="form-group">
<label class="form-label">Confirm new password</label>
<input name="confirmpassword" type="password" class="form-control" maxlength="6">
<div class="clearfix"></div>
</div>
<div class="text-right mt-3">
<button type="submit" class="btn btn-primary">Update</button>&nbsp;
<a href="<?php base_url('dashboard');?>"><button type="button" class="btn btn-default">Cancel</button></a>
</div>
</form>
</div>
</div>


<!-- <div class="tab-pane fade" id="account-info">
<div class="card-body pb-2">
<div class="row">

<div class="form-group col-md-6">
<label class="form-label">Company Name</label>
<input type="text" class="form-control" name="companyname" value="" maxlength="100">
<div class="clearfix"></div>
</div>

<div class="form-group col-md-6">
<label class="form-label">Company Owner Name</label>
<input type="text" class="form-control" name="companyownername" value="" maxlength="100">
<div class="clearfix"></div>
</div>

</div>

<div class="row">

<div class="form-group col-md-12">
<label class="form-label">Company Address</label>
<input type="text" class="form-control" name="companyaddress" value="" maxlength="200">
<div class="clearfix"></div>
</div>

</div>

</div>
</div> -->


<div class="tab-pane fade" id="account-social-links">
<div class="card-body pb-2">
<form action="<?php echo base_url();?>admin" method="post" enctype="multipart/form-data">
<div class="form-group">
<label class="form-label">Google+</label>
<input type="text" class="form-control" name="google" value="<?php echo $admin->google;?>" maxlength="100">
<div class="clearfix"></div>
</div>
<div class="form-group">
<label class="form-label">Facebook</label>
<input type="text" class="form-control" name="facebook" value="<?php echo $admin->facebook;?>" maxlength="100">
<div class="clearfix"></div>
</div>
<div class="form-group">
<label class="form-label">Twitter</label>
<input type="text" class="form-control" name="twitter" value="<?php echo $admin->twitter;?>" maxlength="100">
<div class="clearfix"></div>
</div>
<div class="form-group">
<label class="form-label">Facebook</label>
<input type="text" class="form-control" name="facebook" value="<?php echo $admin->facebook;?>" maxlength="100">
<div class="clearfix"></div>
</div>
<div class="form-group">
<label class="form-label">LinkedIn</label>
<input type="text" class="form-control" name="linkedin" value="<?php echo $admin->linkedin;?>" maxlength="100">
<div class="clearfix"></div>
</div>
<div class="form-group">
<label class="form-label">Instagram</label>
<input type="text" class="form-control" name="instagram" value="<?php echo $admin->instagram;?>" maxlength="100">
<div class="clearfix"></div>
</div>

<div class="text-right mt-3">
<button type="submit" class="btn btn-primary">Save changes</button>&nbsp;
<a href="<?php base_url('dashboard');?>"><button type="button" class="btn btn-default">Cancel</button></a>
</div>
</div>
</div>

</div>
</div>


</div>
</div>
</div>
 

<?php include("footer.php");?>

