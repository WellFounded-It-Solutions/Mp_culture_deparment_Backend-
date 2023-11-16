<?php include("header.php");?>
<div class="layout-content">
<div class="container-fluid flex-grow-1 container-p-y">
<h4 class="font-weight-bold py-3 mb-0">Brands</h4>
<div class="text-muted small mt-0 mb-4 d-block breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard"><i class="feather icon-home"></i></a></li>
<li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard">Dashboard</a></li>
<li class="breadcrumb-item <?php if($this->uri->segment(1)=='brand') { echo 'active';}?>"><a href="<?php echo base_url();?>brand">Brands</a></li>
</ol>
</div>
   <div class="row">
       
<?php include("mastercontent.php");?>

<?php include("brandscontent.php");?>




       
      <div class="col-md-12">
         <div class="card">
                              <div class="card-header">
                                 <h5>Brands</h5>
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
                                       <button class="btn btn-success btn-sm mb-3 btn-round" data-toggle="modal" data-target="#modal-report"><i class="feather icon-plus"></i> Add Brand</button>
                                    </div>
                                 </div>
                                 <div class="table-responsive">
                                    <table id="report-table" class="table table-bordered table-striped mb-0">
                                       <thead>
                                        <tr>
                                        <th>S.No.</th>
                                        <th>Image</th>
                                       <th>Brand</th>
                                       <th>Date</th>
                                       <th>Status</th>
                                       <th>Action</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                       <?php 
$i=1;
foreach($brandsinactive as $cust)
{
?>
<tr>
<td><?php echo $i;?></td>
<td><img src="<?php echo base_url();?>assets/back/img/brand/<?php echo $cust['brandimage'];?>" class="img-fluid img-radius wid-40" alt=""></td>
<td><?php echo $cust['brand'];?></td>
<td><?php echo $cust['date'];?></td>
<td>
<?php
                          if($cust['status'] == '1') {
                           ?>
                                                    <a href="<?php echo base_url();?>backend/brandstatus/<?php echo $cust['id']; ?>"><button class="btn btn-success">Active</button></a>

                                                    <?php
                          } else if($cust['status'] == '0') {
                            ?>
                                                        <a href="<?php echo base_url();?>backend/brandstatus/<?php echo $cust['id']; ?>"><button class="btn btn-danger">Deactive</button></a>
                                                        <?php
                          } 
                            ?>
</td>
                                            <td>
											<a href="!#"  class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-report-1<?php echo $cust['id']; ?>">Edit</a>

                                            

                                            <a href="<?php echo base_url();?>deletebrand/<?php echo $cust['id']; ?>" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Delete </a>
                                            </td>
                                            </tr>

                                            <div class="modal fade" id="modal-report-1<?php echo $cust['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
         <div class="modal-dialog ">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title">Edit Brand</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
               <form action="<?php echo base_url();?>edit_brand" method="post" enctype="multipart/form-data">
               <input type="hidden" name="id" class="form-control" value="<?php echo $cust['id'];?>">
<div class="row">
<div class="form-group col-sm-6">
<label class="floating-label">Brand Name</label>
<input type="text" name="brand" id="brand" class="form-control" placeholder="Brand Name like American, Collar" maxlength="100" value="<?php echo $cust['brand']; ?>" required>
</div>
<div class="form-group col-sm-6">
<label class="floating-label">Brand Image</label>
<div class="col"><img class="img-radius img-fluid wid-80" src="<?php echo base_url();?>assets/back/img/brand/<?php echo $cust['brandimage']; ?>" alt="Brand Image"></div>
<input type="file" accept="image/*" name="brandimage" id="brandimage" class="form-control"  placeholder="Brand Image">
</div>
<div class="form-group col-sm-6">
<label class="floating-label">Description</label>
<textarea class="form-control" name="description" id="description" rows="10"><?php echo $cust['description']; ?></textarea>
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
                  <h5 class="modal-title">brand</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
               <form action="<?php echo base_url();?>add_brand" method="post" enctype="multipart/form-data">
               <div class="row">
<div class="form-group col-sm-6">
<label class="floating-label">Brand Name</label>
<input type="text" name="brand" id="brand" class="form-control" placeholder="Brand Name like American, Collar" maxlength="100" required>
</div>
<div class="form-group col-sm-6">
<label class="floating-label">Brand Image</label>
<input type="file" accept="image/*" name="brandimage" id="brandimage" class="form-control"  placeholder="Brand Image">
</div>
<div class="form-group col-sm-6">
<label class="floating-label">Description</label>
<textarea class="form-control" name="description" id="description" rows="10"></textarea>
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