<?php include("header.php");?>
<div class="layout-content">
<div class="container-fluid flex-grow-1 container-p-y">
<h4 class="font-weight-bold py-3 mb-0">Godowns</h4>
<div class="text-muted small mt-0 mb-4 d-block breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard"><i class="feather icon-home"></i></a></li>
<li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard">Dashboard</a></li>
<li class="breadcrumb-item <?php if($this->uri->segment(1)=='godown') { echo 'active';}?>"><a href="<?php echo base_url();?>godown">Godowns</a></li>
</ol>
</div>
   <div class="row">

<?php include("godowncontent.php");?>



      <div class="col-md-12">
         <div class="card">
                              <div class="card-header">
                                 <h5>Godowns</h5>
                              </div>
                              <div class="card-body">
                                 <div class="row align-items-center m-l-0">
                                    <div class="col-sm-6"><?php if($this->session->flashdata('msg')){ ?>
            <div class="text-green">
                <h5 class="text-left text-success">
                    <?php echo $this->session->flashdata('msg'); ?>
                    </h5>
            </div>
            <?php } ?></div>
                                    <div class="col-sm-6 text-right">
                                        <?php if($acces['control']=='N'){?>
                                            <button class="btn btn-success btn-sm mb-3 btn-round" ><i class="feather icon-plus"></i> Add Godown</button>
                                   
  <?php }elseif($acces['control']=='0'){?>
      <button class="btn btn-success btn-sm mb-3 btn-round" data-toggle="modal" data-target="#modal-report"><i class="feather icon-plus"></i> Add Godown</button>
                                   
<?php }else{ ?>
    <button class="btn btn-success btn-sm mb-3 btn-round" data-toggle="modal" data-target="#modal-report"><i class="feather icon-plus"></i> Add Godown</button>
                                   
   <?php } ?>
                                    </div>
                                 </div>
                                 <div class="table-responsive">
                                    <table id="report-table" class="table table-bordered table-striped mb-0"> 
                                    <!-- <table id="report-table" data-search="true" data-show-refresh="true" data-show-export="true" data-show-pagination-switch="true" data-pagination="true" data-id-field="id" data-show-footer="true" > -->
                                       <thead>
                                        <tr>
                                        <th>S.No.</th>
                                        <th>Date</th>
                                        <th>Image</th>
                                       <th>Godown</th>
                                       <th>State</th>
                                       <th>City</th>
                                       <th>Area</th>
                                       <th>Pin Code</th>
                                       
                                       <th>Status</th>
                                       <th>Action</th>
                                       </tr>
                                       </thead>
                                       <tbody>
                                       <?php 
$i=1;
foreach($godown as $cust)
{
?>
<tr>
<td><?php echo $i;?></td>

<td><?php echo $cust['date'];?></td>
<td><img src="<?php echo base_url();?>assets/img/godown/<?php echo $cust['godownimage'];?>" class="img-fluid img-radius wid-40" alt=""></td>
<td><?php echo $cust['godown'];?></td>
<td><?php 
foreach($state as $st){
  if($st['id']==$cust['state'])
  {
    echo $st['state'];
  }
}
?>
</td>
<td><?php 
foreach($city as $ct){
  if($ct['id']==$cust['city'])
  {
    echo $ct['city'];
  }
}
?>
</td>
<td><?php 
foreach($area as $ar){
  if($ar['id']==$cust['area'])
  {
    echo $ar['area'];
  }
}
?>
</td>
<td><?php 
foreach($pincode as $pn){
  if($pn['id']==$cust['pincode'])
  {
    echo $pn['pincode'];
  }
}
?>
</td>

<td>
<?php
                          if($cust['status'] == '1') {
                           ?>
                                                    <a href="<?php echo base_url();?>home/godownstatus/<?php echo $cust['id']; ?>"><button class="btn btn-success">Active</button></a>

                                                    <?php
                          } else if($cust['status'] == '0') {
                            ?>
                                                        <a href="<?php echo base_url();?>home/godownstatus/<?php echo $cust['id']; ?>"><button class="btn btn-danger">Deactive</button></a>
                                                        <?php
                          } 
                            ?>
</td>
                                            <td>
                                <?php if($acces['control_ed']=='N'){?>
                                <a href="#"  class="btn btn-info btn-sm" data-toggle="modal">Edit</a>

                                <?php }elseif($acces['control_ed']=='1'){?>
                                <a href="!#"  class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-report-1<?php echo $cust['id']; ?>">Edit</a>

                                <?php }else{ ?>
                                <a href="!#"  class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-report-1<?php echo $cust['id']; ?>">Edit</a>

                                <?php } ?>
                               
                        <?php if($acces['control_del']=='N'){?>
                         <a href="#" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Delete </a>
                                           
                        <?php }elseif($acces['control_del']=='3'){?>
                         <a href="<?php echo base_url();?>deletegodown/<?php echo $cust['id']; ?>" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Delete </a>
                                           
                        <?php }else{ ?>
                         <a href="<?php echo base_url();?>deletegodown/<?php echo $cust['id']; ?>" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Delete </a>
                                           
                        <?php } ?>	
    

                                            </td>
                                            </tr>

                                            <div class="modal fade" id="modal-report-1<?php echo $cust['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
         <div class="modal-dialog ">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title">Edit Godown</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
               <form action="<?php echo base_url();?>home/edit_godown" method="post" enctype="multipart/form-data">
               <input type="hidden" name="id" class="form-control" value="<?php echo $cust['id'];?>">
<div class="row">

<div class="form-group col-sm-6">
<label class="floating-label">Godown Name</label>
<input type="text" name="godown" id="godown" class="form-control" placeholder="Godown Name" maxlength="100" value="<?php echo $cust['godown']; ?>" required>
</div>

<div class="form-group col-md-6">
<label class="floating-label">Godown Image</label>
<div class="col"><img class="img-radius img-fluid wid-80" src="<?php echo base_url();?>assets/img/godown/<?php echo $cust['godownimage'];?>" alt="Godown image"></div>
<input type="file" name="godownimage" id="godownimage" class="form-control" id="Icon" placeholder="sdf">
</div>

<div class="form-group col-sm-6">
<label class="floating-label">Manager Name</label>
<input type="text" name="manager" id="manager" class="form-control" placeholder="Manager Name" maxlength="100" value="<?php echo $cust['manager']; ?>">
</div>

<div class="form-group col-sm-6">
<label class="floating-label">Mobile</label>
<input type="number" name="mobile" id="mobile" class="form-control" placeholder="Mobile" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==10) return false;" value="<?php echo $cust['mobile']; ?>">
</div>

