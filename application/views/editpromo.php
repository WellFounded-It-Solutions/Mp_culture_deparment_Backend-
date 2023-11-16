<?php include("header.php");?>
<link rel="stylesheet" href="<?php echo base_url();?>assets/libs/quill/typography.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/libs/quill/editor.css">

<div class="layout-content">

<div class="container-fluid flex-grow-1 container-p-y">
<h4 class="font-weight-bold py-3 mb-0">Edit Promo</h4>
<div class="text-muted small mt-0 mb-4 d-block breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard"><i class="feather icon-home"></i></a></li>
<li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard">Dashboard</a></li>
<li class="breadcrumb-item"><a href="<?php echo base_url();?>promos">Promos</a></li>
<li class="breadcrumb-item <?php if($this->uri->segment(1)=='editpromo/'.$promo->id) { echo 'active';}?>"><a href="<?php echo base_url();?>editpromo/<?php echo $promo->id;?>">Edit Promo</a></li>
</ol>
</div>

<div class="card mb-4">
<h6 class="card-header">Edit Promo</h6>
<div class="card-body">
<form action="<?php echo base_url();?>edit_promo" method="post" enctype="multipart/form-data">
<div class="form-row">
<input type="hidden" name="id" class="form-control" value="<?php echo $promo->id;?>" minlength="100">
<div class="form-group col-md-6">
<label class="form-label">Promo Name</label>
<input type="text" name="promo" id="promo" class="form-control" placeholder="Promo Name" value="<?php echo $promo->promo;?>" maxlength="100">
<div class="clearfix"></div>
</div>

<div class="form-group col-md-6">
<label class="form-label">Discount</label>
<input type="text" name="discount" id="discount" class="form-control" placeholder="Discount like 50%, 25%" value="<?php echo $promo->discount;?>" maxlength="100">
<div class="clearfix"></div>
</div>

</div>

<div class="form-row">

<div class="form-group col-md-6">
<label class="form-label">Promo Image</label>
<div class="col"><img class="img-radius img-fluid wid-80" src="<?php echo base_url();?>assets/img/promo/<?php echo $promo->promoimage;?>" alt="Promo image"></div>
<input type="file" name="promoimage" id="promoimage" class="form-control" id="Icon" placeholder="sdf">
<div class="clearfix"></div>
</div>

</div>






<!-- <div class="form-row">

<div class="form-group col-md-6">
<label class="form-label">Group</label>
<select class="custom-select" name="groups" id="groups">
<option>Select Group</option>
<div class="clearfix"></div>
</select>
</div>

</div> -->


<button type="submit" class="btn btn-primary">Update</button>

</form>
</div>
</div>

</div>
</div>


<?php include("footer.php");?>