<?php include("header.php");?>

<div class="layout-content">

<div class="container-fluid flex-grow-1 container-p-y">
<h4 class="font-weight-bold py-3 mb-0">Edit Delivery Partner</h4>
<div class="text-muted small mt-0 mb-4 d-block breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard"><i class="feather icon-home"></i></a></li>
<li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard">Dashboard</a></li>
<li class="breadcrumb-item"><a href="<?php echo base_url();?>deliverypartners">Delivery Partners</a></li>
<li class="breadcrumb-item <?php if($this->uri->segment(1)=='editdeliverypartner/'.$deliverypartner->id) { echo 'active';}?>"><a href="<?php echo base_url();?>editdeliverypartner/<?php echo $deliverypartner->id;?>">Edit Delivery Partner</a></li>
</ol>
</div>

<div id="accordion2">
<div class="card mb-2">
<div class="card-header bg-primary">
<a class="d-flex justify-content-between text-white text-large text-uppercase" data-toggle="collapse" aria-expanded="true" href="#accordion2-1">Personal Details<div class="collapse-icon"></div></a>
</div>
<div id="accordion2-1" class="collapse show" data-parent="#accordion2">
<div class="card-body">

<form action="<?php echo base_url();?>edit_deliverypartner" method="post" enctype="multipart/form-data">
<div class="form-row">
<input type="hidden" name="id" class="form-control" value="<?php echo $deliverypartner->id;?>">

<div class="form-group col-md-6">
<label class="form-label">Name</label>
<input type="text" name="name" id="name" class="form-control" placeholder="Full Name" maxlength="150" value="<?php echo $deliverypartner->name;?>">
<div class="clearfix"></div>
</div>

<div class="form-group col-md-6">
<label class="form-label">Email</label>
<input type="email" name="email" id="email" class="form-control" placeholder="Email" maxlength="150" value="<?php echo $deliverypartner->email;?>">
<div class="clearfix"></div>
</div>

</div>

<div class="form-row">
    
<div class="form-group col-md-6">
<label class="form-label">Gender</label>
<select class="custom-select" name="gender" id="gender">
<?php
    if($deliverypartner->gender=="1")
    {
        echo "Male";
    }
    elseif($deliverypartner->gender=="2")
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
<input type="date" name="dob" id="dob" class="form-control" placeholder="Date of Birth" value="<?php echo $deliverypartner->dob;?>">
<div class="clearfix"></div>
</div>

</div>

<div class="form-row">

<div class="form-group col-md-6">
<label class="form-label">Password</label>
<input type="password" name="password" id="password" class="form-control" placeholder="Password" maxlength="6" value="<?php echo $deliverypartner->password;?>">
<div class="clearfix"></div>
</div>

<div class="form-group col-md-6">
<label class="form-label">Confirm Password</label>
<input type="password" name="cpassword" id="cpassword" class="form-control" placeholder="Confirm Password" maxlength="6" value="<?php echo $deliverypartner->cpassword;?>">
<div class="clearfix"></div>
</div>

</div>

<div class="form-row">

<div class="form-group col-md-6">
<label class="form-label">Mother Tongue</label>
<input type="text" name="mothertongue" id="mothertongue" class="form-control" placeholder="Mother Tongue" maxlength="100" value="<?php echo $deliverypartner->mothertongue;?>">
<div class="clearfix"></div>
</div>

<div class="form-group col-md-6">
<label class="form-label">Father Name</label>
<input type="text" name="fathername" id="fathername" class="form-control" placeholder="Father Name" maxlength="100" value="<?php echo $deliverypartner->fathername;?>">
<div class="clearfix"></div>
</div>

</div>

<div class="form-row">

<div class="form-group col-md-6">
<label class="form-label">Father Occupation</label>
<input type="text" name="foccupation" id="foccupation" class="form-control" placeholder="Father Occupation" maxlength="100" value="<?php echo $deliverypartner->foccupation;?>">
<div class="clearfix"></div>
</div>

<div class="form-group col-md-6">
<label class="form-label">Father Designation</label>
<input type="text" name="fdesignation" id="fdesignation" class="form-control" placeholder="Father Designation" maxlength="100" value="<?php echo $deliverypartner->fdesignation;?>">
<div class="clearfix"></div>
</div>

</div>

<div class="form-row">

