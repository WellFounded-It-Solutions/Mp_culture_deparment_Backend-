<div class="col-sm-12">
<div class="card">
<div class="card-header">
<h5>Subcategories Summary</h5>
</div>
<div class="card-body text-center">

<div class="row">
<div class="col-md-3 col-xs-6">
<h3 class="text-info"><a href="<?php echo base_url();?>subcategorytoday" class="text-info"><?php if(isset($countsubcategorytoday)){echo $countsubcategorytoday;} else { echo "";}?></a></h3>
<span class="text-info">Today Subcategories</span>
</div>
<div class="col-md-3 col-xs-6">
<h3 class="text-success"><a href="<?php echo base_url();?>subcategoryactive" class="text-success"><?php if(isset($countsubcategoryactive)){echo $countsubcategoryactive;} else { echo "";}?></a></h3>
<span class="text-success">Active Subcategories</span>
</div>
<div class="col-md-3 col-xs-6">
<h3 class="text-danger"><a href="<?php echo base_url();?>subcategoryinactive" class="text-danger"><?php if(isset($countsubcategoryinactive)){echo $countsubcategoryinactive;} else { echo "";}?></a></h3>
<span class="text-danger">Inactive Subcategories</span>
</div>
<div class="col-md-3 col-xs-6">
<h3 class="text-dark"><a href="<?php echo base_url();?>subcategory" class="text-dark"><?php if(isset($countsubcategory)){echo $countsubcategory;} else { echo "";}?></a></h3>
<span class="text-dark">Total Subcategories</span>
</div>


</div>
</div>
</div> 
</div>