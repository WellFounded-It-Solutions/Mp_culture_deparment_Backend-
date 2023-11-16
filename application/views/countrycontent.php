<div class="col-sm-12">
<div class="card">
<div class="card-header">
<h5>Countries Summary</h5>
</div>
<div class="card-body text-center">

<div class="row">
<div class="col-md-3 col-xs-6">
<h3 class="text-info"><a href="<?php echo base_url();?>countrytoday" class="text-info"><?php if(isset($countcountrytoday)){echo $countcountrytoday;} else { echo "";}?></a></h3>
<span class="text-info">Today Countries</span>
</div>
<div class="col-md-3 col-xs-6">
<h3 class="text-success"><a href="<?php echo base_url();?>countryactive" class="text-success"><?php if(isset($countcountryactive)){echo $countcountryactive;} else { echo "";}?></a></h3>
<span class="text-success">Active Countries</span>
</div>
<div class="col-md-3 col-xs-6">
<h3 class="text-danger"><a href="<?php echo base_url();?>countryinactive" class="text-danger"><?php if(isset($countcountryinactive)){echo $countcountryinactive;} else { echo "";}?></a></h3>
<span class="text-danger">Inactive Countries</span>
</div>
<div class="col-md-3 col-xs-6">
<h3 class="text-dark"><a href="<?php echo base_url();?>country" class="text-dark"><?php if(isset($countcountry)){echo $countcountry;} else { echo "";}?></a></h3>
<span class="text-dark">Total Countries</span>
</div>


</div>
</div>
</div> 
</div>