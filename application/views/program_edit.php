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
<h4 class="font-weight-bold py-3 mb-0">Edit Programs</h4>
<div class="text-muted small mt-0 mb-4 d-block breadcrumb">
   <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard"><i class="feather icon-home"></i></a></li>
      <li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard">Dashboard</a></li>
      <li class="breadcrumb-item"><a href="<?php echo base_url();?>home/program">Program</a></li>
      <li class="breadcrumb-item <?php if($this->uri->segment(1)=='home/addprogram') { echo 'active';}?>"><a href="<?php echo base_url();?>addvendor">Edit Program</a></li>
   </ol>
</div>

<div class="card mb-2">
   <div class="card-header bg-info">
      <a class="d-flex justify-content-between text-white text-large text-uppercase" data-toggle="collapse" aria-expanded="true" href="#accordion2-2">
         Program Details
         <div class="collapse-icon"></div>
      </a>
   </div>
   
   <div id="accordion2-2" class="collapse show" data-parent="#accordion2">
      <div class="card-body">
            <form action="<?php echo base_url();?>home/programupdate" method="post" enctype="multipart/form-data">
         <div class="form-row">
         </div>
         <div class="form-row">
            <div class="form-group col-md-3">
           
               <label class="form-label">Program Name</label>
                <input type="hidden" name="id"  class="form-control" placeholder="Program Name" value="<?php echo $program->id; ?>">
               <input type="text" name="program_name"  class="form-control" placeholder="Program Name" value="<?php echo $program->program_name; ?>">
               <div class="clearfix"></div>
            </div>
            <div class="form-group col-md-3">
               <label class="form-label">Category</label>
               <select class="custom-select" name="program_category">
                  <option value="">-- Select Category --</option>
                 	<option value="अन्य" <?php if($program->program_category=='अन्य'){echo"selected";} ?>>अन्य</option>
	<option value="लोक एवं जनजातीय" <?php if($program->program_category=='लोक एवं जनजातीय'){echo"selected";} ?>>लोक एवं जनजातीय</option>
	<option value="सुगम संगीत"  <?php if($program->program_category=='सुगम संगीत'){echo"selected";} ?>>सुगम संगीत</option>
	<option value="ूपंकर,प्रदर्शन  एवं अन्य ललित कलाएं"  <?php if($program->program_category=='ूपंकर,प्रदर्शन  एवं अन्य ललित कलाएं'){echo"selected";} ?>>रूपंकर,प्रदर्शन  एवं अन्य ललित कलाएं</option>
	<option value="समकालीन कलाएं"  <?php if($program->program_category=='समकालीन कलाएं"'){echo"selected";} ?>>समकालीन कलाएं</option>
	<option value="रंगमंच एवं लोकनाट्य"  <?php if($program->program_category=='रंगमंच एवं लोकनाट्य'){echo"selected";} ?>>रंगमंच एवं लोकनाट्य</option>
	<option value="शास्त्रीय संगीत"  <?php if($program->program_category=='शास्त्रीय संगीत'){echo"selected";} ?>>शास्त्रीय संगीत</option>
	<option value="पुरुस्कार एवं अलंकरण"  <?php if($program->program_category=='पुरुस्कार एवं अलंकरण'){echo"selected";} ?>>पुरुस्कार एवं अलंकरण</option>
	<option value="कवि सम्मलेन एवं मुशायरा"  <?php if($program->program_category=='कवि सम्मलेन एवं मुशायरा'){echo"selected";} ?>>कवि सम्मलेन एवं मुशायरा</option>
	<option value="साहित्य"  <?php if($program->program_category=='साहित्य'){echo"selected";} ?>>साहित्य</option>
	<option value="पुरातत्व"  <?php if($program->program_category=='पुरातत्व'){echo"selected";} ?>>पुरातत्व</option>
	<option value="साहित्यिक एवं सांस्कृतिक"  <?php if($program->program_category=='साहित्यिक एवं सांस्कृतिक'){echo"selected";} ?>>साहित्यिक एवं सांस्कृतिक</option>
	<option value="शास्त्रीय नृत्य प्रशिक्षण"  <?php if($program->program_category=='शास्त्रीय नृत्य प्रशिक्षण'){echo"selected";} ?>>शास्त्रीय नृत्य प्रशिक्षण</option>
         </select>
               <div class="clearfix"></div>
            </div>
        
            <div class="form-group col-md-3">
               <label class="form-label">Program Type </label>
               <select class="custom-select" name="program_type" >
                  <option value="">-- Select program --</option>
                  
