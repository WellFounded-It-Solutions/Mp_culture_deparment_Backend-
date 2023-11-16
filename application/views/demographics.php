<?php include("header.php");?>
<?php //include("content.php");?>
<div class="layout-content">

<div class="container-fluid flex-grow-1 container-p-y">
<h4 class="font-weight-bold py-3 mb-0">Demographics</h4>
<div class="text-muted small mt-0 mb-4 d-block breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="<?php echo base_url();?>demographics"><i class="feather icon-home"></i></a></li>
<li class="breadcrumb-item active"><a href="<?php echo base_url();?>demographics">Demographics</a></li>
</ol>
</div>
<h4 class="font-weight-bold py-3 mb-0"></h4>
<div class="row">

<?php include("demographcontent.php");?>

</div>

</div>
</div>

<?php include("footer.php");?>