<div class="form-group col-md-6">
<label class="form-label">Marital Status</label>
<select class="custom-select" name="maritalstatus" id="maritalstatus">
<?php
    if($deliverypartner->maritalstatus=="1")
    {
        echo "Male";
    }
    elseif($deliverypartner->maritalstatus=="2")
    {
        echo "Female";
    }
?>
<option value="1">Married</option>
<option value="2">Single</option>
</select>
<div class="clearfix"></div>
</div>

<div class="form-group col-md-6">
<label class="form-label">No of Dependents</label>
<input type="text" name="nodependents" id="nodependents" class="form-control" placeholder="No of Dependents" maxlength="5" value="<?php echo $deliverypartner->nodependents;?>">
<div class="clearfix"></div>
</div>

</div>

<div class="form-row">

<div class="form-group col-md-4">
<label class="form-label">Mobile</label>
<input type="number" name="mobile" id="mobile" class="form-control" placeholder="Mobile" value="<?php echo $deliverypartner->mobile;?>" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==10) return false;" required>
<div class="clearfix"></div>
</div>

<div class="form-group col-md-4">
<label class="form-label">Profile Image</label>
<img src="<?php echo base_url();?>assets/back/img/deliveryboy/<?php echo $deliverypartner->profileimage;?>" class="img-fluid img-radius wid-40" alt="">
<input type="file" name="profileimage" id="profileimage" class="form-control" placeholder="sdf">
<div class="clearfix"></div>
</div>

</div>


</div>
</div>
</div>

<div class="card mb-2">
<div class="card-header bg-info">
<a class="d-flex justify-content-between text-white text-large text-uppercase" data-toggle="collapse" aria-expanded="true" href="#accordion2-2">Address Details<div class="collapse-icon"></div></a>
</div>
<div id="accordion2-2" class="collapse show" data-parent="#accordion2">
<div class="card-body">

<div class="form-row">
<div class="form-group col-md-12">
<h5>Current Address</h5>
<hr/>
</div>
<!-- <div class="form-group col-md-4">
<label class="form-label">Country</label>
<select class="custom-select" name="country" id="country">
<option value="<?php echo $deliverypartner->country;?>">
<?php
foreach($country as $ct) {
if($ct['id']==$deliverypartner->country)
{
    echo $ct['country'];
}
}
?>
</option>
<?php foreach($country as $ct1) { ?>
<option value="<?php echo $ct1['id'];?>"><?php echo $ct1['country'];?></option>
<?php } ?>
</select>
<div class="clearfix"></div>
</div> -->

<div class="form-group col-md-3">
<label class="form-label">State</label>
<select class="custom-select" name="state" id="sel_state">
<option value="<?php echo $deliverypartner->state;?>">
<?php
foreach($state as $st) {
if($st['id']==$deliverypartner->state)
{
    echo $st['state'];
}
}
?>
</option>
<?php foreach($state as $st1) { ?>
<option value="<?php echo $st1['id'];?>"><?php echo $st1['state'];?></option>
<?php } ?>
</select>
<div class="clearfix"></div>
</div>

