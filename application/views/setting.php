<?php include("header.php");?>
<link rel="stylesheet" href="<?php echo base_url();?>assets/libs/datatables/datatables.css">
<div class="layout-content">
<div class="container-fluid flex-grow-1 container-p-y">
   <h4 class="font-weight-bold py-3 mb-0">Setting</h4>
   <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
      <ol class="breadcrumb">
         <li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard"><i class="feather icon-home"></i></a></li>
         <li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard">Dashboard</a></li>
         <li class="breadcrumb-item <?php if($this->uri->segment(1)=='slider') { echo 'active';}?>"><a href="<?php echo base_url();?>vehicle">Setting</a></li>
      </ol>
   </div>
   <div class="row form_show" style="display: none;">
   <div class="layout-content">
      <div class="container-fluid flex-grow-1 container-p-y">
         <div class="card mb-4">
            <h6 class="card-header">Add Setting</h6>
            <div class="card-body">
               <form action="<?php echo base_url();?>add_setting" method="post" enctype="multipart/form-data">
                  <div class="form-row">
                     <div class="form-group col-md-4">
                        <label class="form-label">Mobile No.</label>
                        <input type="text" name="mobile" id="state" class="form-control" placeholder="Mobile No " maxlength="100">
                        <input type="hidden" name="date" id="state" class="form-control" value="<?php echo(date("Y-m-d")); ?>">
                        <div class="clearfix"></div>
                     </div>
                      <div class="form-group col-md-4">
                        <label class="form-label">Email Id</label>
                        <input type="text" name="email" id="state" class="form-control" placeholder="email Id " maxlength="100">
                        
                        <div class="clearfix"></div>
                     </div>
                      <div class="form-group col-md-4">
                        <label class="form-label">Facebook</label>
                        <input type="text" name="facebook" id="state" class="form-control" placeholder="facebook link " maxlength="100">
                        
                        <div class="clearfix"></div>
                     </div>
                      <div class="form-group col-md-4">
                        <label class="form-label">Instagram</label>
                        <input type="text" name="instagram" id="state" class="form-control" placeholder="Instagram link " maxlength="100">
                       
                        <div class="clearfix"></div>
                     </div>
                      <div class="form-group col-md-4">
                        <label class="form-label">Twitter</label>
                        <input type="text" name="twitter" id="state" class="form-control" placeholder="Twitter link " maxlength="100">
                        
                        <div class="clearfix"></div>
                     </div>
                      <div class="form-group col-md-4">
                        <label class="form-label">Linkedin</label>
                        <input type="text" name="linkedin" id="state" class="form-control" placeholder="Linkedin link " maxlength="100">
                       
                        <div class="clearfix"></div>
                     </div>
                      <div class="form-group col-md-4">
                        <label class="form-label">Youtube</label>
                        <input type="text" name="youtube" id="state" class="form-control" placeholder="youtube link " maxlength="100">
                       
                        <div class="clearfix"></div>
                     </div>
                      
                      <div class="form-group col-md-4">
                        <label class="form-label">Logo</label>
                        <input type="file" name="logos" class="form-control">
                       
                        <div class="clearfix"></div>
                     </div>
                     <div class="form-group col-md-4">
                        <label class="form-label">Status</label>
                        <select class="custom-select" name="status" id="countryid">
                           <option value="1">Active</option>
                           <option value="0">DeActive</option>
                        
                        </select>
                        <div class="clearfix"></div>
                     </div>
                  </div>
                  <button type="submit" class="btn btn-primary">Save</button>
                   <a href="<?php echo base_url();?>slider" class="btn btn-primary">Cancel</a>
               </form>
            </div>
         </div>
      </div>
   </div>
 </div>
   <div class="row">
      <div class="col-sm-12">
         <div class="card">
            <div class="card-body">
               <div class="row align-items-center m-l-0">
                  <div class="col-sm-6">
                     <?php if($this->session->flashdata('msg')){ ?>
                     <div class="text-green">
                        <h5 class="text-left text-success">
                           <?php echo $this->session->flashdata('msg'); ?>
                        </h5>
                     </div>
                     <?php } ?>
                  </div>
                <!--  <div class="col-sm-6 text-right">
                     <a class="form_add"><button class="btn btn-success btn-sm mb-3"><i class="feather icon-plus"></i> Add Setting</button></a>
                  </div>-->
               </div>
               <div class="table-responsive">
                  <table id="report-table" class="table table-striped table-hover">
                     <thead>
                        <tr>
                           <th></th>
                          
                           <th>Mobile</th>
                           <th>Email</th>
                            <th>Address</th>
                           <th>Facebook</th>
                           <th>Instagram</th>
                           <th>Twitter</th>
                           <th>Linkedin</th>
                           <th>YouTube</th>
                            <th>Image</th>
                           <th>Date of Creation</th>
                           <th>Status</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php error_reporting(0);
                           $i=1;
                           foreach($vehicletype as $cust)
                           {
                           ?>
                        <tr>
                           <td><?php echo $i;?></td>
                           
                           <td><?php echo $cust['mobile'];?></td>
                            <td><?php echo $cust['email'];?></td>
                             <td><?php echo $cust['address'];?></td>
                             <td><?php echo $cust['facebook'];?></td>
                              <td><?php echo $cust['instagram'];?></td>
                               <td><?php echo $cust['twitter'];?></td>
                                <td><?php echo $cust['linkedin'];?></td>
                                 <td><?php echo $cust['youtube'];?></td>
                           <td><img src="<?php echo base_url();?>public/uploads/<?php echo $cust['logo'];?>" width="50"></td>
                           <td><?php echo $cust['created_at'];?></td>
                          <!-- <td>
                              <?php
                                 if($cust['status'] =='1') {
                                  ?>
                              <a href="<?php echo base_url();?>home/sliderstatus/<?php echo $cust['id']; ?>"><button class="btn btn-success">Active</button></a>
                              <?php
                                 } else if($cust['status'] == '0') {
                                   ?>
                              <a href="<?php echo base_url();?>home/sliderstatus/<?php echo $cust['id']; ?>"><button class="btn btn-danger">Deactive</button></a>
                              <?php
                                 } 
                                   ?>
                              <!-- <label class="switcher">
                                 <input type="checkbox" class="switcher-input">
                                 <span class="switcher-indicator">
                                 <span class="switcher-yes"></span>
                                 <span class="switcher-no"></span>
                                 </span>
                                 <span class="switcher-label"></span>
                                 </label> --
                           </td>-->
                           <td>
                             <!-- <a href="<?php echo base_url();?>editstate/<?php echo $cust['id'];?>" class="btn btn-info btn-sm"><i class="feather icon-edit"></i>&nbsp;Edit </a>-->
                              <a href="!#"  class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-report-1<?php echo $cust['id']; ?>">Edit</a>
                              <!--<a href="<?php echo base_url();?>home/slider_delete?del&id=<?php echo $cust['id'];?>" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Delete </a>-->
                           </td>
                        </tr>

          <div class="modal fade" id="modal-report-1<?php echo $cust['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
         <div class="modal-dialog ">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title">Edit Setting</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
               <form action="<?php echo base_url();?>home/editsetting" method="post" enctype="multipart/form-data">
               <input type="hidden" name="id" class="form-control" value="<?php echo $cust['id'];?>">
 <div class="form-row">
                     <div class="form-group col-md-4">
                        <label class="form-label">Mobile No.</label>
                        <input type="text" name="mobile" id="state" class="form-control" placeholder="Mobile No " maxlength="100" value="<?php echo $cust['mobile'];?>">
                        <input type="hidden" name="date" id="state" class="form-control" value="<?php echo(date("Y-m-d")); ?>">
                        <div class="clearfix"></div>
                     </div>
                      <div class="form-group col-md-4">
                        <label class="form-label">Email Id</label>
                        <input type="text" name="email" id="state" class="form-control" placeholder="email Id " maxlength="100" value="<?php echo $cust['email'];?>">
                        
                        <div class="clearfix"></div>
                     </div>
                      <div class="form-group col-md-4">
                        <label class="form-label">Facebook</label>
                        <input type="text" name="facebook" id="state" class="form-control" placeholder="facebook link " maxlength="100" value="<?php echo $cust['facebook'];?>">
                        
                        <div class="clearfix"></div>
                     </div>
                      <div class="form-group col-md-4">
                        <label class="form-label">Instagram</label>
                        <input type="text" name="instagram" id="state" class="form-control" placeholder="Instagram link " maxlength="100" value="<?php echo $cust['instagram'];?>">
                       
                        <div class="clearfix"></div>
                     </div>
                      <div class="form-group col-md-4">
                        <label class="form-label">Twitter</label>
                        <input type="text" name="twitter" id="state" class="form-control" placeholder="Twitter link " maxlength="100" value="<?php echo $cust['twitter'];?>">
                        
                        <div class="clearfix"></div>
                     </div>
                      <div class="form-group col-md-4">
                        <label class="form-label">Linkedin</label>
                        <input type="text" name="linkedin" id="state" class="form-control" placeholder="Linkedin link " maxlength="100" value="<?php echo $cust['linkedin'];?>">
                       
                        <div class="clearfix"></div>
                     </div>
                      <div class="form-group col-md-4">
                        <label class="form-label">Youtube</label>
                        <input type="text" name="youtube" id="state" class="form-control" placeholder="youtube link " maxlength="100" value="<?php echo $cust['youtube'];?>">
                       
                        <div class="clearfix"></div>
                     </div>
                      
                      <div class="form-group col-md-4">
                        <label class="form-label">Logo</label>
                        <input type="file" name="logos" class="form-control">
                        <input type="hidden" name="oldlogo" class="form-control" value="<?php echo $cust['logo'];?>">
                      <img src="<?php echo base_url();?>public/uploads/<?php echo $cust['logo'];?>" width="50">
                        <div class="clearfix"></div>
                     </div>
                    <div class="form-group col-md-12">
                        <label class="form-label">Address</label>
                        <textarea class="form-control" name="address"><?php echo $cust['address'];?></textarea>
                        <div class="clearfix"></div>
                     </div>
                  </div>              
<div class="col-sm-12">
<button class="btn btn-primary" type="submit">Update</button>
<button class="btn btn-danger" data-dismiss="modal">Exit</button>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
   
<script>
$(document).ready(function(){
  $(".form_add").click(function(){
    $(".form_show").toggle();
     $(".form_add").hide();
    
  });
});
$(document).ready(function(){
  $(".form_hide").click(function(){
    $(".form_add").toggle();
     $(".form_show").hide();
      
  });
});
</script>
<?php include("footer.php");?>