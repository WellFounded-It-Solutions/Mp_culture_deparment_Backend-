<?php include("header.php");?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<link rel="stylesheet" href="<?php echo base_url();?>assets/back/libs/bootstrap-select/bootstrap-select.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/back/libs/bootstrap-multiselect/bootstrap-multiselect.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/back/libs/select2/select2.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/back/libs/bootstrap-tagsinput/bootstrap-tagsinput.css">
<div class="layout-content">

<div class="container-fluid flex-grow-1 container-p-y">
<h4 class="font-weight-bold py-3 mb-0">Edit Vendor</h4>
<div class="text-muted small mt-0 mb-4 d-block breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard"><i class="feather icon-home"></i></a></li>
<li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard">Dashboard</a></li>
<li class="breadcrumb-item"><a href="<?php echo base_url();?>vendors">Vendors</a></li>
<li class="breadcrumb-item <?php if($this->uri->segment(1)=='editvendor/'.$vendor->id) { echo 'active';}?>"><a href="<?php echo base_url();?>editvendor/<?php echo $vendor->id;?>">Edit Vendor</a></li>
</ol>
</div>

<div id="accordion2">
<div class="card mb-2">
    <div class="card mb-2">
<div class="card-header bg-info">
<a class="d-flex justify-content-between text-white text-large text-uppercase" data-toggle="collapse" aria-expanded="true" href="#accordion2-2">Company/Firm Details<div class="collapse-icon"></div></a>
</div>
<div id="accordion2-2" class="collapse hidden" data-parent="#accordion2">
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
<label class="form-label">Company/Firm Name</label>
<input type="text" name="companyname" id="companyname" class="form-control" placeholder="Company/Firm Name" maxlength="100" value="<?php echo $vendor->companyname;?>" required>
<div class="clearfix"></div>
</div>

<div class="form-group col-md-6">
<label class="form-label">Company/Firm Owner Name</label>
<input type="text" name="companyownername" id="companyownername" class="form-control" placeholder="Company/Firm Owner Name" maxlength="100" value="<?php echo $vendor->companyownername;?>" required>
<div class="clearfix"></div>
</div>

</div>

<div class="form-row">
    <div class="clearfix"><br/></div>
</div>
<div class="form-row">



<div class="form-group col-md-6">
<label class="form-label">State</label>
<!-- <select class="custom-select" name="state" id="state">
<?php foreach($state as $st) { ?>
<option value="<?php echo $st['id'];?>"><?php echo $st['state'];?></option>
<?php } ?>
</select> -->
<select class="custom-select" name="state" id="sel_state">
<option value="<?php echo $vendor->state;?>">
<?php
foreach($state as $st) {
if($st['id']==$vendor->state)
{
    echo $st['state'];
}
}
?>
</option>
<?php foreach($state as $st1) { ?>
<option value="<?php echo $st1['id'];?>"><?php echo $st1['state'];?></option>
<?php } ?>
</select><div class="clearfix"></div>
</div>

<div class="form-group col-md-6">
<label class="form-label">City</label>
<!-- <select class="custom-select" name="city" id="city" required>
<?php foreach($city as $c) { ?>
<option value="<?php echo $c['id'];?>"><?php echo $c['city'];?></option>
<?php } ?>
</select> -->
<select class="custom-select" name="city" id='sel_city'>
<option value="<?php echo $vendor->city;?>">
<?php
foreach($city as $cty) {
if($cty['id']==$vendor->city)
{
    echo $cty['city'];
}
}
?>
</option>
    <option>-- Select City --</option>
</select>
<div class="clearfix"></div>
</div>

<div class="form-group col-md-6">
<label class="form-label">Area</label>
<!-- <select class="custom-select" name="area" id="area" required>
<?php foreach($area as $ar) { ?>
<option value="<?php echo $ar['id'];?>"><?php echo $ar['area'];?></option>
<?php } ?>
</select> -->