<div class="form-group col-md-3">
<label class="form-label">City</label>
<select class="custom-select" name="city" id="sel_city">
<option value="<?php echo $deliverypartner->city;?>">
<?php
foreach($city as $cty) {
if($cty['id']==$deliverypartner->city)
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

<div class="form-group col-md-3">
<label class="form-label">Area</label>
<select class="custom-select" name="area" id="sel_area">
<option value="<?php echo $deliverypartner->area;?>">
<?php
foreach($area as $ar) {
if($ar['id']==$deliverypartner->area)
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

<div class="form-group col-md-3">
<label class="form-label">Pin Code</label>
<select class="custom-select" name="pincode" id="sel_pin">
<option value="<?php echo $deliverypartner->pincode;?>">
<?php
foreach($pincode as $pn) {
if($pn['id']==$deliverypartner->pincode)
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

<div class="form-group col-md-12">
<label class="form-label">Current Address</label>
<input type="text" name="currentaddress" id="currentaddress" class="form-control" placeholder="Current Address" maxlength="200" value="<?php echo $deliverypartner->currentaddress;?>"> 
<div class="clearfix"></div>
</div>

</div>


<div class="form-row">
<div class="form-group col-md-12">
<br/>
<h5>Permanent Address</h5>
<hr/>
<label class="form-check">
<input class="form-check-input" type="checkbox" value="" name="copy" id="copy">
<span class="form-check-label">Copy Current Address</span>
</label>
</div>

<!-- <div class="form-group col-md-4">
<label class="form-label">Country</label>
<select class="custom-select" name="country" id="country">
<option value="<?php echo $deliverypartner->pcountry;?>">
<?php
foreach($country as $ct) {
if($ct['id']==$deliverypartner->pcountry)
{
    echo $ct['country'];
}
}
?>
</option>
<?php foreach($country as $ct1) { ?>
<option value="<?php echo $ct1['id'];?>"><?php echo $ct1['country'];?></option>
<?php } ?>
</select>
<div class="clearfix"></div>
</div> -->

<div class="form-group col-md-3">
<label class="form-label">State</label>
<select class="custom-select" name="pstate" id="sel_state1">
<option value="<?php echo $deliverypartner->pstate;?>">
<?php
foreach($state as $st) {
if($st['id']==$deliverypartner->pstate)
{
    echo $st['state'];
}
}
?>
</option>
<?php foreach($state as $st1) { ?>
<option value="<?php echo $st1['id'];?>"><?php echo $st1['state'];?></option>
<?php } ?>
</select>
<div class="clearfix"></div>
</div>

<div class="form-group col-md-3">
<label class="form-label">City</label>
<select class="custom-select" name="pcity" id="sel_city1">
<option value="<?php echo $deliverypartner->pcity;?>">
<?php
foreach($city as $cty) {
if($cty['id']==$deliverypartner->pcity)
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

<div class="form-group col-md-3">
<label class="form-label">Area</label>
<select class="custom-select" name="parea" id="sel_area1">
<option value="<?php echo $deliverypartner->parea;?>">
<?php
foreach($area as $ar) {
if($ar['id']==$deliverypartner->parea)
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

<div class="form-group col-md-3">
<label class="form-label">Pin Code</label>
<select class="custom-select" name="ppincode" id="sel_pin1">
<option value="<?php echo $deliverypartner->pincode;?>">
<?php
foreach($pincode as $pn) {
if($pn['id']==$deliverypartner->pincode)
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


<!-- Script -->
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script type='text/javascript'>
// baseURL variable
var baseURL= "<?php echo base_url();?>";

$(document).ready(function(){

  // State change
  $('#sel_state1').change(function(){
    var state = $(this).val();

    // AJAX request
    $.ajax({
      url:'<?=base_url()?>home/getCities',
      method: 'post',
      data: {state: state},
      dataType: 'json',
      success: function(response){

        // Remove options 
        $('#sel_city1').find('option').not(':first').remove();
        $('#sel_area1').find('option').not(':first').remove();
        $('#sel_pin1').find('option').not(':first').remove();

        // Add options
        $.each(response,function(index,data){
           $('#sel_city1').append('<option value="'+data['id']+'">'+data['city']+'</option>');
        });
      }
   });
 });

 // City change
 $('#sel_city1').change(function(){
   var city = $(this).val();

   // AJAX request
   $.ajax({
     url:'<?=base_url()?>home/getAreas',
     method: 'post',
     data: {city: city},
     dataType: 'json',
     success: function(response){

       // Remove options
       $('#sel_area1').find('option').not(':first').remove();
       $('#sel_pin1').find('option').not(':first').remove();

       // Add options
       $.each(response,function(index,data){
         $('#sel_area1').append('<option value="'+data['id']+'">'+data['area']+'</option>');
       });
     }
  });
});

// Area change
$('#sel_area1').change(function(){
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
         $('#sel_pin1').append('<option value="'+data['id']+'">'+data['pincode']+'</option>');
       });
     }
  });
});


});
</script>

<div class="form-row">

<div class="form-group col-md-12">
<label class="form-label">Home Address</label>
<input type="text" name="homeaddress" id="homeaddress" class="form-control" placeholder="Home Address" maxlength="200" value="<?php echo $deliverypartner->homeaddress;?>"> 
<div class="clearfix"></div>
</div>

</div>




</div>
</div>
</div>

<div class="card mb-2">
<div class="card-header bg-warning">
<a class="d-flex justify-content-between text-white text-large text-uppercase" data-toggle="collapse" aria-expanded="true" href="#accordion2-3">Educational Qualification<div class="collapse-icon"></div></a>
</div>
<div id="accordion2-3" class="collapse show" data-parent="#accordion2">
<div class="card-body">

<div class="form-row">

<div class="form-group col-md-4">
<label class="form-label">Education</label>
<input type="text" name="education" id="education" class="form-control" placeholder="Education" maxlength="100" value="<?php echo $deliverypartner->education;?>">
<div class="clearfix"></div>
</div>

<div class="form-group col-md-4">
<label class="form-label">University / School</label>
<input type="text" name="university" id="university" class="form-control" placeholder="University" maxlength="100" value="<?php echo $deliverypartner->university;?>">
<div class="clearfix"></div>
</div>

<div class="form-group col-md-4">
<label class="form-label">Location & Address</label>
<input type="text" name="location" id="location" class="form-control" placeholder="Location & Address" maxlength="255" value="<?php echo $deliverypartner->location;?>">
<div class="clearfix"></div>
</div>

</div>



</div>
</div>
</div>


<div class="card mb-2">
<div class="card-header bg-warning">
<a class="d-flex justify-content-between text-white text-large text-uppercase" data-toggle="collapse" aria-expanded="true" href="#accordion2-4">Family References<div class="collapse-icon"></div></a>
</div>
<div id="accordion2-4" class="collapse show" data-parent="#accordion2">
<div class="card-body">

<div class="form-row">

<div class="form-group col-md-4">
<label class="form-label">Reference Name</label>
<input type="text" name="refname1" id="refname1" class="form-control" placeholder="Reference Name" maxlength="100" value="<?php echo $deliverypartner->refname1;?>">
<div class="clearfix"></div>
</div>

<div class="form-group col-md-4">
<label class="form-label">Relation</label>
<input type="text" name="relation1" id="relation1" class="form-control" placeholder="Relation" maxlength="100" value="<?php echo $deliverypartner->relation1;?>">
<div class="clearfix"></div>
</div>

<div class="form-group col-md-4">
<label class="form-label">Mobile</label>
<input type="number" name="refmobile1" id="refmobile1" class="form-control" placeholder="Mobile" value="<?php echo $deliverypartner->refmobile1;?>" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==10) return false;">
<div class="clearfix"></div>
</div>

