<div class="col-sm-12">
<div class="card">
<div class="card-header">
<h5>States Summary</h5>
</div>
<div class="card-body text-center">

<div class="row">
<div class="col-md-3 col-xs-6">
<h3 class="text-info"><a href="<?php echo base_url();?>statetoday" class="text-info"><?php if(isset($countstatetoday)){echo $countstatetoday;} else { echo "";}?></a></h3>
<span class="text-info">Today States</span>
</div>
<div class="col-md-3 col-xs-6">
<h3 class="text-success"><a href="<?php echo base_url();?>stateactive" class="text-success"><?php if(isset($countstateactive)){echo $countstateactive;} else { echo "";}?></a></h3>
<span class="text-success">Active States</span>
</div>
<div class="col-md-3 col-xs-6">
<h3 class="text-danger"><a href="<?php echo base_url();?>stateinactive" class="text-danger"><?php if(isset($countstateinactive)){echo $countstateinactive;} else { echo "";}?></a></h3>
<span class="text-danger">Inactive States</span>
</div>
<div class="col-md-3 col-xs-6">
<h3 class="text-dark"><a href="<?php echo base_url();?>state" class="text-dark"><?php if(isset($countstate)){echo $countstate;} else { echo "";}?></a></h3>
<span class="text-dark">Total States</span>
</div>


</div>
</div>
</div> 
</div>