<select class="custom-select" name="area" id='sel_area'>
<option value="<?php echo $vendor->area;?>">
<?php
foreach($area as $ar) {
if($ar['id']==$vendor->area)
{
    echo $ar['area'];
}
}
?>
</option>
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
<option value="<?php echo $vendor->pincode;?>">
<?php
foreach($pincode as $pn) {
if($pn['id']==$vendor->pincode)
{
    echo $pn['pincode'];
}
}
?>
</option>
    <option>-- Select Pincode--</option>
</select>
<div class="clearfix"></div>
</div>
</div>
<div class="form-row">

<div class="form-group col-md-6">
<label class="form-label">Opening Balance</label>
<input type="text" name="openingbal" id="openingbal" class="form-control" placeholder="Opening Balance like 5000" value="<?php echo $vendor->openingbal;?>" maxlength="10">
<div class="clearfix"></div>
</div>

<div class="form-group col-md-6">
<label class="form-label">Credit/Debit</label>
<select class="custom-select" name="crdr" id="crdr">
<?php if($vendor->crdr=="1")
    {
      echo "Credit" ; 
    }
    elseif($vendor->crdr=="2")
    {
        echo "Debit";
    }
    ?>
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
<input type="text" name="gstno" id="gstno" class="form-control" placeholder="Company/Firm GST No" maxlength="100" value="<?php echo $vendor->gstno;?>">
<div class="clearfix"></div>
</div>

<div class="form-group col-md-6">
<label class="form-label">Company/Firm Status</label>
<select class="custom-select" name="companystatus" id="companystatus">
<option>Select Company/Firm Status</option>
<?php if($vendor->companystatus=="1")
    {
      echo "Active" ; 
    }
    elseif($vendor->companystatus=="0")
    {
        echo "Inactive";
    }
    ?>
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

<div class="form-group col-md-12">
<label class="form-label">Company/Firm Address</label>
<input type="text" name="companyaddress" id="companyaddress" class="form-control" placeholder="Company/Firm Address" maxlength="100" value="<?php echo $vendor->companyaddress;?>">
<div class="clearfix"></div>
</div>
</div>

<div class="form-row">
    <div class="clearfix"><br/></div>
</div>


</div>
</div>
</div>
<div class="card-header bg-primary">
<a class="d-flex justify-content-between text-white text-large text-uppercase" data-toggle="collapse" aria-expanded="true" href="#accordion2-1">Personal Details<div class="collapse-icon"></div></a>
</div>
<div id="accordion2-1" class="collapse hidden" data-parent="#accordion2">
<div class="card-body">

<form action="<?php echo base_url();?>edit_vendor" method="post" enctype="multipart/form-data">

<div class="form-row">
<input type="hidden" name="id" class="form-control" value="<?php echo $vendor->id;?>">
<div class="form-group col-md-6">
<label class="form-label">Vendor Name</label>
<input type="text" name="name" id="name" class="form-control" placeholder="Full Name" maxlength="100" required value="<?php echo $vendor->name;?>">
<div class="clearfix"></div>
</div>

<div class="form-group col-md-6">
<label class="form-label">Email</label>
<input type="email" name="email" id="email" class="form-control" placeholder="Email" maxlength="100" value="<?php echo $vendor->email;?>">
<div class="clearfix"></div>
</div>

</div>

<div class="form-row">
    
<div class="form-group col-md-6">
<label class="form-label">Gender</label>
<select class="custom-select" name="gender" id="gender">
<?php if($vendor->gender=="1")
    {
      echo "Male" ; 
    }
    elseif($vendor->gender=="2")
    {
        echo "Female";
    }
    ?>
<option value="1">Male</option>
<option value="2">Female</option>
</select>
<div class="clearfix"></div>
</div>

<div class="form-group col-md-6">
<label class="form-label">Date of Birth</label>
<input type="date" name="dob" id="dob" class="form-control" placeholder="Date of Birth" value="<?php echo $vendor->dob;?>">
<div class="clearfix"></div>
</div>