</div>

<div class="form-row">

<div class="form-group col-md-4">
<label class="form-label">Reference Name</label>
<input type="text" name="refname2" id="refname2" class="form-control" placeholder="Reference Name" maxlength="100" value="<?php echo $deliverypartner->refname2;?>">
<div class="clearfix"></div>
</div>

<div class="form-group col-md-4">
<label class="form-label">Relation</label>
<input type="text" name="relation2" id="relation2" class="form-control" placeholder="Relation" maxlength="100" value="<?php echo $deliverypartner->relation2;?>">
<div class="clearfix"></div>
</div>

<div class="form-group col-md-4">
<label class="form-label">Mobile</label>
<input type="number" name="refmobile2" id="refmobile2" class="form-control" placeholder="Mobile" value="<?php echo $deliverypartner->refmobile2;?>" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==10) return false;">
<div class="clearfix"></div>
</div>

</div>




</div>
</div>
</div>

<div class="card mb-2">
<div class="card-header bg-warning">
<a class="d-flex justify-content-between text-white text-large text-uppercase" data-toggle="collapse" aria-expanded="true" href="#accordion2-5">Local References<div class="collapse-icon"></div></a>
</div>
<div id="accordion2-5" class="collapse show" data-parent="#accordion2">
<div class="card-body">

<div class="form-row">

<div class="form-group col-md-4">
<label class="form-label">Local Reference Name</label>
<input type="text" name="localrefname1" id="localrefname1" class="form-control" placeholder="Reference Name" maxlength="100" value="<?php echo $deliverypartner->localrefname1;?>">
<div class="clearfix"></div>
</div>


<div class="form-group col-md-4">
<label class="form-label">Mobile</label>
<input type="number" name="localrefmobile1" id="localrefmobile1" class="form-control" placeholder="Reference Mobile" value="<?php echo $deliverypartner->localrefmobile1;?>" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==10) return false;">
<div class="clearfix"></div>
</div>

</div>

<div class="form-row">

<div class="form-group col-md-4">
<label class="form-label">Local Reference Name</label>
<input type="text" name="localrefname2" id="localrefname2" class="form-control" placeholder="Reference Name" maxlength="100" value="<?php echo $deliverypartner->localrefname2;?>">
<div class="clearfix"></div>
</div>

