<?php include("header.php");?>
<?php //include("content.php");?>
<div class="layout-content">

<div class="container-fluid flex-grow-1 container-p-y">
<h4 class="font-weight-bold py-3 mb-0">Masters</h4>
<div class="text-muted small mt-0 mb-4 d-block breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="<?php echo base_url();?>master"><i class="feather icon-home"></i></a></li>
<li class="breadcrumb-item active"><a href="<?php echo base_url();?>master">Masters</a></li>
</ol>
</div>
<h4 class="font-weight-bold py-3 mb-0"></h4>
<div class="row">



<div class="col-sm-6 col-xl-3">
<div class="card mb-4">
<div class="card-body">
<div class="d-flex align-items-center">
<div class="lnr"><a href="<?php echo base_url();?>home/payment_for"><i class="lnr lnr-database bg-info ui-rounded-icon"></i></a></div>
<div class="ml-4">
<a href="<?php echo base_url();?>home/payment_for"><h6 class="card-header-title mb-0 text-info text-center">Income Head</h6></a>
<a href="<?php echo base_url();?>home/payment_for" class="text-info"><h2 class="text-center"><?php if(isset($countcategory)){echo $countcategory;} else { echo "";}?></h2></a>

<a href="<?php echo base_url();?>home/payment_for"><button class="btn btn-info btn-sm btn-round">Click Here to View</button></a>

</div>
</div>
</div>
</div>
</div>

<div class="col-sm-6 col-xl-3">
<div class="card mb-4">
<div class="card-body">
<div class="d-flex align-items-center">
<div class="lnr"><a href="<?php echo base_url();?>home/expence_head"><i class="lnr lnr-book bg-warning ui-rounded-icon"></i></a></div>
<div class="ml-4">
<a href="<?php echo base_url();?>"><h6 class="card-header-title mb-0 text-warning text-center">Expense Head</h6></a>
<a href="<?php echo base_url();?>home/expence_head" class="text-warning"><h2 class="text-center"><?php if(isset($countsubcategory)){echo $countsubcategory;} else { echo "";}?></h2></a>

<a href="<?php echo base_url();?>home/expence_head"><button class="btn btn-warning btn-sm btn-round">Click Here to View</button></a>

</div>
</div>
</div>
</div>
</div>

<!--<div class="col-sm-6 col-xl-3">
<div class="card mb-4">
<div class="card-body">
<div class="d-flex align-items-center">
<div class="lnr"><a href="<?php echo base_url();?>subcategorytype"><i class="lnr lnr-map bg-danger ui-rounded-icon"></i></a></div>
<div class="ml-4">
<a href="<?php echo base_url();?>"><h6 class="card-header-title mb-0 text-danger text-center">Subcategory Types</h6></a>
<a href="<?php echo base_url();?>subcategorytype" class="text-danger"><h2 class="text-center"><?php if(isset($countsubcategorytype)){echo $countsubcategorytype;} else { echo "";}?></h2></a>

<a href="<?php echo base_url();?>subcategorytype"><button class="btn btn-danger btn-sm btn-round">Click Here to View</button></a>

</div>
</div>
</div>
</div>
</div> -->


<!-- <div class="col-sm-6 col-xl-3">
<div class="card mb-4">
<div class="card-body">
<div class="d-flex align-items-center">
<div class="lnr"><a href="<?php echo base_url();?>products"><i class="lnr lnr-poop bg-success ui-rounded-icon"></i></a></div>
<div class="ml-4">
<a href="<?php echo base_url();?>"><h6 class="card-header-title mb-0 text-success text-center"></h6></a>
<a href="<?php echo base_url();?>products" class="text-success"><h2 class="text-center"><?php if(isset($countproducts)){echo $countproducts;} else { echo "";}?></h2></a>

<a href="<?php echo base_url();?>products"><button class="btn btn-success btn-sm btn-round">Click Here to View</button></a>

</div>
</div>
</div>
</div>
</div>



<div class="col-sm-6 col-xl-3">
<div class="card mb-4">
<div class="card-body">
<div class="d-flex align-items-center">
<div class="lnr"><a href="<?php echo base_url();?>manufacturers"><i class="lnr lnr-construction bg-dark ui-rounded-icon"></i></a></div>
<div class="ml-4">
<a href="<?php echo base_url();?>"><h6 class="card-header-title mb-0 text-dark text-center"></h6></a>
<a href="<?php echo base_url();?>manufacturers" class="text-dark"><h2 class="text-center"><?php if(isset($countmanufacturers)){echo $countmanufacturers;} else { echo "";}?></h2></a>

<a href="<?php echo base_url();?>manufacturers"><button class="btn btn-dark btn-sm btn-round">Click Here to View</button></a>

</div>
</div>
</div>
</div>
</div>





 -->






</div>
</div>
</div>










<?php include("footer.php");?>

