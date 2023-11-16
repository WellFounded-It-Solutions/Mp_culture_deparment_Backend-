
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
<div class="card-header bg-info">
<a class="d-flex justify-content-between text-white text-large text-uppercase" data-toggle="collapse" aria-expanded="true" href="#accordion2-2">Company/Firm Details<div class="collapse-icon"></div></a>
</div>
<div id="accordion2-2" class="collapse show" data-parent="#accordion2">
<div class="card-body">

<div class="form-row">

<!--<div class="form-group col-md-6">
<label class="form-label">Company Type</label>
<select class="custom-select" name="companytype" id="companytype">
<option>Select Company Type</option>
<option value="1">Private Ltd</option>
<option value="2">Public Ltd</option>
<option value="3">Limited Liability Partnership (LLP)</option>
<option value="4">One Person Company (OPC)</option>
<option value="5">Partnership</option>
<option value="6">Sole Proprietorship</option>
</select>
<div class="clearfix"></div>
</div>

<div class="form-group col-md-6">
<label class="form-label">Sector</label>
<div class="clearfix"></div>

<?php
    $sects=$sector;
?>
<select id="bs-multiselect-2" name="sector[]" multiple>

<?php foreach($sector as $sec) { ?>
    

    <?php $selected = in_array($sec['id'],$sects) ? " selected " : null;?>
                <option value="<?php echo $sec['id'];?>"
                    <?=$selected?> ><?php echo $sec['sector'];?>

<?php } ?>
</select>

<div class="clearfix"></div>
</div> -->

</div>

<div class="form-row">

<div class="form-group col-md-6">
    <input type="hidden" name="division" value="<?php echo $_SESSION['division'];?>"  class="form-control">
    <input type="hidden" name="company" value="<?php echo $_SESSION['company'];?>"  class="form-control">
<label class="form-label">Company/Firm Name</label>
<input type="text" name="companyname" id="companyname" class="form-control" placeholder="Company/Firm Name" maxlength="100">
<div class="clearfix"></div>
</div>

<div class="form-group col-md-6">
<label class="form-label">Company/Firm Owner Name</label>
<input type="text" name="companyownername" id="companyownername" class="form-control" placeholder="Company/Firm Owner Name" maxlength="100">
<div class="clearfix"></div>
</div>

</div>

<div class="form-row">
    <div class="clearfix"><br/></div>
</div>

<div class="form-row">

<div class="form-group col-md-6">
<label class="form-label">Opening Balance</label>
<input type="text" name="openingbal" id="openingbal" class="form-control" placeholder="Opening Balance like 5000" maxlength="10">
<div class="clearfix"></div>
</div>

<div class="form-group col-md-6">
<label class="form-label">Credit/Debit</label>
<select class="custom-select" name="crdr" id="crdr">
<option value="1">Credit</option>
<option value="2">Debit</option>
</select>
<div class="clearfix"></div>
</div>

</div>

<div class="form-row">
    <div class="clearfix"><br/></div>
</div>

<div class="form-row">

<div class="form-group col-md-6">
<label class="form-label">Company/Firm GST No.</label>
<input type="text" name="gstno" id="gstno" class="form-control" placeholder="Company/Firm GST No" maxlength="100">
<div class="clearfix"></div>
</div>

<div class="form-group col-md-6">
<label class="form-label">Company/Firm Status</label>
<select class="custom-select" name="companystatus" id="companystatus">
<option>Select Company/Firm Status</option>
<option value="1">Active</option>
<option value="0">Inactive</option>
</select>
<div class="clearfix"></div>
</div>

</div>

<div class="form-row">
    <div class="clearfix"><br/></div>
</div>


<div class="form-row">



<div class="form-group col-md-6">
<label class="form-label">State</label>

<select class="custom-select" name="state" id="sel_state">
<?php foreach($state as $st) { ?>
<option value="<?php echo $st['id'];?>"><?php echo $st['state'];?></option>
<?php } ?>
</select>
<div class="clearfix"></div>
</div>

