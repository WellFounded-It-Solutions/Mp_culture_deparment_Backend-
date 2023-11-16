<div class="col-sm-12">
<div class="card">
<div class="card-header">
<h5>Pin Codes Summary</h5>
</div>
<div class="card-body text-center">

<div class="row">
<div class="col-md-3 col-xs-6">
<h3 class="text-info"><a href="<?php echo base_url();?>pincodetoday" class="text-info"><?php if(isset($countpincodetoday)){echo $countpincodetoday;} else { echo "";}?></a></h3>
<span class="text-info">Today Pin Codes</span>
</div>
<div class="col-md-3 col-xs-6">
<h3 class="text-success"><a href="<?php echo base_url();?>pincodeactive" class="text-success"><?php if(isset($countpincodeactive)){echo $countpincodeactive;} else { echo "";}?></a></h3>
<span class="text-success">Active Pin Codes</span>
</div>
<div class="col-md-3 col-xs-6">
<h3 class="text-danger"><a href="<?php echo base_url();?>pincodeinactive" class="text-danger"><?php if(isset($countpincodeinactive)){echo $countpincodeinactive;} else { echo "";}?></a></h3>
<span class="text-danger">Inactive Pin Codes</span>
</div>
<div class="col-md-3 col-xs-6">
<h3 class="text-dark"><a href="<?php echo base_url();?>pincode" class="text-dark"><?php if(isset($countpincode)){echo $countpincode;} else { echo "";}?></a></h3>
<span class="text-dark">Total Pin Codes</span>
</div>


</div>
</div>
</div> 
</div>