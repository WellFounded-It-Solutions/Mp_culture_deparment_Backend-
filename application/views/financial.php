<?php 
if(empty($_SESSION['company'])){
 include("header_div.php");
}else{
include("header_comp.php");
}?>

<div class="layout-content">
<div class="container-fluid flex-grow-1 container-p-y">
<h4 class="font-weight-bold py-3 mb-0">Company</h4>
<div class="text-muted small mt-0 mb-4 d-block breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard"><i class="feather icon-home"></i></a></li>
<li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard">Dashboard</a></li>
<li class="breadcrumb-item <?php if($this->uri->segment(1)=='category') { echo 'active';}?>"><a href="<?php echo base_url();?>category">Company</a></li>
</ol>
</div>
   <div class="row">


<?php include("mastercontent.php");?>

<?php// include("categorycontent.php");?>




      <div class="col-md-12">
         <div class="card">
                              <div class="card-header">
                                 <h5>Financial Year</h5>
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
                                       <button class="btn btn-success btn-sm mb-3 btn-round" data-toggle="modal" data-target="#modal-report"><i class="feather icon-plus"></i> Add Financial Year</button>
                                    </div>
                                 </div>
                                 <div class="table-responsive">
                                    <table id="report-table" class="table table-bordered table-striped mb-0">
                                       <thead>
                                        <tr>
                                        <th>S.No.</th>
                                        <th>Division Name</th>
                                        <th>Company Name</th>
                                       <th>Financial Year</th>
                                       
                                       <th>Date</th>
                                       <th>Status</th>
                                       <th>Action</th>
                                       </tr>
                                       </thead>
                                       <tbody>
                                       <?php 
$i=1;
foreach($category as $cust)
{
?>
<tr>
<td><?php echo $i;?></td>
<td><?php echo $cust['f_division'];?></td>
<td><?php echo $cust['f_company'];?></td>
<td><?php echo $cust['fy_year'];?></td>
<!-- <td><img class="" src="<?php echo base_url();?>assets/img/user/<?php echo $cust['div_icon'];?>" alt="Product image"></td> -->
<td><?php echo $cust['f_date'];?></td>
<td>
<?php
                          if($cust['f_status'] == '1') {
                           ?>
                                                    <a href="<?php echo base_url();?>home/categorystatus/<?php echo $cust['fy_id']; ?>"><button class="btn btn-success">Active</button></a>

                                                    <?php
                          } else if($cust['f_status'] == '0') {
                            ?>
                                                        <a href="<?php echo base_url();?>home/categorystatus/<?php echo $cust['fy_id']; ?>"><button class="btn btn-danger">Deactive</button></a>
                                                        <?php
                          } 
                            ?>
</td>
                                            <td>
											<a href="!#"  class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-report-1<?php echo $cust['fy_id']; ?>">Edit</a>

                                            

                                            <a href="<?php echo base_url();?>deletecategory/<?php echo $cust['fy_id']; ?>" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Delete </a>
                                            </td>
                                            </tr>

                                            <div class="modal fade" id="modal-report-1<?php echo $cust['fy_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
         <div class="modal-dialog ">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title">Edit Company</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
               <form action="<?php echo base_url();?>edit_category" method="post" enctype="multipart/form-data">
               <input type="hidden" name="id" class="form-control" value="<?php echo $cust['fy_id'];?>">
<div class="row">

<div class="form-group col-sm-6">
<label class="floating-label">Company Name</label>
<input type="text" name="category" id="category" class="form-control" placeholder="Category Name like Biscuit, Oil" maxlength="100" value="<?php echo $cust['category']; ?>" required>
</div>
<div class="form-group col-sm-6">
<label class="floating-label">Icon</label>
<div class="col"><img class="img-radius img-fluid wid-80" src="<?php echo base_url();?>assets/img/product/" alt="Product image"></div>
<input type="file" name="image" id="image" class="form-control" placeholder="Category Name like Biscuit, Oil" maxlength="100" required>
</div>
<!-- <div class="form-group col-sm-6">
<label class="floating-label">Description</label>
<textarea class="form-control" name="description" id="description" rows="10"><?php echo $cust['description']; ?></textarea>
</div> -->

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
                  <h5 class="modal-title">Add Financial Year</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
               <form action="<?php echo base_url();?>home/add_financial" method="post" enctype="multipart/form-data">
               <div class="row">

<div class="form-group col-sm-6">
<label class="floating-label">Financial Year</label>
<input type="text" name="name" id="category" class="form-control" placeholder="Category Name like Biscuit, Oil" maxlength="100" required>
</div>
<!-- <div class="form-group col-sm-6">
<label class="floating-label">Icon</label>
<input type="file" name="profileimage" id="image" class="form-control" placeholder="Category Name like Biscuit, Oil" maxlength="100" required>
</div> -->
<!-- <div class="form-group col-sm-6">
<label class="floating-label">Description</label>
<textarea class="form-control" name="description" id="description" rows="10"></textarea>
</div> -->

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