<div class="form-group col-md-6">
<label class="form-label">City</label>
<!-- <select class="custom-select" name="city" id="city" required>
<?php foreach($city as $c) { ?>
<option value="<?php echo $c['id'];?>"><?php echo $c['city'];?></option>
<?php } ?>
</select> -->
<select class="custom-select" name="city" id='sel_city'>
    <option>-- Select City --</option>
</select>
<div class="clearfix"></div>
</div>



</div>

<div class="form-row">
    <div class="clearfix"><br/></div>
</div>

<div class="form-row">
<div class="form-group col-md-6">
<label class="form-label">Area</label>
<!-- <select class="custom-select" name="area" id="area" required>
<?php foreach($area as $ar) { ?>
<option value="<?php echo $ar['id'];?>"><?php echo $ar['area'];?></option>
<?php } ?>
</select> -->
<select class="custom-select" name="area" id='sel_area'>
    <option>-- Select Area --</option>
</select>
<div class="clearfix"></div>
</div>
<div class="form-group col-md-6">
<label class="form-label">Pin Code</label>
<!-- <select class="custom-select" name="pincode" id="pincode" required>
<?php foreach($pincode as $pc) { ?>
<option value="<?php echo $pc['id'];?>"><?php echo $pc['pincode'];?></option>
<?php } ?>
</select> -->
<select class="custom-select" name="pincode" id='sel_pin'>
    <option>-- Select Pincode--</option>
</select>
<div class="clearfix"></div>
</div>



<!-- Script -->
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script type='text/javascript'>
// baseURL variable
var baseURL= "<?php echo base_url();?>";

$(document).ready(function(){

  // State change
  $('#sel_state').change(function(){
    var state = $(this).val();

    // AJAX request
    $.ajax({
      url:'<?=base_url()?>home/getCities',
      method: 'post',
      data: {state: state},
      dataType: 'json',
      success: function(response){

        // Remove options 
        $('#sel_city').find('option').not(':first').remove();
        $('#sel_area').find('option').not(':first').remove();
        $('#sel_pin').find('option').not(':first').remove();

        // Add options
        $.each(response,function(index,data){
           $('#sel_city').append('<option value="'+data['id']+'">'+data['city']+'</option>');
        });
      }
   });
 });

 // City change
 $('#sel_city').change(function(){
   var city = $(this).val();

   // AJAX request
   $.ajax({
     url:'<?=base_url()?>home/getAreas',
     method: 'post',
     data: {city: city},
     dataType: 'json',
     success: function(response){

       // Remove options
       $('#sel_area').find('option').not(':first').remove();
       $('#sel_pin').find('option').not(':first').remove();

       // Add options
       $.each(response,function(index,data){
         $('#sel_area').append('<option value="'+data['id']+'">'+data['area']+'</option>');
       });
     }
  });
});

// Area change
$('#sel_area').change(function(){
   var area = $(this).val();

   // AJAX request
   $.ajax({
     url:'<?=base_url()?>home/getPincodes',
     method: 'post',
     data: {area: area},
     dataType: 'json',
     success: function(response){

       // Remove options
    
      // $('#sel_pin').find('option').not(':first').remove();

       // Add options
       $.each(response,function(index,data){
         $('#sel_pin').append('<option value="'+data['id']+'">'+data['pincode']+'</option>');
       });
     }
  });
});


});
</script>

<div class="form-row">
    <div class="clearfix"><br/></div>
</div>


</div>
<div class="form-row">
    <div class="clearfix"><br/></div>
</div>
<div class="form-row">

<div class="form-group col-md-12">
<label class="form-label">Company/Firm Address</label>
<input type="text" name="companyaddress" id="companyaddress" class="form-control" placeholder="Company/Firm Address" maxlength="100">
<div class="clearfix"></div>
</div>
</div>
</div>
</div>
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
<label class="form-label">Vendor Name</label>
<input type="text" name="name" id="name" class="form-control" placeholder="Full Name" maxlength="100">
<div class="clearfix"></div>
</div>

<div class="form-group col-md-6">
<label class="form-label">Email</label>
<input type="email" name="email" id="email" class="form-control" placeholder="Email" maxlength="100">
<div class="clearfix"></div>
</div>

</div>






