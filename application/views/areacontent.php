<div class="col-sm-12">
<div class="card">
<div class="card-header">
<h5>Areas Summary</h5>
</div>
<div class="card-body text-center">

<div class="row">
<div class="col-md-3 col-xs-6">
<h3 class="text-info"><a href="<?php echo base_url();?>areatoday" class="text-info"><?php if(isset($countareatoday)){echo $countareatoday;} else { echo "";}?></a></h3>
<span class="text-info">Today Areas</span>
</div>
<div class="col-md-3 col-xs-6">
<h3 class="text-success"><a href="<?php echo base_url();?>areaactive" class="text-success"><?php if(isset($countareaactive)){echo $countareaactive;} else { echo "";}?></a></h3>
<span class="text-success">Active Areas</span>
</div>
<div class="col-md-3 col-xs-6">
<h3 class="text-danger"><a href="<?php echo base_url();?>areainactive" class="text-danger"><?php if(isset($countareainactive)){echo $countareainactive;} else { echo "";}?></a></h3>
<span class="text-danger">Inactive Areas</span>
</div>
<div class="col-md-3 col-xs-6">
<h3 class="text-dark"><a href="<?php echo base_url();?>area" class="text-dark"><?php if(isset($countarea)){echo $countarea;} else { echo "";}?></a></h3>
<span class="text-dark">Total Areas</span>
</div>


</div>
</div>
</div> 
</div>