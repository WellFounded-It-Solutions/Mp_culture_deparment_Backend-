
<?php 
if(($_SESSION['division']) && ($_SESSION['company']) &&  ($_SESSION['year'])){
 include("header_comp.php");
}elseif(($_SESSION['division'])  && ($_SESSION['company'])){
include("header_comp.php");
}elseif($_SESSION['division']){
include("header_div.php");
}else{
include("header.php");
}?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<link rel="stylesheet" href="<?php echo base_url();?>assets/back/libs/bootstrap-select/bootstrap-select.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/back/libs/bootstrap-multiselect/bootstrap-multiselect.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/back/libs/select2/select2.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/back/libs/bootstrap-tagsinput/bootstrap-tagsinput.css">
<div class="layout-content">

<div class="container-fluid flex-grow-1 container-p-y">
<h4 class="font-weight-bold py-3 mb-0">Add Vendor</h4>
<div class="text-muted small mt-0 mb-4 d-block breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard"><i class="feather icon-home"></i></a></li>
<li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard">Dashboard</a></li>
<li class="breadcrumb-item"><a href="<?php echo base_url();?>vendors">Vendors</a></li>
<li class="breadcrumb-item <?php if($this->uri->segment(1)=='addvendor') { echo 'active';}?>"><a href="<?php echo base_url();?>addvendor">Add Vendor</a></li>
</ol>
</div>
<div class="card mb-2">


<div id="accordion2">
<div class="card mb-2">
<div class="card-header bg-primary">
<a class="d-flex justify-content-between text-white text-large text-uppercase" data-toggle="collapse" aria-expanded="true" href="#accordion2-1">Personal Details<div class="collapse-icon"></div></a>
</div>
<div id="accordion2-1" class="collapse show" data-parent="#accordion2">
<div class="card-body">

<form action="<?php echo base_url();?>add_vendor" method="post" enctype="multipart/form-data">

<div class="form-row">

<div class="form-group col-md-6">
<label class="form-label">Vendor Name </label>
<input type="text" name="name" id="name" class="form-control" placeholder="Full Name" maxlength="100">
<div class="clearfix"></div>
</div>
<div class="form-group col-md-6">
    <?php $income= $this->uri->segment(3);?>
    <input type="hidden" name="income" value="<?php echo $income;?>"  class="form-control">
    <input type="hidden" name="division" value="<?php echo $_SESSION['division'];?>"  class="form-control">
    <input type="hidden" name="company" value="<?php echo $_SESSION['company'];?>"  class="form-control">
<label class="form-label">Company/Firm Name</label>
<input type="text" name="companyname" id="companyname" class="form-control" placeholder="Company/Firm Name" maxlength="100">
<div class="clearfix"></div>
</div>


</div>






<div class="form-row">
    <div class="form-group col-md-6">
<label class="form-label">Email</label>
<input type="email" name="email" id="email" class="form-control" placeholder="Email" maxlength="100">
<div class="clearfix"></div>
</div>
<div class="form-group col-md-6">
<label class="form-label">Mobile</label>
<input type="number" name="mobile" id="mobile" class="form-control" placeholder="Mobile" maxlength="10">
<div class="clearfix"></div>
</div>


</div>




</div>

<!--<div class="form-row">-->

<!--<div class="form-group col-md-6">-->
<!--<button type="submit" class="btn btn-primary">Save</button>-->
<!--</div>-->

<!--</div>-->

<!--</form>-->




</div>
</div>
</div>
<div class="form-row">

<div class="form-group col-md-6">
<input type="submit" name="submit" class="btn btn-primary" value="Save">
</div>

</div>

</form>

<!--<div class="card mb-2">
<div class="card-header">
<a class="collapsed d-flex justify-content-between text-dark" data-toggle="collapse" aria-expanded="true" href="#accordion2-4">Other Details<div class="collapse-icon"></div></a>
</div>
<div id="accordion2-4" class="collapse show" data-parent="#accordion2">
<div class="card-body">

<div class="form-row">

<div class="form-group col-md-6">
<label class="form-label">Contact Person Name</label>
<input type="text" name="pname" id="pname" class="form-control" placeholder="Contact Person Name" maxlength="100">
<div class="clearfix"></div>
</div>

<div class="form-group col-md-6">
<label class="form-label">Contact Person Email</label>
<input type="email" name="pemail" id="pemail" class="form-control" placeholder="Contact Person Email" maxlength="100">
<div class="clearfix"></div>
</div>

</div>

<div class="form-row">

<div class="form-group col-md-6">
<label class="form-label">Contact Person Mobile</label>
<input type="text" name="pmobile" id="pmobile" class="form-control" placeholder="Contact Person Mobile" maxlength="100">
<div class="clearfix"></div>
</div>

<div class="form-group col-md-6">
<label class="form-label">Contact Person Designation</label>
<input type="text" name="pdesignation" id="pdesignation" class="form-control" placeholder="Contact Person Designation" maxlength="100">
<div class="clearfix"></div>
</div>

</div>

<div class="form-row">

<div class="form-group col-md-6">
<label class="form-label">Contact Person Name</label>
<input type="text" name="pname2" id="pname2" class="form-control" placeholder="Contact Person Name" maxlength="100">
<div class="clearfix"></div>
</div>

<div class="form-group col-md-6">
<label class="form-label">Contact Person Email</label>
<input type="email" name="pemail2" id="pemail2" class="form-control" placeholder="Contact Person Email" maxlength="100">
<div class="clearfix"></div>
</div>

</div>

<div class="form-row">

<div class="form-group col-md-6">
<label class="form-label">Contact Person Mobile</label>
<input type="text" name="pmobile2" id="pmobile2" class="form-control" placeholder="Contact Person Mobile" maxlength="100">
<div class="clearfix"></div>
</div>

<div class="form-group col-md-6">
<label class="form-label">Contact Person Designation</label>
<input type="text" name="pdesignation2" id="pdesignation2" class="form-control" placeholder="Contact Person Designation" maxlength="100">
<div class="clearfix"></div>
</div>

</div>


<div class="form-row">
<div class="form-group col-md-6">
<button type="submit" class="btn btn-primary">Save</button>
<div class="clearfix"></div>
</div>
</div>
</form>
</div>
</div>
</div> -->



</div>
</div>


<script type="text/javascript">
   $(document).ready(function(){
    //group add limit
    var maxGroup = 10;
    
    //add more fields group
    $(".addMore").click(function(){
        if($('body').find('.fieldGroup').length < maxGroup){
            var fieldHTML = '<div class="form-group fieldGroup">'+$(".fieldGroupCopy").html()+'</div>';
            $('body').find('.fieldGroup:last').after(fieldHTML);
        }else{
            alert('Maximum '+maxGroup+' groups are allowed.');
        }
    });
    
    //remove fields group
    $("body").on("click",".remove",function(){ 
        $(this).parents(".fieldGroup").remove();
    });
});
</script>

<!-- <script type="text/javascript">
    $(document).ready(function(){      
      var i=1;  
   
      $('#add').click(function(){  
           i++;  
           $('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added"><td><input type="text" name="addmore[][name]" placeholder="your Name" class="form-control name_list" required /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
      });
  
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      });  
  
    });  
</script> -->





<?php include("footer.php");?>