<option value="Discussion" <?php if($program->program_type=='Discussion'){echo "selected";}?>>Discussion</option>
	<option value="Hybrid" <?php if($program->program_type=='Hybrid'){echo "selected";}?>>Hybrid</option>
	<option value="Lecture" <?php if($program->program_type=='Lecture'){echo "selected";}?>>>Lecture</option>
	<option value="Other" <?php if($program->program_type=='Other'){echo "selected";}?>>>Other</option>
	<option value="Play" <?php if($program->program_type=='Play'){echo "selected";}?>>>Play</option>
	<option value="Training" <?php if($program->program_type=='Training'){echo "selected";}?>>>Training</option>
               </select>
               <div class="clearfix"></div>
            </div>
            <div class="form-group col-md-3">
               <label class="form-label">Live Streaming Link</label>
               <input type="text" name="program_link"  class="form-control" placeholder="Live Streaming Link" value="<?php echo $program->program_link; ?>">
               <div class="clearfix"></div>
            </div>
       
            <div class="form-group col-md-3">
               <label class="form-label">Starting Date</label>
               <input type="date" name="starting_date"  class="form-control" placeholder="starting date" value="<?php echo $program->starting_date; ?>">
               <div class="clearfix"></div>
            </div>
            <div class="form-group col-md-3">
               <label class="form-label">End Date</label>
               <input type="date" name="end_date"  class="form-control" placeholder="end date" value="<?php echo $program->end_date; ?>">
               <div class="clearfix"></div>
            </div>
       
       
        <div class="form-group col-md-3">
               <label class="form-label">Starting Time</label>
               <input type="time" name="starting_time"  class="form-control" placeholder="starting time" value="<?php echo $program->starting_time; ?>">
               <div class="clearfix"></div>
            </div>
            <div class="form-group col-md-3">
               <label class="form-label">End Time </label>
               <input type="time" name="end_time"  class="form-control" placeholder="end time"  value="<?php echo $program->end_time; ?>">
               <div class="clearfix"></div>
            </div>
            
            
            <div class="form-group col-md-3">
               <label class="form-label">Entry Type </label>
              <select class="custom-select" name="entry_type" >
                  <option value="">--Entry Type--</option>
                  <option value="Ticket" <?php  if($program->entry_type=='Ticket'){echo "selected";} ?>>Ticket</option>
	<option value="Pass" <?php  if($program->entry_type=='Pass'){echo "selected";} ?>>Pass</option>
	<option value="Free" <?php  if($program->entry_type=='Free'){echo "selected";} ?>>Free</option>
               </select>
               <div class="clearfix"></div>
            </div>
            <div class="form-group col-md-3">
               <label class="form-label">Chief Guest</label>
              <input type="text" name="chief_guest" class="form-control" placeholder="Chief Guest" maxlength="100" value="<?php echo $program->chief_guest; ?>">

               <div class="clearfix"></div>
            </div>
         
            <div class="form-group col-md-3">
               <label class="form-label">Venue</label>
               <input type="text" name="venu"  class="form-control" placeholder="venu" maxlength="100" value="<?php echo $program->venu; ?>">
               <div class="clearfix"></div>
            </div>
            
            
             <div class="form-group col-md-3">
               <label class="form-label">Address</label>
               <input type="text" name="address"  class="form-control" placeholder="Address" maxlength="100" value="<?php echo $program->address; ?>">
               <div class="clearfix"></div>
            </div>
            
          
            <div class="form-group col-md-3">
               <label class="form-label">State</label>
               <select class="custom-select" name="state">
                  <option>--Select--</option>
                  <option>	Andaman and Nicobar Islands	</option>
                  <option>	Andhra Pradesh	</option>
                  <option>	Arunachal Pradesh	</option>
                  <option>	Assam	</option>
                  <option>	Bihar	</option>
                  <option>	Chandigarh	</option>
                  <option>	Chhattisgarh	</option>
                  <option>	Dadra and Nagar Haveli	</option>
                  <option>	Daman &amp; Diu	</option>
                  <option>	Delhi	</option>
                  <option>	Goa	</option>
                  <option>	Gujrat	</option>
                  <option>	Haryana	</option>
                  <option>	Himachal Pradesh	</option>
                  <option>	Jammu &amp; Kashmir	</option>
                  <option>	Jharkhand	</option>
                  <option>	Karnataka	</option>
                  <option>	Kerala	</option>
                  <option>	Ladakh	</option>
                  <option>	Lakshadweep	</option>
                  <option selected="">	Madhya Pradesh	</option>
                  <option>	Maharashtra	</option>
                  <option>	Manipur	</option>
                  <option>	Meghalaya	</option>
                  <option>	Mizoram	</option>
                  <option>	Nagaland	</option>
                  <option>	Odisha	</option>
                  <option>	Puducherry	</option>
                  <option>	Punjab	</option>
                  <option>	Rajasthan	</option>
                  <option>	Sikkim	</option>
                  <option>	Tamil Nadu	</option>
                  <option>	Telangana	</option>
                  <option>	Tripura	</option>
                  <option>	Uttarakhand	</option>
                  <option>	Utttar Pradesh	</option>
                  <option>	West Bengal	</option>
                  <option>Non Indian</option>
               </select>
               <div class="clearfix"></div>
            </div>
            <div class="form-group col-md-3">
               <label class="form-label">District</label>
            
               <select class="custom-select" name="district">
                  <option value="">-- Select District --</option>
                  <option>Bhopal</option>

		       <option <?php if($program->district=='Indore'){echo "selected";} ?>>Indore</option>
		       <option <?php if($program->district=='Gwalior'){echo "selected";} ?>>Gwalior</option>
		       <option <?php if($program->district=='Sehore'){echo "selected";} ?>>Sehore</option>
		       <option <?php if($program->district=='Itarsi'){echo "selected";} ?>>Itarsi</option>
		       <option <?php if($program->district=='Alirajpur'){echo "selected";} ?>>Alirajpur</option>
		       <option <?php if($program->district=='Anuppur'){echo "selected";} ?>>Anuppur</option>

               </select>
               <div class="clearfix"></div>
            </div>
        
            <div class="form-group col-md-3">
               <label class="form-label">City</label>
            
              <input type="text" name="city" class="form-control" placeholder="City" maxlength="100" value="<?php echo $program->city; ?>">
               <div class="clearfix"></div>
            </div>
            <div class="form-group col-md-3">
               <label class="form-label">Pin Code</label>
              <input type="text" name="pincode" class="form-control" placeholder="pincode" maxlength="100" value="<?php echo $program->pincode; ?>">
               <div class="clearfix"></div>
            </div>
            </div>
            <div class="form-row">
              <div class="" style="width: -webkit-fill-available;">
      <p class="h3" style="background: cadetblue;">Artist Details</p>
      <div class="card my-4 shadow">
        <div class="card-body">


        
          	 <div class="row" style="align-items: center;">
          	     <table id="report-table" class="table table-striped table-hover">
