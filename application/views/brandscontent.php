<div class="col-sm-12">
<div class="card">
<div class="card-header">
<h5>Brands Summary</h5>
</div>
<div class="card-body text-center">

<div class="row">
<div class="col-md-3 col-xs-6">
<h3 class="text-info"><a href="<?php echo base_url();?>brandstoday" class="text-info"><?php if(isset($countbrandstoday)){echo $countbrandstoday;} else { echo "";}?></a></h3>
<span class="text-info">Today Brands</span>
</div>
<div class="col-md-3 col-xs-6">
<h3 class="text-success"><a href="<?php echo base_url();?>brandsactive" class="text-success"><?php if(isset($countbrandsactive)){echo $countbrandsactive;} else { echo "";}?></a></h3>
<span class="text-success">Active Brands</span>
</div>
<div class="col-md-3 col-xs-6">
<h3 class="text-danger"><a href="<?php echo base_url();?>brandsinactive" class="text-danger"><?php if(isset($countbrandsinactive)){echo $countbrandsinactive;} else { echo "";}?></a></h3>
<span class="text-danger">Inactive Brands</span>
</div>
<div class="col-md-3 col-xs-6">
<h3 class="text-dark"><a href="<?php echo base_url();?>brands" class="text-dark"><?php if(isset($countbrands)){echo $countbrands;} else { echo "";}?></a></h3>
<span class="text-dark">Total Brands</span>
</div>


</div>
</div>
</div> 
</div>