<div class="form-group col-md-3">
<label class="form-label">State</label>
<select class="custom-select" name="state" id="sel_state">
<option value="<?php echo $cust['state'];?>">
<?php
foreach($state as $st) {
if($st['id']==$cust['state'])
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
</div>

<div class="form-group col-md-3">
<label class="form-label">City</label>
<select class="custom-select" name="city" id='sel_city'>
<option value="<?php echo $cust['city'];?>">
<?php
foreach($city as $cty) {
if($cty['id']==$cust['city'])
{
    echo $cty['city'];
}
}
?>
</option>
    <option>-- Select City --</option>
</select>
</div>

<div class="form-group col-md-3">
<label class="form-label">Area</label>
<select class="custom-select" name="area" id='sel_area'>
<option value="<?php echo $cust['area'];?>">
<?php
foreach($area as $ar) {
if($ar['id']==$cust['area'])
{
    echo $ar['area'];
}
}
?>
</option>
    <option>-- Select Area --</option>
</select>
</div>

<div class="form-group col-md-3">
<label class="form-label">Pin Code</label>
<select class="custom-select" name="pincode" id='sel_pin'>
<option value="<?php echo $cust['pincode'];?>">
<?php
foreach($pincode as $pn) {
if($pn['id']==$cust['pincode'])
{
    echo $pn['pincode'];
}
}
?>
</option>
    <option>-- Select Pincode--</option>
</select>
</div>

<div class="form-group col-md-12">
<label class="form-label">Godown Address</label>
<input type="text" name="address" id="address" class="form-control" placeholder="Godown Address" maxlength="200" value="<?php echo $cust['address'];?>"> 
</div>
<div class="form-group col-md-12">
<label class="form-label">Godown Location</label>
<input type="text" name="location" id="address" class="form-control" placeholder="Godown location" maxlength="" value="<?php echo $cust['godownlink'];?>"> 
</div>

<div class="col-sm-12">
<button class="btn btn-primary" type="submit">Update</button>
<button class="btn btn-danger" data-dismiss="modal">Exit</button>
</div>
</div>
</form>

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
               </div>
            </div>
         </div>
      </div>


<?php $i++; } ?>
                                          </tbody>
                                    </table>
                                 </div>
                              </div>
                           </div>
                        </div>
   </div>
</div>


<div class="modal fade" id="modal-report" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title">Add Godown</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
               <form action="<?php echo base_url();?>add_godown" method="post" enctype="multipart/form-data">
               <div class="row">

<div class="form-group col-sm-6">
<label class="floating-label">Godown Name</label>
<input type="text" name="godown" id="godown" class="form-control" placeholder="Godown Name" maxlength="100" required>
</div>

<div class="form-group col-md-6">
<label class="floating-label">Godown Image</label>
<input type="file" name="godownimage" id="godownimage" class="form-control" id="Icon" placeholder="sdf">
</div>

<div class="form-group col-sm-6">
<label class="floating-label">Manager Name</label>
<input type="text" name="manager" id="manager" class="form-control" placeholder="Manager Name" maxlength="100">
</div>

<div class="form-group col-sm-6">
<label class="floating-label">Mobile</label>
<input type="number" name="mobile" id="mobile" class="form-control" placeholder="Mobile" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==10) return false;">
</div>

<div class="form-group col-md-3">
<label class="form-label">State</label>
<select class="custom-select" name="state" id="sel_state1">
<?php foreach($state as $st2) { ?>
<option value="<?php echo $st2['id'];?>"><?php echo $st2['state'];?></option>
<?php } ?>
</select>
</div>

<div class="form-group col-md-3">
<label class="form-label">City</label>
<select class="custom-select" name="city" id='sel_city1'>
    <option>-- Select City --</option>
</select>
</div>

<div class="form-group col-md-3">
<label class="form-label">Area</label>
<select class="custom-select" name="area" id='sel_area1'>
    <option>-- Select Area --</option>
</select>
</div>

<div class="form-group col-md-3">
<label class="form-label">Pin Code</label>
<select class="custom-select" name="pincode" id='sel_pin1'>
    <option>-- Select Pincode--</option>
</select>
</div>

<div class="form-group col-md-12">
<label class="form-label">Godown Address</label>
<input type="text" name="address" id="address" class="form-control" placeholder="Godown Address" maxlength="200"> 
</div>
<div class="form-group col-md-12">
<label class="form-label">Google Map Location</label>
<input type="text" name="location" id="address" class="form-control" placeholder="Godown location link"> 
</div>
<div class="col-sm-12">
<button class="btn btn-primary" type="submit">Save</button>
<button class="btn btn-danger" data-dismiss="modal">Exit</button>
</div>
</div>
</form>
               </div>
            </div>
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


      

     
<?php include("footer.php");?>