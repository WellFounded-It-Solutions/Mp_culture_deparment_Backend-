<?php include("header.php");?>
<div class="layout-content">
<div class="container-fluid flex-grow-1 container-p-y">
<h4 class="font-weight-bold py-3 mb-0">Academies</h4>
<div class="text-muted small mt-0 mb-4 d-block breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard"><i class="feather icon-home"></i></a></li>
<li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard">Dashboard</a></li>
<li class="breadcrumb-item <?php if($this->uri->segment(1)=='department') { echo 'active';}?>"><a href="<?php echo base_url();?>department">Departments</a></li>
</ol>
</div>
<div class="row">


<?php //include("mastercontent.php");?>


<!---
<div class="col-sm-12">
<div class="card">
<div class="card-header">
<h5>Departments Summary</h5>
</div>
<div class="card-body text-center">

<div class="row">
<div class="col-md-3 col-xs-6">
<h3 class="text-info"><?php if(isset($countdepartmentstoday)){echo $countdepartmentstoday;} else { echo "";}?></h3>
<span class="text-info">Today Departments</span>
</div>
<div class="col-md-3 col-xs-6">
<h3 class="text-success"><?php if(isset($countdepartmentsactive)){echo $countdepartmentsactive;} else { echo "";}?></h3>
<span class="text-success">Active Departments</span>
</div>
<div class="col-md-3 col-xs-6">
<h3 class="text-danger"><?php if(isset($countdepartmentsinactive)){echo $countdepartmentsinactive;} else { echo "";}?></h3>
<span class="text-danger">Inactive Departments</span>
</div>
<div class="col-md-3 col-xs-6">
<h3 class="text-dark"><?php if(isset($countdepartments)){echo $countdepartments;} else { echo "";}?></h3>
<span class="text-dark">Total Departments</span>
</div>


</div>
</div>
</div> 
</div>-->
      <div class="col-md-12">
         <div class="card">
                              <div class="card-header">
                                 <h5>Departments</h5>
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
                                       <button class="btn btn-success btn-sm mb-3 btn-round" data-toggle="modal" data-target="#modal-report"><i class="feather icon-plus"></i> Add Department</button>
                                    </div>
                                 </div>
                                 <div class="table-responsive">
                                    <table id="report-table" class="table table-striped table-hover" data-show-export="true" data-click-to-select="true"
  data-toolbar="#toolbar"
  data-show-toggle="true"
  data-show-columns="true"
  data-url="">
                                       <thead>
                                        <tr>
                                        <th>S.No.</th>
                                        
                                       <th>Action</th>
                                        <th>Status</th>
                                         <th>Username</th>
                                       <th>Department code</th>
                                       <th>Department Name </th>
                                       <th>Department Website </th>
                                       <th>Department About</th>
                                       <th>Address</th>
                                       <th>Conact Number </th>
                                       <th>Name </th>
                                        <th>Designation </th>
                                         <th>Number</th>
                                         <th>Email</th>
                                      
                                          </tr>
                                       </thead>
                                       <tbody>
                                       <?php 
