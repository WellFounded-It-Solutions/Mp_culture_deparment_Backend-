<div class="col-sm-12">
<div class="card">
<div class="card-header">
<h5>Cities Summary</h5>
</div>
<div class="card-body text-center">

<div class="row">
<div class="col-md-3 col-xs-6">
<h3 class="text-info"><a href="<?php echo base_url();?>citytoday" class="text-info"><?php if(isset($countcitytoday)){echo $countcitytoday;} else { echo "";}?></a></h3>
<span class="text-info">Today Cities</span>
</div>
<div class="col-md-3 col-xs-6">
<h3 class="text-success"><a href="<?php echo base_url();?>cityactive" class="text-success"><?php if(isset($countcityactive)){echo $countcityactive;} else { echo "";}?></a></h3>
<span class="text-success">Active Cities</span>
</div>
<div class="col-md-3 col-xs-6">
<h3 class="text-danger"><a href="<?php echo base_url();?>cityinactive" class="text-danger"><?php if(isset($countcityinactive)){echo $countcityinactive;} else { echo "";}?></a></h3>
<span class="text-danger">Inactive Cities</span>
</div>
<div class="col-md-3 col-xs-6">
<h3 class="text-dark"><a href="<?php echo base_url();?>city" class="text-dark"><?php if(isset($countcity)){echo $countcity;} else { echo "";}?></a></h3>
<span class="text-dark">Total Cities</span>
</div>


</div>
</div>
</div> 
</div>