<?php include("header.php");?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<link rel="stylesheet" href="<?php echo base_url();?>assets/back/libs/bootstrap-select/bootstrap-select.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/back/libs/bootstrap-multiselect/bootstrap-multiselect.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/back/libs/select2/select2.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/back/libs/bootstrap-tagsinput/bootstrap-tagsinput.css">
<div class="layout-content">

<div class="container-fluid flex-grow-1 container-p-y">
<h4 class="font-weight-bold py-3 mb-0">Add Employee</h4>
<div class="text-muted small mt-0 mb-4 d-block breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard"><i class="feather icon-home"></i></a></li>
<li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard">Dashboard</a></li>
<li class="breadcrumb-item"><a href="<?php echo base_url();?>employees">Employees</a></li>
<li class="breadcrumb-item <?php if($this->uri->segment(1)=='addemployee') { echo 'active';}?>"><a href="<?php echo base_url();?>addemployee">Add Employee</a></li>
</ol>
</div>

<div id="accordion2">
<div class="card mb-2">
<div class="card-header bg-primary">
<a class="d-flex justify-content-between text-white text-large text-uppercase" data-toggle="collapse" aria-expanded="true" href="#accordion2-1">Personal Details<div class="collapse-icon"></div></a>
</div>
<div id="accordion2-1" class="collapse show" data-parent="#accordion2">
<div class="card-body">

<form action="<?php echo base_url();?>add_employee" method="post" enctype="multipart/form-data">
<div class="form-row">


<div class="form-group col-md-6">
<label class="form-label">Employee Name</label>
<input type="text" name="name" id="name" class="form-control" placeholder="Full Name" maxlength="150" required>
<div class="clearfix"></div>
</div>

<div class="form-group col-md-6">
<label class="form-label">Email</label>
<input type="email" name="email" id="email" class="form-control" placeholder="Email" maxlength="150">
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

<div class="form-row">

<div class="form-group col-md-6">
<label class="form-label">Password</label>
<input type="password" name="password" id="password" class="form-control" placeholder="Password" maxlength="6">
<div class="clearfix"></div>
</div>

<div class="form-group col-md-6">
<label class="form-label">Confirm Password</label>
<input type="password" name="cpassword" id="cpassword" class="form-control" placeholder="Confirm Password" maxlength="6">
<div class="clearfix"></div>
</div>

</div>


<div class="form-row">

<div class="form-group col-md-4">
<label class="form-label">Mobile</label>
<input type="number" name="mobile" id="mobile" class="form-control" placeholder="Mobile" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==10) return false;" required>
<div class="clearfix"></div>
</div>

<div class="form-group col-md-4">


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
</div>

<div class="form-group col-md-4">
<label class="form-label">PAN Card</label>
<input type="text" name="pancardno" id="pancardno" class="form-control" placeholder="Pan Card No" maxlength="10">
<input type="file" name="pancard" id="pancard" class="form-control" placeholder="sdf">
<div class="clearfix"></div>
</div>

</div>

<div class="form-row">

<div class="form-group col-md-4">
<label class="form-label">Profile Image</label>
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

<!-- <div class="form-group col-md-3">
<label class="form-label">Country</label>
<select class="custom-select" name="country" id="country">
<?php foreach($country as $ct) { ?>
<option value="<?php echo $ct['id'];?>"><?php echo $ct['country'];?></option>
<?php } ?>
</select>
<div class="clearfix"></div>
</div> -->

<div class="form-group col-md-3">
<label class="form-label">State</label>
<!-- <select class="custom-select" name="state" id="state">
<?php foreach($state as $st) { ?>
<option value="<?php echo $st['id'];?>"><?php echo $st['state'];?></option>
<?php } ?>
</select> -->
<select class="custom-select" name="state" id="sel_state">
<?php foreach($state as $st) { ?>
<option value="<?php echo $st['id'];?>"><?php echo $st['state'];?></option>
<?php } ?>
</select>
<div class="clearfix"></div>
</div>

<div class="form-group col-md-3">
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

<div class="form-group col-md-3">
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

<div class="form-group col-md-3">
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


</div>

<div class="form-row">

<div class="form-group col-md-12">
<label class="form-label">Current Address</label>
<input type="text" name="currentaddress" id="currentaddress" class="form-control" placeholder="Current Address" maxlength="200"> 
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
<div class="form-group col-md-12">
<br/>
<h5>Permanent Address</h5>
<hr/>
<label class="form-check">
<input class="form-check-input" type="checkbox" value="" name="copy" id="copy">
<span class="form-check-label">Copy Current Address</span>
</label>
</div>

