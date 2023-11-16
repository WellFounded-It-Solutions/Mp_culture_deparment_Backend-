<?php include("header.php");?>
<div class="layout-content">
<div class="container-fluid flex-grow-1 container-p-y">
<h4 class="font-weight-bold py-3 mb-0">Menu bar</h4>
<div class="text-muted small mt-0 mb-4 d-block breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard"><i class="feather icon-home"></i></a></li>
<li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard">Dashboard</a></li>
<li class="breadcrumb-item <?php if($this->uri->segment(1)=='manubar') { echo 'active';}?>"><a href="<?php echo base_url();?>manubar">Menu bar</a></li>
</ol>
</div>
<div class="row">
<?php //include("mastercontent.php");?>
<!--<div class="col-sm-12">
<div class="card">
<div class="card-header">
<h5>Designations Summary</h5>
</div>
<div class="card-body text-center">

<div class="row">
<div class="col-md-3 col-xs-6">
<h3 class="text-info"><?php if(isset($countdesignationstoday)){echo $countdesignationstoday;} else { echo "";}?></h3>
<span class="text-info">Today Designations</span>
</div>
<div class="col-md-3 col-xs-6">
<h3 class="text-success"><?php if(isset($countdesignationsactive)){echo $countdesignationsactive;} else { echo "";}?></h3>
<span class="text-success">Active Designations</span>
</div>
<div class="col-md-3 col-xs-6">
<h3 class="text-danger"><?php if(isset($countdesignationsinactive)){echo $countdesignationsinactive;} else { echo "";}?></h3>
<span class="text-danger">Inactive Designations</span>
</div>
<div class="col-md-3 col-xs-6">
<h3 class="text-dark"><?php if(isset($countdesignations)){echo $countdesignations;} else { echo "";}?></h3>
<span class="text-dark">Total Designations</span>
</div>
</div>
</div>
</div> 
</div>-->
      <div class="col-md-12">
         <div class="card">
                              <div class="card-header">
                                 <h5>Menu bar</h5>
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
                                       <button class="btn btn-success btn-sm mb-3 btn-round" data-toggle="modal" data-target="#modal-report"><i class="feather icon-plus"></i> Menubar</button>
                                    </div>
                                 </div>
                                 <div class="table-responsive">
                                    <table id="report-table" class="table table-bordered table-striped mb-0">
                                       <thead>
                                        <tr>
                                        <th>S.No.</th>
                                       <th>Manu</th>
                                       <th>Links</th>
                                        <th>Icon</th>
                                       <th>Status</th>
                                       <th>Action</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                       <?php 
$i=1;
foreach($manubar as $cust)
{
?>
<tr>
<td><?php echo $i;?></td>

<td><?php echo $cust['manubar'];?></td>
<td><?php echo $cust['links'];?></td>
<td><?php echo $cust['icon'];?></td>
<td>
<?php
                          if($cust['status'] == '1') {
                           ?>
                                                    <a href="<?php echo base_url();?>home/manubar_stattus/<?php echo $cust['id']; ?>"><button class="btn btn-success">Active</button></a>

                                                    <?php
                          } else if($cust['status'] == '0') {
                            ?>
                                                        <a href="<?php echo base_url();?>home/manubar_stattus/<?php echo $cust['id']; ?>"><button class="btn btn-danger">Deactive</button></a>
                                                        <?php
                          } 
                            ?>
</td>
                                            <td>
											<a href="!#"  class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-report-1<?php echo $cust['id']; ?>">Edit</a>

                                            

                    <a href="<?php echo base_url();?>manu_delete?del&id=<?php echo $cust['id']; ?>" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Delete </a>
                                            </td>
                                            </tr>

                                            <div class="modal fade" id="modal-report-1<?php echo $cust['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
         <div class="modal-dialog ">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title">Edit Menu bar</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
               <form action="<?php echo base_url();?>edit_manubar" method="post" enctype="multipart/form-data">
               <input type="hidden" name="id" class="form-control" value="<?php echo $cust['id'];?>">
<div class="row">
<!--<div class="form-group col-sm-12">
<select class="custom-select" name="did" id="did" required>
<option value="<?php echo $cust['did'];?>" selected><?php 
foreach($department as $dp) {
    if($dp['id']==$cust['did']){
        echo $dp['department'];
    }
}
?></option>
<?php foreach($department as $dp1) { ?>
<option value="<?php echo $dp1['id'];?>"><?php echo $dp1['department'];?></option>
<?php } ?>
</select>
</div>-->

<input type="hidden" name="id"  class="form-control"  value="<?php echo $cust['id']; ?>">
<div class="form-group col-sm-6">
<label class="floating-label">Menu bar</label>
<input type="text" name="manubar" id="designation" class="form-control" placeholder="Designation Name like Executive, Team Lead" maxlength="100" value="<?php echo $cust['manubar']; ?>" required>
</div>
<div class="form-group col-sm-6">
<label class="floating-label">Links</label>
<textarea class="form-control" name="links" id="description" rows="10"><?php echo $cust['links']; ?></textarea>
</div>
<div class="form-group col-sm-12">
<label class="floating-label">Icon</label>
<input type="text" name="icon" id="" class="form-control" placeholder="Enter icon" maxlength="100" value="<?php echo $cust['icon']; ?>" required>
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
                  <h5 class="modal-title">Add Menu bar</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
               <form action="<?php echo base_url();?>add_manubar" method="post" enctype="multipart/form-data">
               <div class="row">
              <!-- <div class="form-group col-sm-6">
<label class="floating-label">Department</label>
<select class="custom-select" name="did" id="did" required>
<?php foreach($department as $dp) { ?>
<option value="<?php echo $dp['id'];?>"><?php echo $dp['department'];?></option>
<?php } ?>
</select>
</div>-->
<div class="form-group col-sm-6">
<label class="floating-label">Menu bar</label>
<input type="text" name="manubar" id="designation" class="form-control" placeholder="Menu" maxlength="100" required>
</div>
<div class="form-group col-sm-6">
<label class="floating-label">Icon</label>
<input type="text" name="icon" class="form-control" placeholder="Enter Icon" maxlength="100" required>
</div>
<div class="form-group col-sm-6">
<label class="floating-label">Links</label>
<textarea class="form-control" name="links" id="description" rows="10"></textarea>
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
      


      

     
<?php include("footer.php");?>