<thead>
<tr>

<th>Artist Name</th>
<th>Category</th>
<th>Date and Time</th>
<th>Description</th>
<th></th>

</tr>
</thead>
<tbody>
<?php   $p_id=$program->id;
                        $query = "SELECT  *FROM  programlist where progId='$p_id' and artist_name!=''";
                  
				   $sql=$this->db->query($query);
                    $artistArray=$sql->result_array();
$i=1;
foreach($artistArray as $cust)
{
?>
<tr>

<td><a href="#<?php echo base_url();?>"><?php echo $cust['artist_name'];?></a>

</td>
<td><?php echo $cust['artist_category'];?></td>
<td><?php echo $cust['artist_datetime'];?></td>
<td><?php echo $cust['artist_description'];?></td>
<td><a href="<?php echo base_url();?>home/deleteprog/<?php echo $cust['id']; ?>" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i></a></td>


</tr>
<?php $i++; } ?>


</tbody>
</table>
  <div class="col-md-10 dynamic-field" id="dynamic-field-1">
      
      
      <!------------------------->
    <div class="row" >
       
      <div class="col-md-3">
        <div class="form-group">
          <label for="field" class="hidden-md">Artist Name</label>
          <input type="text" id="field" class="form-control" name="artistname[]" placeholder="Artist Name" />
        </div>
      </div>
      <div class="col-md-3">
        <div class="form-group">
          <label>Category</label>
          <input type="text" class="form-control" name="artistcategory[]" placeholder="Category">
        </div>
              </div>
              
               <div class="col-md-3">
        <div class="staresd">
          <div class="imgup">
             <label> Date and Time </label>
            <input type="text" class="form-control" name="datetime[]" placeholder="Date and Time">
          </div>
        </div>
      </div>
       <div class="col-md-3">
        <div class="form-group">
          <label for="field" class="hidden-md">Description</label>
          <input type="text" id="field" class="form-control" name="description[]" placeholder="Description"/>
        </div>
      </div>
            </div>
  </div>
  <div class="col-md-2 mt-30 append-buttons">
    <div class="clearfix">
      <button type="button" id="add-button" class="btn btn-secondary float-left text-uppercase shadow-sm"><i class="fa fa-plus fa-fw"></i>
      </button>
      <button type="button" id="remove-button" class="btn btn-secondary float-left text-uppercase ml-1" disabled="disabled"><i class="fa fa-minus fa-fw"></i>
      </button>
    </div>
  </div>