<!-- <div class="form-group col-md-3">
<label class="form-label">Country</label>
<select class="custom-select" name="pcountry" id="pcountry">
<?php foreach($country as $ct) { ?>
<option value="<?php echo $ct['id'];?>"><?php echo $ct['country'];?></option>
<?php } ?>
</select>
<div class="clearfix"></div>
</div> -->

<div class="form-group col-md-3">
<label class="form-label">State</label>
<!-- <select class="custom-select" name="state" id="state">
<?php foreach($state as $st) { ?>
<option value="<?php echo $st['id'];?>"><?php echo $st['state'];?></option>
<?php } ?>
</select> -->
<select class="custom-select" name="pstate" id="sel_state1">
<?php foreach($state as $st) { ?>
<option value="<?php echo $st['id'];?>"><?php echo $st['state'];?></option>
<?php } ?>
</select>
<div class="clearfix"></div>
</div>

<div class="form-group col-md-3">
<label class="form-label">City</label>
<!-- <select class="custom-select" name="city" id="city" required>
<?php foreach($city as $c) { ?>
<option value="<?php echo $c['id'];?>"><?php echo $c['city'];?></option>
<?php } ?>
</select> -->
<select class="custom-select" name="pcity" id='sel_city1'>
    <option>-- Select City --</option>
</select>
<div class="clearfix"></div>
</div>

<div class="form-group col-md-3">
<label class="form-label">Area</label>
<!-- <select class="custom-select" name="area" id="area" required>
<?php foreach($area as $ar) { ?>
<option value="<?php echo $ar['id'];?>"><?php echo $ar['area'];?></option>
<?php } ?>
</select> -->
<select class="custom-select" name="parea" id='sel_area1'>
    <option>-- Select Area --</option>
</select>
<div class="clearfix"></div>
</div>

<div class="form-group col-md-3">
<label class="form-label">Pin Code</label>
<!-- <select class="custom-select" name="pincode" id="pincode" required>
<?php foreach($pincode as $pc) { ?>
<option value="<?php echo $pc['id'];?>"><?php echo $pc['pincode'];?></option>
<?php } ?>
</select> -->
<select class="custom-select" name="ppincode" id='sel_pin1'>
    <option>-- Select Pincode--</option>
</select>
<div class="clearfix"></div>
</div>


</div>

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
<input type="text" name="homeaddress" id="homeaddress" class="form-control" placeholder="Home Address" maxlength="200"> 
<div class="clearfix"></div>
</div>

</div>




</div>
</div>
</div>

<div class="card mb-2">
<div class="card-header bg-primary">
<a class="d-flex justify-content-between text-white text-large text-uppercase" data-toggle="collapse" aria-expanded="true" href="#accordion2-3">Family References<div class="collapse-icon"></div></a>
</div>
<div id="accordion2-3" class="collapse show" data-parent="#accordion2">
<div class="card-body">

<div class="form-row">

<div class="form-group col-md-4">
<label class="form-label">Reference Name</label>
<input type="text" name="refname1" id="refname1" class="form-control" placeholder="Reference Name" maxlength="100">
<div class="clearfix"></div>
</div>

<div class="form-group col-md-4">
<label class="form-label">Relation</label>
<input type="text" name="relation1" id="relation1" class="form-control" placeholder="Relation" maxlength="100">
<div class="clearfix"></div>
</div>

<div class="form-group col-md-4">
<label class="form-label">Mobile</label>
<input type="number" name="refmobile1" id="refmobile1" class="form-control" placeholder="Mobile" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==10) return false;">
<div class="clearfix"></div>
</div>

</div>

<div class="form-row">

<div class="form-group col-md-4">
<label class="form-label">Reference Name</label>
<input type="text" name="refname2" id="refname2" class="form-control" placeholder="Reference Name" maxlength="100">
<div class="clearfix"></div>
</div>

<div class="form-group col-md-4">
<label class="form-label">Relation</label>
<input type="text" name="relation2" id="relation2" class="form-control" placeholder="Relation" maxlength="100">
<div class="clearfix"></div>
</div>

<div class="form-group col-md-4">
<label class="form-label">Mobile</label>
<input type="number" name="refmobile2" id="refmobile2" class="form-control" placeholder="Mobile" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==10) return false;">
<div class="clearfix"></div>
</div>

</div>




</div>
</div>
</div>


<div class="card mb-2">
<div class="card-header bg-danger">
<a class="d-flex justify-content-between text-white text-large text-uppercase" data-toggle="collapse" aria-expanded="true" href="#accordion2-4">Previous Company Details<div class="collapse-icon"></div></a>
</div>
<div id="accordion2-4" class="collapse show" data-parent="#accordion2">
<div class="card-body">

