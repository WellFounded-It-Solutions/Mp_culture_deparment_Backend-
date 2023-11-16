<div class="col-sm-12">
<div class="card">
<div class="card-header">
<h5>Categories Summary</h5>
</div>
<div class="card-body text-center">

<div class="row">
<div class="col-md-3 col-xs-6">
<h3 class="text-info"><a href="<?php echo base_url();?>categorytoday" class="text-info"><?php if(isset($countcategorytoday)){echo $countcategorytoday;} else { echo "";}?></a></h3>
<span class="text-info">Today Categories</span>
</div>
<div class="col-md-3 col-xs-6">
<h3 class="text-success"><a href="<?php echo base_url();?>categoryactive" class="text-success"><?php if(isset($countcategoryactive)){echo $countcategoryactive;} else { echo "";}?></a></h3>
<span class="text-success">Active Categories</span>
</div>
<div class="col-md-3 col-xs-6">
<h3 class="text-danger"><a href="<?php echo base_url();?>categoryinactive" class="text-danger"><?php if(isset($countcategoryinactive)){echo $countcategoryinactive;} else { echo "";}?></a></h3>
<span class="text-danger">Inactive Categories</span>
</div>
<div class="col-md-3 col-xs-6">
<h3 class="text-dark"><a href="<?php echo base_url();?>category" class="text-dark"><?php if(isset($countcategory)){echo $countcategory;} else { echo "";}?></a></h3>
<span class="text-dark">Total Categories</span>
</div>


</div>
</div>
</div> 
</div>