<div class="form-group col-md-4">
<label class="form-label">Mobile</label>
<input type="number" name="localrefmobile2" id="localrefmobile2" class="form-control" placeholder="Reference Mobile" value="<?php echo $deliverypartner->localrefmobile2;?>" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==10) return false;">
<div class="clearfix"></div>
</div>

</div>




</div>
</div>
</div>


<div class="card mb-2">
<div class="card-header bg-info">
<a class="d-flex justify-content-between text-white text-large text-uppercase" data-toggle="collapse" aria-expanded="true" href="#accordion2-6">Previous Company Details<div class="collapse-icon"></div></a>
</div>
<div id="accordion2-6" class="collapse show" data-parent="#accordion2">
<div class="card-body">

<div class="form-row">

<div class="form-group col-md-4">
<label class="form-label">Designation</label>
<input type="text" name="prevdesg" id="prevdesg" class="form-control" placeholder="Designation" maxlength="100" value="<?php echo $deliverypartner->prevdesg;?>">
<div class="clearfix"></div>
</div>

<div class="form-group col-md-4">
<label class="form-label">Company Name</label>
<input type="text" name="prevcompany" id="prevcompany" class="form-control" placeholder="Company Name" maxlength="100" value="<?php echo $deliverypartner->prevcompany;?>">
<div class="clearfix"></div>
</div>

<div class="form-group col-md-4">
<label class="form-label">Company Owner Name</label>
<input type="text" name="prevcompanyowner" id="prevcompanyowner" class="form-control" placeholder="Company Owner Name" maxlength="100" value="<?php echo $deliverypartner->prevcompanyowner;?>">
<div class="clearfix"></div>
</div>

</div>

<div class="form-row">

<div class="form-group col-md-4">
<label class="form-label">Joining Date</label>
<input type="text" name="startdate" id="startdate" class="form-control" placeholder="" maxlength="100" value="<?php echo $deliverypartner->startdate;?>">
<div class="clearfix"></div>
</div>

<div class="form-group col-md-4">
<label class="form-label">Relieving Date</label>
<input type="text" name="enddate" id="enddate" class="form-control" placeholder="" maxlength="100" value="<?php echo $deliverypartner->enddate;?>">
<div class="clearfix"></div>
</div>

</div>


<div class="form-row">

<div class="form-group col-md-12">
<label class="form-label">Company Address</label>
<input type="text" name="prevcompanyaddress" id="prevcompanyaddress" class="form-control" placeholder="Company Address" maxlength="100" value="<?php echo $deliverypartner->prevcompanyaddress;?>">
<div class="clearfix"></div>
</div>

</div>



</div>
</div>
</div>


<div class="card mb-2">
<div class="card-header bg-info">
<a class="d-flex justify-content-between text-white text-large text-uppercase" data-toggle="collapse" aria-expanded="true" href="#accordion2-2">Previous Company References<div class="collapse-icon"></div></a>
</div>
<div id="accordion2-7" class="collapse show" data-parent="#accordion2">
<div class="card-body">                                                 

<div class="form-row">

<div class="form-group col-md-4">
<label class="form-label">Reference Employee Name</label>
<input type="text" name="refempname1" id="refempname1" class="form-control" placeholder="Reference Name" maxlength="100" value="<?php echo $deliverypartner->refempname1;?>">
<div class="clearfix"></div>
</div>

<div class="form-group col-md-4">
<label class="form-label">Mobile</label>
<input type="number" name="refempmobile1" id="refempmobile1" class="form-control" placeholder="Mobile" value="<?php echo $deliverypartner->refempmobile1;?>" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==10) return false;">
<div class="clearfix"></div>
</div>

<div class="form-group col-md-4">
<label class="form-label">Designation</label>
<input type="text" name="refempdesg1" id="refempdesg1" class="form-control" placeholder="Designation" maxlength="100" value="<?php echo $deliverypartner->refempdesg1;?>">
<div class="clearfix"></div>
</div>

</div>

<div class="form-row">

<div class="form-group col-md-4">
<label class="form-label">Reference Employee Name</label>
<input type="text" name="refempname2" id="refempname2" class="form-control" placeholder="Reference Name" maxlength="100" value="<?php echo $deliverypartner->refempname2;?>">
<div class="clearfix"></div>
</div>