<div class="form-row">

<div class="form-group col-md-4">
<label class="form-label">Designation</label>
<input type="text" name="prevdesg" id="prevdesg" class="form-control" placeholder="Designation" maxlength="100">
<div class="clearfix"></div>
</div>

<div class="form-group col-md-4">
<label class="form-label">Company Name</label>
<input type="text" name="prevcompany" id="prevcompany" class="form-control" placeholder="Company Name" maxlength="100">
<div class="clearfix"></div>
</div>

<div class="form-group col-md-4">
<label class="form-label">Company Owner Name</label>
<input type="text" name="prevcompanyowner" id="prevcompanyowner" class="form-control" placeholder="Company Owner Name" maxlength="100">
<div class="clearfix"></div>
</div>

</div>

<div class="form-row">

<div class="form-group col-md-12">
<label class="form-label">Company Address</label>
<input type="text" name="prevcompanyaddress" id="prevcompanyaddress" class="form-control" placeholder="Company Address" maxlength="100">
<div class="clearfix"></div>
</div>

</div>



</div>
</div>
</div>


<div class="card mb-2">
<div class="card-header bg-warning">
<a class="d-flex justify-content-between text-white text-large text-uppercase" data-toggle="collapse" aria-expanded="true" href="#accordion2-5">Previous Company References<div class="collapse-icon"></div></a>
</div>
<div id="accordion2-5" class="collapse show" data-parent="#accordion2">
<div class="card-body">                                                 

<div class="form-row">

<div class="form-group col-md-4">
<label class="form-label">Reference Employee Name</label>
<input type="text" name="refempname1" id="refempname1" class="form-control" placeholder="Reference Name" maxlength="100">
<div class="clearfix"></div>
</div>

<div class="form-group col-md-4">
<label class="form-label">Mobile</label>
<input type="number" name="refempmobile1" id="refempmobile1" class="form-control" placeholder="Mobile" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==10) return false;">
<div class="clearfix"></div>
</div>

<div class="form-group col-md-4">
<label class="form-label">Designation</label>
<input type="text" name="refempdesg1" id="refempdesg1" class="form-control" placeholder="Designation" maxlength="100">
<div class="clearfix"></div>
</div>

</div>

<div class="form-row">

<div class="form-group col-md-4">
<label class="form-label">Reference Employee Name</label>
<input type="text" name="refempname2" id="refempname2" class="form-control" placeholder="Reference Name" maxlength="100">
<div class="clearfix"></div>
</div>

<div class="form-group col-md-4">
<label class="form-label">Mobile</label>
<input type="number" name="refempmobile2" id="refempmobile2" class="form-control" placeholder="Mobile" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==10) return false;">
<div class="clearfix"></div>
</div>

<div class="form-group col-md-4">
<label class="form-label">Designation</label>
<input type="text" name="refempdesg2" id="refempdesg2" class="form-control" placeholder="Designation" maxlength="100">
<div class="clearfix"></div>
</div>

</div>




</div>
</div>
</div>


<div class="card mb-2">
<div class="card-header bg-success">
<a class="d-flex justify-content-between text-white text-large text-uppercase" data-toggle="collapse" aria-expanded="true" href="#accordion2-6">Particulars Assigned By the Company<div class="collapse-icon"></div></a>
</div>
<div id="accordion2-6" class="collapse show" data-parent="#accordion2">
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
<input type="text" name="empcode" id="empcode" class="form-control" placeholder="Employee Code Like E122, N3434" value="<?php 
    function gen_random_string($length=6)
    {
        $chars ="1234567890";
        $final_rand ='NK';
        for($i=0;$i<$length; $i++)
        {
            $final_rand .= $chars[ rand(0,strlen($chars)-1)];
        }
        return $final_rand;
    }
    echo gen_random_string()."\n"; //generates a string 
    ?>" readonly>
<div class="clearfix"></div>
</div>

<div class="form-group col-md-6">
<label class="form-label">Official Email</label>
<input type="email" name="ofemail" id="ofemail" class="form-control" placeholder="Official Email" maxlength="100">
<div class="clearfix"></div>
</div>

</div>


<!--<div class="form-row">-->

<!--<div class="form-group col-md-6">-->
<!--<button type="submit" class="btn btn-primary">Save</button>-->
<!--</div>-->

<!--</div>-->

</div>
</div>
</div>
<div class="form-row">

<div class="form-group col-md-6">
<button type="submit" class="btn btn-primary">Save</button>
</div>

</div>


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