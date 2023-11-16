<?php include("header.php");?>
<div class="layout-content">
<div class="container-fluid flex-grow-1 container-p-y">
<h4 class="font-weight-bold py-3 mb-0">Area</h4>
<div class="text-muted small mt-0 mb-4 d-block breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard"><i class="feather icon-home"></i></a></li>
<li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard">Dashboard</a></li>
<li class="breadcrumb-item <?php if($this->uri->segment(1)=='area') { echo 'active';}?>"><a href="<?php echo base_url();?>area">Area</a></li>
</ol>
</div>
<div class="row">

<?php include("demographcontent.php");?>

<?php include("areacontent.php");?>


      <div class="col-md-12">
         <div class="card">
                              <div class="card-header">
                                 <h5>Area</h5>
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
                                       <button class="btn btn-success btn-sm mb-3 btn-round" data-toggle="modal" data-target="#modal-report"><i class="feather icon-plus"></i> Add area</button>
                                    </div>
                                 </div>
                                 <div class="table-responsive">
                                    <table id="report-table" class="table table-bordered table-striped mb-0">
                                       <thead>
                                        <tr>
                                        <th>S.No.</th>
                                       <th>Area</th>
                                       <th>City</th>
                                       <th>State</th>
                                       <th>Country</th>
                                       <th>Date</th>
                                       <th>Status</th>
                                       <th>Action</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                       <?php 
$i=1;
foreach($areatoday as $cust)
{
?>
<tr>
<td><?php echo $i;?></td>
<td><?php echo $cust['area'];?></td>
<td><?php 
foreach($city as $ct){
  if($ct['id']==$cust['city_id'])
  {
    echo $ct['city'];
  }
}
//echo $cust['country_id'];?>
<!-- <small class="d-block">
<a href="#!">View</a> |
<a href="#!">Contacts</a> |
<a href="#!" class="text-danger">Delete </a>
</small> -->
</td>
<td><?php 
foreach($state as $st){
  if($st['id']==$cust['state_id'])
  {
    echo $st['state'];
  }
}
//echo $cust['country_id'];?>
<!-- <small class="d-block">
<a href="#!">View</a> |
<a href="#!">Contacts</a> |
<a href="#!" class="text-danger">Delete </a>
</small> -->
</td>
<td><?php 
foreach($country as $ctry){
  if($ctry['id']==$cust['country_id'])
  {
    echo $ctry['country'];
  }
}
//echo $cust['country_id'];?>
<!-- <small class="d-block">
<a href="#!">View</a> |
<a href="#!">Contacts</a> |
<a href="#!" class="text-danger">Delete </a>
</small> -->
</td>
<td><?php echo $cust['date'];?></td>
<td>
<?php
                          if($cust['status'] == '1') {
                           ?>
                                                    <a href="<?php echo base_url();?>backend/areastatus/<?php echo $cust['id']; ?>"><button class="btn btn-success">Active</button></a>

                                                    <?php
                          } else if($cust['status'] == '0') {
                            ?>
                                                        <a href="<?php echo base_url();?>backend/areastatus/<?php echo $cust['id']; ?>"><button class="btn btn-danger">Deactive</button></a>
                                                        <?php
                          } 
                            ?>
</td>
                                            <td>
											<a href="!#"  class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-report-1<?php echo $cust['id']; ?>">Edit</a>

                                            

                                            <a href="<?php echo base_url();?>deletearea/<?php echo $cust['id']; ?>" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Delete </a>
                                            </td>
                                            </tr>

                                            <div class="modal fade" id="modal-report-1<?php echo $cust['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
         <div class="modal-dialog ">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title">Edit Area</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
               <form action="<?php echo base_url();?>edit_area" method="post" enctype="multipart/form-data">
               <input type="hidden" name="id" class="form-control" value="<?php echo $cust['id'];?>">
<div class="row">


<div class="form-group col-md-6">
<label class="floating-label">Country</label>
<select class="custom-select" name="countryid" id="countryid" required>
<option value="<?php echo $cust['country_id'];?>" selected><?php foreach($country as $ct1) {
            if($ct1['id']==$cust['country_id'])
            {
               echo $ct1['country'];
            }
         }?></option>
<?php foreach($country as $ct) { ?>
<option value="<?php echo $ct['id'];?>"><?php echo $ct['country'];?></option>
<?php } ?>
</select>
</div>

<div class="form-group col-md-6">
<label class="floating-label">State</label>
<select class="custom-select" name="stateid" id="stateid" required>
<option value="<?php echo $cust['state_id'];?>" selected><?php foreach($state as $st1) {
            if($st1['id']==$cust['state_id'])
            {
               echo $st1['state'];
            }
         }?></option>
<?php foreach($state as $st) { ?>
<option value="<?php echo $st['id'];?>"><?php echo $st['state'];?></option>
<?php } ?>
</select>
</div>

<div class="form-group col-md-6">
<label class="floating-label">City</label>
<select class="custom-select" name="cityid" id="cityid" required>
<option value="<?php echo $cust['city_id'];?>" selected><?php foreach($city as $c1) {
            if($c1['id']==$cust['city_id'])
            {
               echo $c1['city'];
            }
         }?></option>
<?php foreach($city as $c) { ?>
<option value="<?php echo $c['id'];?>"><?php echo $c['city'];?></option>
<?php } ?>
</select>
</div>

<div class="form-group col-sm-6">
<label class="floating-label">Area Name</label>
<input type="text" name="area" id="area" class="form-control" placeholder="Area Name" maxlength="255" value="<?php echo $cust['area']; ?>" required>
</div>
<div class="col-sm-12">
<button class="btn btn-primary" type="submit">Update</button>
<button class="btn btn-danger" data-dismiss="modal">Exit</button>
</div>
</div>
</form>
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
                  <h5 class="modal-title">Add Area</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
               <form action="<?php echo base_url();?>add_area" method="post" enctype="multipart/form-data">
               <div class="row">

<div class="form-group col-md-4">
<label class="floating-label">Country</label>
<select class="custom-select" name="countryid" id="countryid" required>
<?php foreach($country as $ct) { ?>
<option value="<?php echo $ct['id'];?>"><?php echo $ct['country'];?></option>
<?php } ?>
</select>
</div>

<div class="form-group col-md-6">
<label class="floating-label">State</label>
<select class="custom-select" name="stateid" id="stateid" required>
<?php foreach($state as $st) { ?>
<option value="<?php echo $st['id'];?>"><?php echo $st['state'];?></option>
<?php } ?>
</select>
</div>

<div class="form-group col-md-6">
<label class="floating-label">City</label>
<select class="custom-select" name="cityid" id="cityid" required>
<?php foreach($city as $c) { ?>
<option value="<?php echo $c['id'];?>"><?php echo $c['city'];?></option>
<?php } ?>
</select>
</div>

<div class="form-group col-sm-6">
<label class="floating-label">Area Name</label> 
<input type="text" name="area" id="area" class="form-control" placeholder="Area Name" maxlength="100" required>
</div>

<div class="col-sm-12">
<button class="btn btn-primary" type="submit">Save</button>
<button class="btn btn-danger" data-dismiss="modal">Exit</button> OR 
<a href="<?php echo base_url();?>pincode"><button class="btn btn-primary" type="button">Add PinCode</button></a>
</div>
</div>
</form>
               </div>
            </div>
         </div>
      </div>
      


      

     
<?php include("footer.php");?>