<div class="form-group col-md-4">
<label class="form-label">Mobile</label>
<input type="number" name="refempmobile2" id="refempmobile2" class="form-control" placeholder="Mobile" value="<?php echo $deliverypartner->refempmobile2;?>" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==10) return false;">
<div class="clearfix"></div>
</div>

<div class="form-group col-md-4">
<label class="form-label">Designation</label>
<input type="text" name="refempdesg2" id="refempdesg2" class="form-control" placeholder="Designation" maxlength="100" value="<?php echo $deliverypartner->refempdesg2;?>">
<div class="clearfix"></div>
</div>

</div>




</div>
</div>
</div>


<div class="card mb-2">
<div class="card-header bg-danger">
<a class="d-flex justify-content-between text-white text-large text-uppercase" data-toggle="collapse" aria-expanded="true" href="#accordion2-8">Document & Vehicle Details<div class="collapse-icon"></div></a>
</div>
<div id="accordion2-8" class="collapse show" data-parent="#accordion2">
<div class="card-body">                                                 

<div class="form-row">

<div class="form-group col-md-4">
<label class="form-label">Adhaar Card</label>
<input type="text" name="adhaarcardno" id="adhaarcardno" class="form-control" placeholder="Adhaar Card No" maxlength="12" value="<?php echo $deliverypartner->adhaarcardno;?>">
<input type="file" name="adhaarcard" id="adhaarcard" class="form-control" placeholder="sdf" value="<?php echo $deliverypartner->adhaarcard;?>">
<div class="clearfix"></div>
</div>
 
<div class="form-group col-md-4">
<label class="form-label">Voter ID</label>
<input type="text" name="voteridno" id="voteridno" class="form-control" placeholder="Voter ID No" maxlength="10" value="<?php echo $deliverypartner->voteridno;?>">
<input type="file" name="voterid" id="voterid" class="form-control" placeholder="sdf" value="<?php echo $deliverypartner->voterid;?>">
<div class="clearfix"></div>
</div>

<div class="form-group col-md-4">
<label class="form-label">PAN Card</label>
<input type="text" name="pancardno" id="pancardno" class="form-control" placeholder="Pan Card No" maxlength="10" value="<?php echo $deliverypartner->pancardno;?>">
<input type="file" name="pancard" id="pancard" class="form-control" placeholder="sdf" value="<?php echo $deliverypartner->pancard;?>">
<div class="clearfix"></div>
</div>

</div>

<div class="form-row">

<div class="form-group col-md-4">
<label class="form-label">Bike Registration Copy No</label>
<input type="text" name="bikercno" id="bikercno" class="form-control" placeholder="Bike RC No" maxlength="10" value="<?php echo $deliverypartner->bikercno;?>">
<input type="file" name="bikerc" id="bikerc" class="form-control" placeholder="sdf" value="<?php echo $deliverypartner->bikerc;?>">
<div class="clearfix"></div>
</div>
 
<div class="form-group col-md-4">
<label class="form-label">Bike No</label>
<input type="text" name="bikeno" id="bikeno" class="form-control" placeholder="Bike No" maxlength="10" value="<?php echo $deliverypartner->bikeno;?>"> 
<div class="clearfix"></div>
</div>

<div class="form-group col-md-4">
<label class="form-label">Bike Owner Name</label>
<input type="text" name="bikeowner" id="bikeowner" class="form-control" placeholder="Bike Owner Name" maxlength="100" value="<?php echo $deliverypartner->bikeowner;?>">
<div class="clearfix"></div>
</div>

</div>


<div class="form-row">

<div class="form-group col-md-4">
<label class="form-label">Bike Insurance Date</label>
<input type="date" name="bikeinsurancedate" id="bikeinsurancedate" class="form-control" placeholder="Bike Insurance Date" value="<?php echo $deliverypartner->bikeinsurancedate;?>">
<div class="clearfix"></div>
</div>
 
<div class="form-group col-md-4">
<label class="form-label">Bike Insurance Expiration Date</label>
<input type="date" name="bikeinsuranceexpdate" id="bikeinsuranceexpdate" class="form-control" placeholder="Bike Insurance Expiration Date" value="<?php echo $deliverypartner->bikeinsuranceexpdate;?>">
<div class="clearfix"></div>
</div>

<div class="form-group col-md-4">
<label class="form-label">Police Verification No</label>
<input type="text" name="policeverifyno" id="policeverifyno" class="form-control" placeholder="Police Verification No" value="<?php echo $deliverypartner->policeverifyno;?>">
<input type="file" name="policeverify" id="policeverify" class="form-control" placeholder="sdf" value="<?php echo $deliverypartner->policeverify;?>">
<div class="clearfix"></div>
</div>