</div>






<div class="form-row">





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


<div class="form-group col-md-6">
<label class="form-label">Mobile</label>
<input type="text" name="mobile" id="mobile" class="form-control" placeholder="Mobile" maxlength="10" value="<?php echo $vendor->mobile;?>">
<div class="clearfix"></div>
</div>
<div class="form-group col-md-6">
<label class="form-label">Designation</label>
<input type="text" name="designation" id="mobile" class="form-control" placeholder="Designation" maxlength=""  value="<?php echo $vendor->pdesignation;?>">
<div class="clearfix"></div>
</div>
</div>

<!-- <div class="form-row">

<div class="form-group col-md-12">
<label class="form-label">Home Address</label>
<input type="text" name="address" id="address" class="form-control" placeholder="1234 Main St" maxlength="200" value="<?php echo $vendor->address;?>"> 
<div class="clearfix"></div>
</div>

</div> -->




<div class="form-row">

<div class="form-group col-md-6">
<label class="form-label">Profile Image</label>
<div class="col"><img class="img-radius img-fluid wid-80" src="<?php echo base_url();?>assets/img/vendor/<?php echo $vendor->profileimage;?>" alt="Profile image"></div>
<input type="file" name="profileimage" id="profileimage" class="form-control" placeholder="sdf">
<div class="clearfix"></div>
</div>





</div>



</div>
</div>
</div>



<div class="card mb-2">
<div class="card-header bg-success">
<a class="d-flex justify-content-between text-white text-large text-uppercase" data-toggle="collapse" aria-expanded="true" href="#accordion2-3">Bank Account Details<div class="collapse-icon"></div></a>
</div>
<div id="accordion2-3" class="collapse hidden" data-parent="#accordion2">
<div class="card-body">

<div class="form-row">

<div class="form-group col-md-6">
<label class="form-label">Bank Name</label>
<input type="text" name="bankname" id="bankname" class="form-control" placeholder="Bank Name" maxlength="100" value="<?php echo $vendor->bankname;?>">
<div class="clearfix"></div>
</div>

<div class="form-group col-md-6">
<label class="form-label">Account Holder Name</label>
<input type="text" name="accountholder" id="accountholder" class="form-control" placeholder="Account Holder Name" maxlength="100" value="<?php echo $vendor->accountholder;?>">
<div class="clearfix"></div>
</div>

</div>

<div class="form-row">
    <div class="clearfix"><br/></div>
</div>

<div class="form-row">

<div class="form-group col-md-6">
<label class="form-label">Account Number</label>
<input type="text" name="accountno" id="accountno" class="form-control" placeholder="Account Number" maxlength="100" value="<?php echo $vendor->accountno;?>">
<div class="clearfix"></div>
</div>

<div class="form-group col-md-6">
<label class="form-label">IFSC Code</label>
<input type="text" name="ifsccode" id="ifsccode" class="form-control" placeholder="IFSC Code" maxlength="100" value="<?php echo $vendor->ifsccode;?>">
<div class="clearfix"></div>
</div>

</div>

<div class="form-row">
    <div class="clearfix"><br/></div>
</div>

<div class="form-row">

<div class="form-group col-md-12">
<label class="form-label">Branch Name & Address</label>
<input type="text" name="branchnameaddress" id="branchnameaddress" class="form-control" placeholder="Branch Name & Address" maxlength="100" value="<?php echo $vendor->branchnameaddress;?>">
<div class="clearfix"></div>
</div>

</div>

<div class="form-row">

<div class="form-group col-md-6">
<button type="submit" class="btn btn-primary">Update</button>
</div>

</div>

</form>




</div>
</div>
</div>


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

<div class="layout-content">

