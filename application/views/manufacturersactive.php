<?php include("header.php");?>
<div class="layout-content">
<div class="container-fluid flex-grow-1 container-p-y">
<h4 class="font-weight-bold py-3 mb-0">Manufacturers</h4>
<div class="text-muted small mt-0 mb-4 d-block breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard"><i class="feather icon-home"></i></a></li>
<li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard">Dashboard</a></li>
<li class="breadcrumb-item <?php if($this->uri->segment(1)=='manufacturers') { echo 'active';}?>"><a href="<?php echo base_url();?>manufacturers">Manufacturers</a></li>
</ol>
</div>
<div class="row">


<?php include("mastercontent.php");?>

<div class="col-sm-12">
<div class="card">
<div class="card-header">
<h5>Manufacturers Summary</h5>
</div>
<div class="card-body text-center">

<div class="row">
<div class="col-md-3 col-xs-6">
<h3 class="text-info"><a href="<?php echo base_url();?>manufacturerstoday" class="text-info"><?php if(isset($countmanufacturerstoday)){echo $countmanufacturerstoday;} else { echo "";}?></a></h3>
<span class="text-info">Today Manufacturers</span>
</div>
<div class="col-md-3 col-xs-6">
<h3 class="text-success"><a href="<?php echo base_url();?>manufacturersactive" class="text-success"><?php if(isset($countmanufacturersactive)){echo $countmanufacturersactive;} else { echo "";}?></a></h3>
<span class="text-success">Active Manufacturers</span>
</div>
<div class="col-md-3 col-xs-6">
<h3 class="text-danger"><a href="<?php echo base_url();?>manufacturersinactive" class="text-danger"><?php if(isset($countmanufacturersinactive)){echo $countmanufacturersinactive;} else { echo "";}?></a></h3>
<span class="text-danger">Inactive Manufacturers</span>
</div>
<div class="col-md-3 col-xs-6">
<h3 class="text-dark"><a href="<?php echo base_url();?>manufacturers" class="text-dark"><?php if(isset($countmanufacturers)){echo $countmanufacturers;} else { echo "";}?></a></h3>
<span class="text-dark">Total Manufacturers</span>
</div>


</div>
</div>
</div> 
</div>


      <div class="col-md-12">
         <div class="card">
                              <div class="card-header">
                                 <h5>Manufacturers</h5>
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
                                       <button class="btn btn-success btn-sm mb-3 btn-round" data-toggle="modal" data-target="#modal-report"><i class="feather icon-plus"></i> Add Manufacturer</button>
                                    </div>
                                 </div>
                                 <div class="table-responsive">
                                    <table id="report-table" class="table table-bordered table-striped mb-0">
                                       <thead>
                                        <tr>
                                        <th>S.No.</th>
                                        <th>Image</th>
                                        <th>Manufacturer</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                          </tr>
                                       </thead>
                                       <tbody>
<?php 
$i=1;
foreach($manufacturersactive as $cust)
{
?>
<tr>
<td><?php echo $i;?></td>
<td><img src="<?php echo base_url();?>assets/img/manufacturer/<?php echo $cust['profileimage'];?>" class="img-fluid img-radius wid-40" alt=""></td>
<td><?php echo $cust['name'];?></td>
<td><?php echo $cust['email'];?></td>
<td>
<?php
                          if($cust['status'] == '1') {
                           ?>
                                                    <a href="<?php echo base_url();?>home/manufacturerstatus/<?php echo $cust['id']; ?>"><button class="btn btn-success">Active</button></a>

                                                    <?php
                          } else if($cust['status'] == '0') {
                            ?>
                                                        <a href="<?php echo base_url();?>home/manufacturerstatus/<?php echo $cust['id']; ?>"><button class="btn btn-danger">Deactive</button></a>
                                                        <?php
                          } 
                            ?>

</td>
                                            <td>
											<a href="!#"  class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-report-1<?php echo $cust['id']; ?>">Edit</a>

                                            

                                            <a href="<?php echo base_url();?>deletemanufacturer/<?php echo $cust['id']; ?>" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Delete </a>
                                            </td>
                                            </tr>

                                            <div class="modal fade" id="modal-report-1<?php echo $cust['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
         <div class="modal-dialog ">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title">Edit manufacturer</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
               <form action="<?php echo base_url();?>edit_manufacturer" method="post" enctype="multipart/form-data">
               <input type="hidden" name="id" class="form-control" value="<?php echo $cust['id'];?>">
<div class="row">
<div class="col-sm-6">
<div class="form-group">
<label class="floating-label" for="Name">manufacturer Name</label>
<input type="text" name="name" id="name" class="form-control" placeholder="Manufacturer Name like Parle G Agro" maxlength="20" value="<?php echo $cust['name']; ?>" required>
</div>
</div>
<div class="col-sm-6">
<label class="floating-label" for="Email">Email</label>
<input type="email" name="email" id="email" class="form-control" placeholder="Manufacturer Email" value="<?php echo $cust['email']; ?>" maxlength="100">
</div>
<div class="col-sm-12">
<div class="form-group fill">
<label class="floating-label" for="Icon">Profile Icon</label>
<div class="col"><img class="img-radius img-fluid wid-80" src="<?php echo base_url();?>assets/img/manufacturer/<?php echo $cust['profileimage']; ?>" alt="Profile image"></div>
<input type="file" accept="image/*" name="profileimage" id="profileimage" class="form-control"  placeholder="Profile Image">
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
                  <h5 class="modal-title">Add Manufacturer</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
               <form action="<?php echo base_url();?>add_manufacturer" method="post" enctype="multipart/form-data">
<div class="row">
<div class="col-sm-6">
<div class="form-group">
<label class="floating-label" for="Name">Manufacturer Name</label>
<input type="text" name="name" id="name" class="form-control" placeholder="Manufacturer Name like Parle G Agro" maxlength="20" required>
</div>
</div>
<div class="col-sm-6">
<label class="floating-label" for="Email">Email</label>
<input type="email" name="email" id="email" class="form-control" placeholder="Manufacturer Email" maxlength="100">
</div>
<div class="col-sm-12">
<div class="form-group fill">
<label class="floating-label" for="Icon">Profile Icon</label>
<input type="file" accept="image/*" name="profileimage" id="profileimage" class="form-control"  placeholder="Profile Image">
</div>
<div class="col-sm-12">
<button class="btn btn-primary" type="submit">Submit</button>
<button class="btn btn-danger" data-dismiss="modal">Exit</button>
</div>
</div>
</form>
               </div>
            </div>
         </div>
      </div>
      

      </div>
      </div>
      

      

     
<?php include("footer.php");?>