</div>

</div>
</div>
</div>

<div class="card mb-2">
<div class="card-header bg-success">
<a class="d-flex justify-content-between text-white text-large text-uppercase" data-toggle="collapse" aria-expanded="true" href="#accordion2-9">Bank Account Details<div class="collapse-icon"></div></a>
</div>
<div id="accordion2-9" class="collapse show" data-parent="#accordion2">
<div class="card-body">

<div class="form-row">

<div class="form-group col-md-6">
<label class="form-label">Bank Name</label>
<input type="text" name="bankname" id="bankname" class="form-control" placeholder="Bank Name" maxlength="100" value="<?php echo $deliverypartner->bankname;?>">
<div class="clearfix"></div>
</div>

<div class="form-group col-md-6">
<label class="form-label">Account Holder Name</label>
<input type="text" name="accountholder" id="accountholder" class="form-control" placeholder="Account Holder Name" maxlength="200" value="<?php echo $deliverypartner->accountholder;?>">
<div class="clearfix"></div>
</div>

</div>

<div class="form-row">

<div class="form-group col-md-6">
<label class="form-label">Account Number</label>
<input type="text" name="accountno" id="accountno" class="form-control" placeholder="Account Number" maxlength="100" value="<?php echo $deliverypartner->accountno;?>">
<div class="clearfix"></div>
</div>

<div class="form-group col-md-6">
<label class="form-label">IFSC Code</label>
<input type="text" name="ifsccode" id="ifsccode" class="form-control" placeholder="IFSC Code" maxlength="50" value="<?php echo $deliverypartner->ifsccode;?>">
<div class="clearfix"></div>
</div>

</div>

<div class="form-row">

<div class="form-group col-md-12">
<label class="form-label">Branch Name & Address</label>
<input type="text" name="branchnameaddress" id="branchnameaddress" class="form-control" placeholder="Branch Name & Address" maxlength="200" value="<?php echo $deliverypartner->branchnameaddress;?>">
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
<a class="collapsed d-flex justify-content-between text-dark" data-toggle="collapse" aria-expanded="true" href="#accordion2-9">Particulars Assigned By the Company<div class="collapse-icon"></div></a>
</div>
<div id="accordion2-9" class="collapse show" data-parent="#accordion2">
<div class="card-body">

<div class="form-row">
    
<div class="form-group col-md-4">
<label class="form-label">Department</label>
<select class="custom-select" name="dept" id="dept">
<?php foreach($department as $dept) { ?>
<option value="<?php echo $dept['id'];?>"><?php echo $dept['department'];?></option>
<?php } ?>
</select>
<div class="clearfix"></div>
</div>

<div class="form-group col-md-4">
<label class="form-label">Designation</label>
<select class="custom-select" name="desg" id="desg">
<?php foreach($designation as $desgn) { ?>
<option value="<?php echo $desgn['id'];?>"><?php echo $desgn['designation'];?></option>
<?php } ?>
</select>
<div class="clearfix"></div>
</div>

<div class="form-group col-md-4">
<label class="form-label">Date of Joining</label>
<input type="date" name="doj" id="doj" class="form-control" placeholder="Date of Joining">
<div class="clearfix"></div>
</div>

</div>

<div class="form-row">

<div class="form-group col-md-6">
<label class="form-label">Employee Code</label>
<input type="text" name="empcode" id="empcode" class="form-control" placeholder="Employee Code Like E122, N3434" maxlength="10">
<div class="clearfix"></div>
</div>

<div class="form-group col-md-6">
<label class="form-label">Official Email</label>
<input type="email" name="ofemail" id="ofemail" class="form-control" placeholder="Official Email" maxlength="100">
<div class="clearfix"></div>
</div>

</div>


<div class="form-row">

<div class="form-group col-md-6">
<button type="submit" class="btn btn-primary">Save</button>
</div>

</div>

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
<script type="text/javascript">

$(document).ready(function() {
$("#copy").on("change",function(){

if (this.checked ) {
        $("#homeaddress").val($("#currentaddress").val());

    } else {

        $('#homeaddress').val("");
        $("#homeaddress").attr("placeholder", "Home Address")  ;
      }    

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