$i=1;
foreach($department as $cust)
{
?>
<tr>
<td><?php echo $i;?></td>
  <td>
											<a href="!#"  class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-report-1<?php echo $cust['id']; ?>">Edit</a>

                                            

                                            <a href="<?php echo base_url();?>deletedepartment/<?php echo $cust['id']; ?>" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Delete </a>
                                            </td>
<td>
<?php
                          if($cust['status'] == '1') {
                           ?>
                                                    <a href="<?php echo base_url();?>home/departmentstatus/<?php echo $cust['id']; ?>"><button class="btn btn-success">Active</button></a>

                                                    <?php
                          } else if($cust['status'] == '0') {
                            ?>
                                                        <a href="<?php echo base_url();?>home/departmentstatus/<?php echo $cust['id']; ?>"><button class="btn btn-danger">Deactive</button></a>
                                                        <?php
                          } 
                            ?>
</td>
                                          
<td><?php echo $cust['username'];?></td>
<td><?php echo $cust['dept_code'];?></td>
<td><?php echo $cust['dept_name'];?></td>
<td><?php echo $cust['dept_website'];?></td>
<td><?php echo $cust['dept_about'];?></td>
<td><?php echo $cust['dept_address'];?></td>
<td><?php echo $cust['dept_contact'];?></td>
<td><?php echo $cust['dept_name1'];?></td>
<td><?php echo $cust['dept_designation'];?></td>
<td><?php echo $cust['dept_mobile'];?></td>
<td><?php echo $cust['dept_email'];?></td>


                                            </tr>

                                            <div class="modal fade" id="modal-report-1<?php echo $cust['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
         <div class="modal-dialog ">
            <div class="modal-content">
               <div class="modal-header">
                 <!-- <h5 class="modal-title">Edit Department</h5>--->
                <center> <img src="https://jusmarktech.in/Culture/img/core-img/ashish%20ji.png" width="100" style="margin-left: 176px;"></center>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
               <form action="<?php echo base_url();?>edit_department" method="post" enctype="multipart/form-data">
               <input type="hidden" name="id" class="form-control" value="<?php echo $cust['id'];?>">
         <div class="row">
<div class="form-group col-sm-6">
<label class="floating-label">Department code</label>
<input type="text" name="dept_code" id="" class="form-control" placeholder="Department code" value="<?php echo $cust['dept_code'];?>">
</div>
<div class="form-group col-sm-6">
<label class="floating-label">Department Name</label>
<input type="text" name="dept_name" id="department" class="form-control" placeholder="Department Name" value="<?php echo $cust['dept_name'];?>">
</div>

</div>

<div class="row">
<div class="form-group col-sm-6">
<label class="floating-label">Department Website</label>
<input type="text" name="dept_website" id="department" class="form-control" placeholder="Department Website" value="<?php echo $cust['dept_website'];?>">
</div>
<div class="form-group col-sm-6">
<label class="floating-label">Department About</label>
<input type="text" name="dept_about" id="department" class="form-control" placeholder="Department About" value="<?php echo $cust['dept_about'];?>">
</div>

</div>

<div class="row">
<!--<div class="form-group col-sm-6">
<label class="floating-label">Department Name</label>
<input type="text" name="deptment_name" id="department" class="form-control" placeholder="Department Name" value="<?php echo $cust['deptment_name'];?>">
</div>-->
<div class="form-group col-sm-6">
<label class="floating-label">Address</label>
<input type="text" name="dept_address" id="department" class="form-control" placeholder="Address" value="<?php echo $cust['dept_address'];?>">
</div>


<div class="form-group col-sm-6">
<label class="floating-label">Department Contact</label>
<input type="text" name="dept_contact" id="department" class="form-control" placeholder="Department Contact" value="<?php echo $cust['dept_contact'];?>">
</div>
</div>
<div class="row">
   
<div class="form-group col-sm-6">
     <label><u>Add Contact Person </u></label>
  <br>
<label class="floating-label"> Name </label>
<input type="text" name="dept_name1" id="department" class="form-control" placeholder="Name" value="<?php echo $cust['dept_name1'];?>">
</div>
<div class="form-group col-sm-6">
<label class="floating-label">Designation</label>
<input type="text" name="dept_designation" id="designation" class="form-control" placeholder="Designation" value="<?php echo $cust['dept_designation'];?>">
</div>

</div>

<div class="row">
<div class="form-group col-sm-6">
<label class="floating-label">Mobile No.</label>
<input type="text" name="dept_mobile" id="mobile" class="form-control" placeholder="Mobile No." value="<?php echo $cust['dept_mobile'];?>" >
</div>
<div class="form-group col-sm-6">
<label class="floating-label">Email</label>
<input type="text" name="dept_email" id="" class="form-control" placeholder="Email" value="<?php echo $cust['dept_email'];?>">
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
                  <center> <img src="https://jusmarktech.in/Culture/img/core-img/ashish%20ji.png" width="100" style="margin-left: 176px;"></center>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
               <form action="<?php echo base_url();?>add_department" method="post" enctype="multipart/form-data">
               <div class="row">
<div class="form-group col-sm-6">
<label class="floating-label">Department code</label>
<input type="text" name="dept_code" id="" class="form-control" placeholder="Department code" maxlength="100">
</div>
<div class="form-group col-sm-6">
<label class="floating-label">Department Name</label>
<input type="text" name="dept_name" id="department" class="form-control" placeholder="Department Name" maxlength="100">
</div>

</div>

<div class="row">
<div class="form-group col-sm-6">
<label class="floating-label">Department Website</label>
<input type="text" name="dept_website" id="department" class="form-control" placeholder="Department Website" maxlength="100">
</div>
<div class="form-group col-sm-6">
<label class="floating-label">Department About</label>
<input type="text" name="dept_about" id="department" class="form-control" placeholder="Department About" maxlength="100">
</div>

</div>

<div class="row">
<div class="form-group col-sm-6">
<label class="floating-label">Department Name</label>
<input type="text" name="deptment_name" id="department" class="form-control" placeholder="Department Name" maxlength="100">
</div>
<div class="form-group col-sm-6">
<label class="floating-label">Address</label>
<input type="text" name="dept_address" id="department" class="form-control" placeholder="Address" maxlength="100">
</div>

</div>

<div class="row">
<div class="form-group col-sm-12">
<label class="floating-label">Department Contact</label>
<input type="text" name="dept_contact" id="department" class="form-control" placeholder="Department Contact" maxlength="100">
</div>
</div>
<div class="row">
   
<div class="form-group col-sm-6">
     <label><u>Add Contact Person </u></label>
  <br>
<label class="floating-label"> Name </label>
<input type="text" name="dept_name1" id="department" class="form-control" placeholder="Name" maxlength="100">
</div>
<div class="form-group col-sm-6">
<label class="floating-label">Designation</label>
<input type="text" name="dept_designation" id="designation" class="form-control" placeholder="Designation" maxlength="100">
</div>

</div>

<div class="row">
<div class="form-group col-sm-6">
<label class="floating-label">Mobile No.</label>
<input type="text" name="dept_mobile" id="mobile" class="form-control" placeholder="Mobile No." maxlength="100" >
</div>
<div class="form-group col-sm-6">
<label class="floating-label">Email</label>
<input type="text" name="dept_email" id="" class="form-control" placeholder="Email" maxlength="100">
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