<div class="form-row">
<div class="form-group col-md-6">
<label class="form-label">Mobile</label>
<input type="number" name="mobile" id="mobile" class="form-control" placeholder="Mobile" maxlength="10">
<div class="clearfix"></div>
</div>
<div class="form-group col-md-6">
<label class="form-label">Designation</label>
<input type="text" name="designation" id="mobile" class="form-control" placeholder="Mobile" maxlength="10">
<div class="clearfix"></div>
</div>

</div>
<div class="form-row">
    
<div class="form-group col-md-6">
<label class="form-label">Gender</label>
<select class="custom-select" name="gender" id="gender">
<option value="1">Male</option>
<option value="2">Female</option>
</select>
<div class="clearfix"></div>
</div>

<div class="form-group col-md-6">
<label class="form-label">Date of Birth</label>
<input type="date" name="dob" id="dob" class="form-control" placeholder="Date of Birth">
<div class="clearfix"></div>
</div>

</div>

<!-- <div class="form-row">

<div class="form-group col-md-12">
<label class="form-label">Home Address</label>
<input type="text" name="address" id="address" class="form-control" placeholder="1234 Main St" maxlength="200"> 
<div class="clearfix"></div>
</div>

</div> -->




<div class="form-row">

<div class="form-group col-md-4">
<label class="form-label">Profile Image</label>
<input type="file" name="profileimage" id="profileimage" class="form-control" placeholder="sdf">
<div class="clearfix"></div>
</div>

<!-- <div class="form-group col-md-4">


<label class="form-label">Id Proof</label>
<div class="clearfix"></div>
<label class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="idproof" value="1">
<span class="form-check-label">Adhaar Card</span>
</label>
<label class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="idproof" value="2">
<span class="form-check-label">Voter ID</span>
</label>
<label class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="idproof" value="3">
<span class="form-check-label">Driving License</span>
</label>

<input type="file" name="idproofno" id="idproofno" class="form-control" placeholder="sdf">
<div class="clearfix"></div>
</div> -->

<!-- <div class="form-group col-md-4">
<label class="form-label">PAN Card</label>
<input type="text" name="pancardno" id="pancardno" class="form-control" placeholder="Pan Card No" maxlength="10">
<input type="file" name="pancard" id="pancard" class="form-control" placeholder="sdf">
<div class="clearfix"></div>
</div> -->

</div>



</div>
</div>
</div>



<div class="card mb-2">
<div class="card-header bg-success">
<a class="d-flex justify-content-between text-white text-large text-uppercase" data-toggle="collapse" aria-expanded="true" href="#accordion2-3">Bank Account Details<div class="collapse-icon"></div></a>
</div>
<div id="accordion2-3" class="collapse show" data-parent="#accordion2">
<div class="card-body">

<div class="form-row">

<div class="form-group col-md-6">
<label class="form-label">Bank Name</label>
<input type="text" name="bankname" id="bankname" class="form-control" placeholder="Bank Name" maxlength="100">
<div class="clearfix"></div>
</div>

<div class="form-group col-md-6">
<label class="form-label">Account Holder Name</label>
<input type="text" name="accountholder" id="accountholder" class="form-control" placeholder="Account Holder Name" maxlength="100">
<div class="clearfix"></div>
</div>

</div>

<div class="form-row">
    <div class="clearfix"><br/></div>
</div>

<div class="form-row">

<div class="form-group col-md-6">
<label class="form-label">Account Number</label>
<input type="text" name="accountno" id="accountno" class="form-control" placeholder="Account Number" maxlength="100">
<div class="clearfix"></div>
</div>

<div class="form-group col-md-6">
<label class="form-label">IFSC Code</label>
<input type="text" name="ifsccode" id="ifsccode" class="form-control" placeholder="IFSC Code" maxlength="100">
<div class="clearfix"></div>
</div>

</div>

<div class="form-row">
    <div class="clearfix"><br/></div>
</div>

<div class="form-row">

<div class="form-group col-md-12">
<label class="form-label">Branch Name & Address</label>
<input type="text" name="branchnameaddress" id="branchnameaddress" class="form-control" placeholder="Branch Name & Address" maxlength="100">
<div class="clearfix"></div>
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