<div class="container-fluid flex-grow-1 container-p-y">
<h4 class="font-weight-bold py-3 mb-0">Vendor's Details</h4>
<div class="text-muted small mt-0 mb-4 d-block breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="<?php echo base_url();?>master"><i class="feather icon-home"></i></a></li>
<li class="breadcrumb-item active"><a href="<?php echo base_url();?>master">Vendor's Details</a></li>
</ol>
</div>
<h4 class="font-weight-bold py-3 mb-0"></h4>
<div class="row">
<div class="col-sm-6 col-xl-3">
<div class="card mb-4">
<div class="card-body">
<div class="d-flex align-items-center">
<div class="lnr"><a href="<?php echo base_url();?>category"><i class="lnr lnr-database bg-info ui-rounded-icon"></i></a></div>
<div class="ml-4">
<a href="<?php echo base_url();?>category"><h6 class="card-header-title mb-0 text-info text-center">All Purchase Order</h6></a>
<a href="<?php echo base_url();?>category" class="text-info"><h2 class="text-center"><?php if(isset($countcategory)){echo $countcategory;} else { echo "";}?></h2></a>

<a href="<?php echo base_url();?>category"><button class="btn btn-info btn-sm btn-round">Click Here to View</button></a>

</div>
</div>
</div>
</div>
</div>

<div class="col-sm-6 col-xl-3">
<div class="card mb-4">
<div class="card-body">
<div class="d-flex align-items-center">
<div class="lnr"><a href="<?php echo base_url();?>subcategory"><i class="lnr lnr-book bg-danger ui-rounded-icon"></i></a></div>
<div class="ml-4">
<a href="<?php echo base_url();?>"><h6 class="card-header-title mb-0 text-danger text-center">All Purchase Invoice</h6></a>
<a href="<?php echo base_url();?>subcategory" class="text-danger"><h2 class="text-center"><?php if(isset($countsubcategory)){echo $countsubcategory;} else { echo "";}?></h2></a>

<a href="<?php echo base_url();?>subcategory"><button class="btn btn-danger btn-sm btn-round">Click Here to View</button></a>

</div>
</div>
</div>
</div>
</div>
<div class="col-sm-6 col-xl-3">
<div class="card mb-4">
<div class="card-body">
<div class="d-flex align-items-center">
<div class="lnr"><a href="<?php echo base_url();?>subcategory"><i class="lnr lnr-book bg-warning ui-rounded-icon"></i></a></div>
<div class="ml-4">
<a href="<?php echo base_url();?>"><h6 class="card-header-title mb-0 text-warning text-center">All Purchase Received</h6></a>
<a href="<?php echo base_url();?>subcategory" class="text-warning"><h2 class="text-center"><?php if(isset($countsubcategory)){echo $countsubcategory;} else { echo "";}?></h2></a>

<a href="<?php echo base_url();?>subcategory"><button class="btn btn-warning btn-sm btn-round">Click Here to View</button></a>

</div>
</div>
</div>
</div>
</div>

<div class="col-sm-6 col-xl-3">
<div class="card mb-4">
<div class="card-body">
<div class="d-flex align-items-center">
<div class="lnr"><a href="<?php echo base_url();?>products"><i class="lnr lnr-poop bg-success ui-rounded-icon"></i></a></div>
<div class="ml-4">
<a href="<?php echo base_url();?>"><h6 class="card-header-title mb-0 text-success text-center">All Payment Details</h6></a>
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
<div class="lnr"><a href="<?php echo base_url();?>subcategory"><i class="lnr lnr-book bg-primary ui-rounded-icon"></i></a></div>
<div class="ml-4">
<a href="<?php echo base_url();?>"><h6 class="card-header-title mb-0 text-primary text-center">All Purcahse Return</h6></a>
<a href="<?php echo base_url();?>subcategory" class="text-primary"><h2 class="text-center"><?php if(isset($countsubcategory)){echo $countsubcategory;} else { echo "";}?></h2></a>

<a href="<?php echo base_url();?>subcategory"><button class="btn btn-primary btn-sm btn-round">Click Here to View</button></a>

</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>




<?php include("footer.php");?>