</div>

<script>
    
    


$(document).ready(function() {
  var buttonAdd = $("#add-button");
  var buttonRemove = $("#remove-button");
  var className = ".dynamic-field";
  var count = 0;
  var field = "";
  var maxFields =50;

  function totalFields() {
    return $(className).length;
  }

  function addNewField() {
    count = totalFields() + 1;
    field = $("#dynamic-field-1").clone();
    field.attr("id", "dynamic-field-" + count);
    field.children("label").text("Field " + count);
    field.find("input").val("");
    $(className + ":last").after($(field));
  }

  function removeLastField() {
    if (totalFields() > 1) {
      $(className + ":last").remove();
    }
  }

  function enableButtonRemove() {
    if (totalFields() === 2) {
      buttonRemove.removeAttr("disabled");
      buttonRemove.addClass("shadow-sm");
    }
  }

  function disableButtonRemove() {
    if (totalFields() === 1) {
      buttonRemove.attr("disabled", "disabled");
      buttonRemove.removeClass("shadow-sm");
    }
  }

  function disableButtonAdd() {
    if (totalFields() === maxFields) {
      buttonAdd.attr("disabled", "disabled");
      buttonAdd.removeClass("shadow-sm");
    }
  }

  function enableButtonAdd() {
    if (totalFields() === (maxFields - 1)) {
      buttonAdd.removeAttr("disabled");
      buttonAdd.addClass("shadow-sm");
    }
  }

  buttonAdd.click(function() {
    addNewField();
    enableButtonRemove();
    disableButtonAdd();
  });

  buttonRemove.click(function() {
    removeLastField();
    disableButtonRemove();
    enableButtonAdd();
  });
});
</script>
        </div>
      </div>
    </div>
         </div>
           
        
        
        <div class="form-row">
                     <div class="form-group col-md-3">
                        <label class="form-label">Profile Picture (Max. 1MB)</label>
                        <input type="file" name="profile_img1" id="profileimage" class="form-control" placeholder="">
                        <input type="hidden" name="profile_img1old" id="profileimage" class="form-control" value="<?php echo $program->profile_img1; ?>">
                      <img src="http://jusmarktech.in/Culture/public/uploads/<?php echo $program->profile_img1; ?>" width="100">
                              
                        <div class="clearfix"></div>
                     </div>
                      <div class="form-group col-md-3">
                        <label class="form-label">Banner Image 1 (Max. 5MB)</label>
                        <input type="file" name="profile_img2" id="profileimage" class="form-control" placeholder="">
                         <input type="hidden" name="profile_img2old" id="profileimage" class="form-control" value="<?php echo $program->profile_img2; ?>">
                        <img src="http://jusmarktech.in/Culture/public/uploads/<?php echo $program->profile_img2; ?>" width="100">
                               
                        <div class="clearfix"></div>
                     </div>
                      <div class="form-group col-md-3">
                        <label class="form-label">Banner Image 2 (Max. 1MB)</label>
                        <input type="file" name="profile_img3" id="profileimage" class="form-control" placeholder="">
                        <input type="hidden" name="profile_img3old" id="profileimage" class="form-control" value="<?php echo $program->profile_img3; ?>">
                         <img src="http://jusmarktech.in/Culture/public/uploads/<?php echo $program->profile_img3; ?>" width="100">
                                
                        <div class="clearfix"></div>
                     </div>
                      <div class="form-group col-md-3">
                        <label class="form-label">Attachment For Email Notification</label>
                        <input type="file" name="profile_img4" id="profileimage" class="form-control" placeholder="">
                        <input type="hidden" name="profile_img4old" id="profileimage" class="form-control" value="<?php echo $program->profile_img4; ?>">
                          <img src="http://jusmarktech.in/Culture/public/uploads/<?php echo $program->profile_img4; ?>" width="100">
                               
                        <div class="clearfix"></div>
                     </div>
         </div>
           <div class="form-row">
      <div class="form-group col-md-6">
      <label class="form-label">Date of Email Notification</label>
      <input type="text" name="date_of_email"  class="form-control" placeholder="Date of Email Notification" value="<?php echo $program->date_of_email; ?>">
      <div class="clearfix"></div>
      </div>
       <div class="form-group col-md-6">
      <label class="form-label">About Program</label>
      <textarea type="text" name="about" class="form-control" placeholder="About Program"><?php echo $program->about; ?></textarea>
      <div class="clearfix"></div>
      </div>
      </div>
      <button class="btn btn-primary" type="submit" name="submit">Update</button>
         </form>
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
  
<?php include("footer.php");?>